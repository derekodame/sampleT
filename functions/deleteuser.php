<?php 
 error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");

session_start();
$emailss = $_SESSION['email'];


$d=$_POST['d'];
$pp = mysqli_real_escape_string($con,nl2br(htmlspecialchars( ($_POST['p']))));





$hipass = md5($pp);
$p = mysqli_query($con,"select * from client where password ='$hipass'");
$numm = mysqli_num_rows($p);

if($numm>0){

$dd = mysqli_query($con,"DELETE FROM client WHERE email = '$d' ");

if($dd == true){
	echo 5;
	}else{ echo 6;}
}else echo "Input current password in order to delete account";



?>