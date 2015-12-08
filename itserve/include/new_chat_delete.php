<?php 	
error_reporting(E_ALL);
session_start();
$emailss = $_SESSION['email'];
$idd = $_SESSION['id'];



include("connection.php");
 /* mysql_connect("mysql.serversfree.com","u523368387_it","stecks0298");
 mysql_select_db("u523368387_it"); */



//$dbid=$_GET['deletee'];
$new_chat_id=$_POST['cdi'];
$new_chat_email=$_POST['cdi'];

mysql_query("DELETE FROM chat_new WHERE id = '$new_chat_id'");


	
	
echo " ";
 



?>