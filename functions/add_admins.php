<?php
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/drop.php";


//add admins

$f = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['f'])));
$l = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['l'])));
$i = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['i'])));
$e =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['e'])));
$p =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['p'])));
$c = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['c'])));
$ci = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['ic'])));

	if($f){
		if($l){
			if($i){
			if($e){
				if((strlen($e) >= 7) && (strstr($e, "@")) && (strstr($e, "."))){
					if($p){
						if(strlen($p)>=4){
							if($p===$c){
								
								$hpass = md5($p);

//inserting data to database
$query = mysqli_query($con,"SELECT * FROM admin_pass WHERE email = '$e' OR userid ='$i'");
$querye = mysqli_query($con,"SELECT * FROM client WHERE username ='$i'");
$numrows = mysqli_num_rows($query);
$numrowse = mysqli_num_rows($querye);

if($numrowse==0){
if($numrows==0){
	
		$query = mysqli_query($con,"insert into admin_pass values('id',0,'$f','$l','$i','$e','$hpass')");

echo "New Admin was added";




				
		
							

		
		
	} else echo "Admin Id or Email already exist";
}else echo "ID already exist in client";

		}else echo "Password do not match";
		}else echo "Password is too short";
		}else echo "Input password";
		}else echo "Email format not valid";
		}else echo "input email";
		}else echo "input id";
		}else echo "input lastname";
		}else echo  "input firstname";
		
		
 ?>