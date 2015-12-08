<?php 	
error_reporting(E_ALL);
session_start();
$emailss = $_SESSION['email'];
$idd = $_SESSION['id'];



include("connection.php");
 /* mysql_connect("mysql.serversfree.com","u523368387_it","stecks0298");
 mysql_select_db("u523368387_it"); */



//$dbid=$_GET['deletee'];
$dbid=$_POST['deletee'];
mysqli_query($con,"DELETE FROM comment WHERE id = '$dbid'");
mysqli_query($con,"DELETE FROM liketb WHERE  liked = '$dbid'");
mysqli_query($con,"DELETE FROM reply WHERE userid = '$dbid'");
mysqli_query($con,"DELETE FROM comment_new WHERE name = '$dbid'");
	
	
echo " ";
 



?>