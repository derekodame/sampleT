<?php 
include"error.php";
include"connection.php";


$id =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['id'])));
$ac =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['ac'])));
$an =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['an'])));
$e =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['e'])));
$identity =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['identity'])));

echo "testing ";
$query = mysqli_query($con,"SELECT * FROM feedbacka WHERE qid = '$id' and emailu='$e' ");
$numrows = mysqli_num_rows($query);

$uni = md5($emailss);
$queryy = mysqli_query($con,"SELECT * FROM feedadd WHERE q = '$id' and uniquee='$uni'  ");
$numrowsy = mysqli_num_rows($queryy);

if($numrows==0){
$query = mysqli_query($con,"INSERT INTO feedbacka VALUES('','$id', '$e','$ac','$an')");



}else{
	
	
	$query = mysqli_query($con,"UPDATE feedbacka SET rate = '$ac'  WHERE qid ='$id' and emailu='$e'");
	$query = mysqli_query($con,"UPDATE feedbacka SET comment = '$an'  WHERE qid ='$id' and emailu='$e'");
	
	}



if($numrowsy==0){
		
		
		
	$queryy = mysqli_query($con,"INSERT INTO feedadd VALUES('','$uni','$id', '$ac')");
//	$queryy = mysqli_query($con,"UPDATE feedadd SET r =  '$ac'  WHERE q ='$id' and uniquee='$uni' ");

	}else{
		
	
		
	$queryy = mysqli_query($con,"UPDATE feedadd SET r = r + '$ac'  WHERE q ='$id' and uniquee='$uni' ");
	if($query->execute($queryy)){
		
		
		
		}
	}
?>