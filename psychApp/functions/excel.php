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

if($namedfile){
if($_FILES['excel']['type']=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){


$query = mysqli_query($con,"SELECT * FROM test WHERE b = '$namedfile '");
 $numrows = mysqli_num_rows($query);
	 if ($numrows == 0 ){
$query = mysqli_query($con,"INSERT INTO test VALUES('','$fileName', '$namedfile')");


if(move_uploaded_file($fileTmpLoc, "../pictures/" . $fileName)){
	
	echo " <span style='color:red;'>". $fileName."</span> was successfully uploaded";
	
	}else{
		echo "move_uploaded_file function failed";
		}


}else echo "Already exist ";

}else echo "Only accepts excel files !!";
}else echo "Please give the file a name ";




//$tmp= $_FILES['excel']['tmp_name'];




/*if($tmp){

	
	move_uploaded_file($tmp,"../pictures/".$_FILES['excel']['name']);

	echo $tmp;
	
}else echo "Upload An Image";
*/

/*
for($i=0; $i<count($_FILES['excel']['name']); $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['excel']['tmp_name'][$i];

  //Make sure we have a filepath
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "../pictures/".$_FILES['excel']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here
	  echo 

    }
  }
}
*/

?>