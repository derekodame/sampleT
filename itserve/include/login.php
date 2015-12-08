<?php
error_reporting(E_ALL ^ E_NOTICE);
require("../include/connection.php");
session_start();

$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];
$occupation = $_SESSION['occupation'];
$fl=$first." ".$last;


$emailuser = $_POST['user'];
$pass = $_POST['pass'];


$query = mysqli_query($con,"SELECT * FROM itserve1 WHERE email = '$emailuser' AND password ='$pass'");
$numrows = mysqli_num_rows($query);
if($_POST['donelogin']){
	
	if($numrows ==1){
		while($row = mysqli_fetch_assoc($query)){
			
			
			$dbemail = $row['email'];
			$dbfirstname = $row['firstname'];
			$dblastname = $row['lastname'];
			$dbpassword = $row['password'];
			$dboccupation = $row['occupation'];
			$dbsex = $row['sex'];
			$dbpicture = $row['picture'];
			$dbid = $row['id'];
			
			$_SESSION['email']= $dbemail;
			$_SESSION['lastname']= $dblastname;
			$_SESSION['firstname']= $dbfirstname;
			$_SESSION['id']= $dbid;
			$_SESSION['occupation']= $dboccupation;
			}
		
		
$p = $_GET['email'];
if( $p ){
	header("location: ./otherprofile.php?email=$p");
	}else
header("location: ./homee.php");

		
		
		}
		else
		
		echo "Invalid Email Or Password";
	
	}//else //echo "what";

mysqli_close($con);
?>