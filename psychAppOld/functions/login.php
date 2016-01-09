<?php 
include"error.php";
require("connection.php");
session_start();

$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];


$iemail = $_POST['iemail'];
$ipassword = $_POST['ipassword'];
$login = $_POST['ilogin'];


if($login){
	if($iemail){
		if($ipassword){
			$hipass = md5($ipassword);
			$query = mysqli_query($con,"SELECT * FROM client WHERE email = '$iemail' AND password ='$hipass'");
$numrows = mysqli_num_rows($query);

if($numrows ==1){
while($row = mysqli_fetch_assoc($query)){
			
			
			$dbemail = $row['email'];
			$dbfirstname = $row['firstname'];
			$dblastname = $row['lastname'];
			$dbid = $row['id'];
			
			
			$_SESSION['email']= $dbemail;
			$_SESSION['lastname']= $dblastname;
			$_SESSION['firstname']= $dbfirstname;
			$_SESSION['id']= $dbid;
			}
			
			//if session exist 
					if($emailss){
		header("location: ./main/main.php");
		}else header("location: ./main/main.php");
				
}else $applyI ="Email or Password does not exist!!<br/> <a href='#' style='color:black; background-color:white;'> Forgot Password</a>";
}else $applyI=" Input password";
}else $applyI="Input email";
}







?>