<?php 
include"../functions/error.php";
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
$refilename = $namedfile.".xlsx";
if($fileName){

if($_FILES['excel']['type']=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){


$query = mysqli_query($con,"SELECT * FROM test WHERE a = '$fileName'");
 $numrows = mysqli_num_rows($query);
	 if ($numrows == 0 ){
		 
	



if(move_uploaded_file($fileTmpLoc, "../file/" . $fileName)){
	$query = mysqli_query($con,"INSERT INTO test VALUES('','$fileName', '0')");
	
	$query = mysqli_query($con,"insert into groupp values('id','$age','$stage','$Symptoms','$Psychological','$Evidence','$Basis')");
		
		
	 dropbox($con,$age,$stage,$Symptoms,$Psychological,$Evidence,$Basis);
	
	
	echo " <span style='color:red; font-size=20px;'>". $fileName."</span> was successfully uploaded";
	
	}else{
		echo "Upload failed. Could be name given or File name format";
		}


}else {
	
	echo "<span style='color:blue;'>".ucfirst($fileName)."</span>".", Already exists, you can delete to add new file" ;

	
	
	}

}else echo "Only accepts excel files !!";

}else echo "Browse for a file";









?>