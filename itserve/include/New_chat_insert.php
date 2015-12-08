<?php 
error_reporting(E_ALL^E_NOTICE);
include"../include/connection.php";
//include"like.php";
session_start();


$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];
$occupation = $_SESSION['occupation'];
$fl=$first." ".$last;
$ch = "ssss@hotmail.com";

$email=$_GET['email'];

$other_email = $_POST['othere'];

$query = mysqli_query($con,"SELECT * FROM chat_new WHERE  (email = '$emailss' AND other_email ='$other_email') ");

 $numrows = mysqli_num_rows($query);
 if ($numrows == 0 ){
	 
	 $query = mysqli_query($con,"INSERT INTO chat_new VALUES('','$emailss', '$other_email',1)");
	 
	 }
	 else 
	 {
	 mysqli_query($con,"UPDATE chat_new SET number = number + 1 WHERE (email = '$emailss' AND other_email ='$other_email') ");
	}
	 

	 ?>