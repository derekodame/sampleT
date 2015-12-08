<?php 
error_reporting(E_ALL^E_NOTICE);
include"../include/connection.php";
session_start();
$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];
$occupation = $_SESSION['occupation'];
$fl=$first." ".$last;



$cid=$_POST['cid'];

$other_email = $_POST['c_othere'];

$query = mysqli_query($con,"SELECT * FROM comment_new WHERE comment_id=$cid and (email = '$emailss' AND other_email ='$other_email') ");

 $numrows = mysqli_num_rows($query);
 if ($numrows == 0 ){
	 
	 $query = mysqli_query($con,"INSERT INTO comment_new VALUES('','$cid','$emailss', '$other_email',1)");
	 
	 }
	 else 
	 {
	 mysqli_query($con,"UPDATE comment_new SET number = number + 1 WHERE comment_id=$cid and  (email = '$emailss' AND other_email ='$other_email') ");
	}
	
	
?>