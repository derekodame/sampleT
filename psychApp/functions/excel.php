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
$namedfile = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['aa'])));

if(!$fileTmpLoc){
echo "Error: Please browse for a file before clicking the upload button";
exit();
}

if($fileName){
if($namedfile){
if($_FILES['excel']['type']=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){


$query = mysqli_query($con,"SELECT * FROM test WHERE a = '$fileName '");
 $numrows = mysqli_num_rows($query);
	 if ($numrows == 0 ){
$query = mysqli_query($con,"INSERT INTO test VALUES('','$fileName', '$namedfile')");


if(move_uploaded_file($fileTmpLoc, "../pictures/" . $fileName)){
	
	echo " <span style='color:red;'>". $fileName."</span> was successfully uploaded";
	
	}else{
		echo "move_uploaded_file function failed";
		}


}else {
	
	echo "<span style='color:orange;'>".ucfirst($fileName)."</span>".", Already exists, you can delete to add new file" ;

	
	
	}

}else echo "Only accepts excel files !!";
}else echo "Please give the file name ";
}else echo "Browse for a file";









?>