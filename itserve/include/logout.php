<?php
error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");
session_start();

$emailss = $_SESSION['email'];

if($emailss){
	mysqli_query($con,"UPDATE itserve1 SET online=0 WHERE email ='$emailss' ");
	session_destroy();
	
	header("location: ../pages/regloginphp.php");
	}else 
header("location: ../pages/regloginphp.php");
?>