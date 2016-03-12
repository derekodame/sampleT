<?php 
include"error.php";
include"connection.php";


$id =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['id'])));
$ac =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['ac'])));
$an =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['an'])));
$e =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['e'])));

echo "testing ";
$query = mysqli_query($con,"SELECT * FROM feedbacka WHERE qid = '$id'");
$numrows = mysqli_num_rows($query);

if($numrows==0){
$query = mysqli_query($con,"INSERT INTO feedbacka VALUES('','$id', '$e','$ac','$an')");


}else{
	
	$query = mysqli_query($con,"UPDATE feedbacka SET rate = '$ac'  WHERE qid ='$id'");
	$query = mysqli_query($con,"UPDATE feedbacka SET comment = '$an'  WHERE qid ='$id'");
	
	}



?>