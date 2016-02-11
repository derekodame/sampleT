<?php


error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");
include"./section.php";


if($emailss){
	//mysqli_query($con,"UPDATE itserve1 SET online=0 WHERE email ='$emailss' ");
	session_destroy();
	echo $emailss;
	header("location: ../index.php");
	}
?>