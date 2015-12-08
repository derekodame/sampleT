

<?php
 error_reporting(E_ALL ^ E_NOTICE);
require("../include/connection.php");
session_start();
$emailss = $_SESSION['email'];
	
  ?>

<?php
///$_FILES['picture']['type']=="image/gif")||($_FILES['picture']['type']=="image/jpeg")||($_FILES['picture']['type']=="image/png")
if(($_FILES['picture']['type']=="image/gif")){
	$type= ".gif";
	}
	else if(($_FILES['picture']['type']=="image/jpeg")){
		$type= ".jpeg";
	}
	else if(($_FILES['picture']['type']=="image/png")){
		$type= ".png";
		
		}

$tmp= $_FILES['picture']['tmp_name'];
$target = $emailss.$type;
if($tmp){
if(($_FILES['picture']['type']=="image/gif")||($_FILES['picture']['type']=="image/jpeg")||($_FILES['picture']['type']=="image/png")){
	
	move_uploaded_file($tmp,"../images/".$target);
	$update = mysqli_query($con,"UPDATE itserve1 SET picture = '$target' WHERE email = '$emailss'");
	mysqli_query($con,"UPDATE itserve1 SET picturehide= 1 WHERE email ='$emailss' ");
	header("location: ../pages/edit.php");
	
	}else echo "not supported";
}else echo "Upload An Image";
?>
