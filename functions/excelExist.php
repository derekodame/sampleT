<?php 
 error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");

session_start();
$emailss = $_SESSION['email'];




 
$fileName = $_FILES["excel"]["name"];
$fileTmpLoc = $_FILES["excel"]["tmp_name"];
$fileType = $_FILES["excel"]["type"];
$fileSize = $_FILES["excel"]["size"];
$fileErrorMsg = $_FILES["excel"]["error"];


if(!$fileTmpLoc){
echo "Error: Please browse for a file before clicking the upload button";
exit();
}

if($fileName){

if($_FILES['excel']['type']=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){


$query = mysqli_query($con,"SELECT * FROM test WHERE a = '$fileName '");
 $numrows = mysqli_num_rows($query);
	 if ($numrows == 0 ){
echo $filename;
}else {
	
	echo "<span style='color:orange;'>".ucfirst($fileName)."</span>".", Already exists, you can delete to add new file" ;

	
	
	}

}else echo "Only accepts excel files !!";

}else echo "Browse for a file";









?>