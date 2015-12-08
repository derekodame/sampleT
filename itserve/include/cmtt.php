<?php 
include "connection.php";
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
$othere = $_POST['othere'];	

$query = mysqli_query($con,"INSERT INTO comment VALUES('','$fl','$emailss','$getn','$getn','$time')");
echo " ";

?>