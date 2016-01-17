<?php


error_reporting(E_ALL ^ E_NOTICE);
//ini_set("display_errors",1);
require_once 'excel_reader2.php';
require_once 'db.php';

$fileName = $_FILES["excel"]["name"];


$data = new Spreadsheet_Excel_Reader("d.xls");



for($i=0;$i<count($data->sheets);$i++) // Loop to get all sheets in a file.
{	
	if(count($data->sheets[$i][cells])>0) // checking sheet not empty
	{
	
		for($j=1;$j<=count($data->sheets[$i][cells]);$j++) // loop used to get each row of the sheet
		{ 
			
		$data->sheets[$i][cells][$j][1];
		$age = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][1]);
		$stage = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][2]);
		$Symptoms = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][3]);
		$Psychological = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][4]);
		$Evidence = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][5]);
		$Basis = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][6]);
			
	//	$query =mysqli_query($connection,"select * from groupp where age = $age");
		//	$mum =mysqli_num_rows($query);
			
			if(0==0){
			
			
			
			
			$query = mysqli_query($connection,"insert into groupp values('id','$age','$stage','$Symptoms','$Psychological','$Evidence','$Basis')");
		
		
	 //dropbox($con,$age,$stage,$Symptoms,$Psychological,$Evidence,$Basis);
			
		
			
			}else echo "alreay exist";
		
		}
	}
	
}

$html.="</table>";
echo $html;
echo "<br />Data Inserted in dababase";
?>