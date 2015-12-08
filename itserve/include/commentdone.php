<?php 
include"connection.php";
error_reporting(E_ALL ^ E_NOTICE);

session_start();
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];
$fl = $first." ".$last;
$emailss = $_SESSION['email'];
$email=$_GET['email'];
$time = time();


$getn = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['nsend'])));	


$commentbtn = $_POST['cdone'];
$date = date("F d, Y");

		

	
$query = mysqli_query($con,"INSERT INTO comment VALUES('','$fl','$emailss','$getn ','$date','0')");
	 //header("location: homee.php");
echo " ";
			
						
	
	
			
		
		
?>