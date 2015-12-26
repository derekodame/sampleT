<?php 
$fileName = $_FILES["file1"]["name"];
$fileTmpLoc = $_FILES["file1"]["tmp_name"];
$fileType = $_FILES["file1"]["type"];
$fileSize = $_FILES["file1"]["size"];
$fileErrorMsg = $_FILES["file1"]["error"];

if(!$fileTmpLoc){
echo "Error: Please browse for a file before clicking the upload button";
exit();
}

if(move_uploaded_file($fileTmpLoc, "$fileName")){
	
	}else{
		echo "move_uploaded_file function failed";
		}

?>