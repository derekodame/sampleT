<?php 
include "connection.php";
error_reporting(E_ALL ^ E_NOTICE);
//mysql_connect("127.0.0.1","root","");
//(mysql_select_db("u"));

session_start();
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];
$fl = $first." ".$last;
$emailss = $_SESSION['email'];
$email=$_GET['email'];
$time = time();





?>