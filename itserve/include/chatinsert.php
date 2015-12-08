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


$getn = mysql_real_escape_string($con,nl2br(htmlspecialchars($_POST['nsend'])));		

$query = mysql_query($con,"INSERT INTO chat VALUES('','$emailss','gcmt','$fl','$getn','$time')");
echo " ";

?>