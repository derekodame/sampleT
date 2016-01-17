<?php


error_reporting(E_ALL ^ E_NOTICE);


require_once ("connection.php");
include 'classess/PHPExcel.php';

include"../functions/drop.php";


$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objReader->setReadDataOnly(true);



$fileName = $_FILES["excel"]["name"];
$fileTmpLoc = $_FILES["excel"]["tmp_name"];
$fileType = $_FILES["excel"]["type"];


//function to move xlxs file




if($_FILES['excel']['type']=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
	
move_uploaded_file($fileTmpLoc, "../file/" . $fileName);


$objPHPExcel = $objReader->load("../file/".$fileName);
$objWorksheet = $objPHPExcel->getActiveSheet();

$highestRow = $objWorksheet->getHighestRow(); 
$highestColumn = $objWorksheet->getHighestColumn(); 

$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); 

//date
$date = time();
$day = date('d', $date);
$month = date ('m', $date);
$year = date('Y', $date);
$first_day = mktime(0,0,0,$month, $day, $year);
$day_of_week = date('D', $first_day);
$first_day = mktime(0,0,0,$month, $day, $year);
$title= date('F', $first_day);

$d = "  $title $day,$year";

mysqli_query($con,"INSERT INTO test VALUES('','$fileName', '$d')");
/*/// for displaying table of excel xlxs
//echo '<table border="1">' . "\n";
for ($row = 1; $row <= $highestRow; ++$row) {
  echo '<tr>' . "\n";
//
  for ($col = 0; $col <= $highestColumnIndex; ++$col) {
   // echo '<td>' . $objWorksheet->getCellByColumnAndRow($col, $row)->getValue() . '</td>' . "\n";
  }
 //echo '</tr>' . "\n";
}
//echo '</table>' . "\n";*/



$rows = array();
for ($row = 1; $row <= $highestRow; ++$row) {
	
	
  for ($col = 0; $col <= $highestColumnIndex; ++$col) {
    $rows[$col] = mysqli_real_escape_string($con,$objWorksheet->getCellByColumnAndRow($col, $row)->getValue());
  }

if($rows[0]=='Age'){
	$rows[0]='****';
	}else $rows[0];
 		
		
	$query =mysqli_query($con,"select * from groupp where (age = '$rows[0]') and (Stage_of_Change = '$rows[1]')  and (Symptoms_and_Disorders = '$rows[2]')  and (Psychological_Treatment = '$rows[3]')  and (Evidence_Level = '$rows[4]') and (Basis_for_Evidence = '$rows[5]')");
		$mum =mysqli_num_rows($query);


			
		if($mum==0){	
		
		$result = mysqli_query($con,"insert into groupp values('id','$rows[0]','$rows[1]','$rows[2]','$rows[3]','$rows[4]','$rows[5]')");
		dropbox($con,$rows[0],$rows[1],$rows[2],$rows[3],$rows[4],$rows[5]);
		
		
		 
		}else $already= ", Some rows already exist ";
 
 if ($result === false) {
    die('Invalid query: ' . mysql_error());
}
}

echo " Data was insected successfully :)";
echo $already;
}else echo "Only accepts excel file with the extesion of 'xlxs'";





?>