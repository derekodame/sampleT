<?php 

include"error.php";
include"connection.php";
include"section.php";



$firstname = mysqli_real_escape_string($con,nl2br(htmlspecialchars( ($_POST['f']))));
$lastname = mysqli_real_escape_string($con,nl2br(htmlspecialchars( ($_POST['l']))));
$userid = mysqli_real_escape_string($con,nl2br(htmlspecialchars( ($_POST['u']))));
$currentpass = mysqli_real_escape_string($con,nl2br(htmlspecialchars( ($_POST['c']))));
$check = mysqli_real_escape_string($con,nl2br(htmlspecialchars( ($_POST['cu']))));
$new = mysqli_real_escape_string($con,nl2br(htmlspecialchars( ($_POST['n']))));

$hipass = md5($currentpass);
$hcheck = md5($new);
$p = mysqli_query($con,"select * from client where password ='$hipass'");
$numm = mysqli_num_rows($p);

if($firstname){
if($lastname){
if($userid){
if($currentpass){
	if(strlen($currentpass)>=4){
		
		

		if($check=="check"){
			if($numm >0){
				if($new){
					if(strlen($new)>=4){
							if($currentpass!=$new){
					$queryf = mysqli_query($con,"UPDATE client SET firstname = '$firstname'  WHERE email ='$emailss'");
				$queryl = mysqli_query($con,"UPDATE client SET lastname = '$lastname'  WHERE email ='$emailss'");
				$queryl = mysqli_query($con,"UPDATE client SET username = '$userid'  WHERE email ='$emailss'");
				
					$queryl = mysqli_query($con,"UPDATE client SET password = '$hcheck'  WHERE email ='$emailss'");
				echo "Update was succeful including your new password";
				}else echo "New Password can't be the same as Current Password";
				}else echo "New Password should be more than 4 characters";
				}else echo "New Password can't be empty";
				}else echo "Current password does not exist";
			}else {
				
				if($numm >0){
				$queryf = mysqli_query($con,"UPDATE client SET firstname = '$firstname'  WHERE email ='$emailss'");
				$queryl = mysqli_query($con,"UPDATE client SET lastname = '$lastname'  WHERE email ='$emailss'");
				$queryl = mysqli_query($con,"UPDATE client SET username = '$userid'  WHERE email ='$emailss'");
				echo "Update was succeful";
				
				}else echo "Current password does not exist";
				}
		
}else echo "I think your password has more characters";
}else echo "Please give a current password in oder to update";
}else echo "UserName can't be empty";
}else echo "LastName can't be empty";

}else echo "FirstName can't be empty";



?>