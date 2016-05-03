<?php 
include"../functions/error.php";
require("../functions/connection.php");
include"../functions/section.php";

//check for admin id
$check = mysqli_query($con,"select * from client where email ='$emailss'");
$num = mysqli_num_rows($check);


//if email exist direct
if($num>0){
		header("location: ./main.php");
		}else 	header("location: ../main/admine.php");



?>