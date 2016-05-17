<?php
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/drop.php";

$q = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['q'])));
$a = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['a'])));
$b = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['b'])));
$c =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['c'])));
$d =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['d'])));
$e = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['e'])));

$empty= "Field can not be empty";

if($q){

	
		
		$unique = md5($q);
		
$query = mysqli_query($con,"SELECT * FROM feedbackq WHERE question = '$q'");
$numrows = mysqli_num_rows($query);
if($numrows==0){	
		

		
$query = mysqli_query($con,"insert into feedbackq values('id','$q','$unique','0')");
		
	 echo "question was added to database";
		
}else echo "already exist";
		}else echo $empty;
	
	
	
	
	



 ?>