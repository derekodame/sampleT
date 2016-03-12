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


//inserting data to database
$query = mysqli_query($con,"SELECT * FROM admin_pass WHERE email = '$e' OR userid ='$i'");
$querye = mysqli_query($con,"SELECT * FROM client WHERE username ='$i'");
$numrows = mysqli_num_rows($query);
$numrowse = mysqli_num_rows($querye);


if($numrows==0){
	
		$query = mysqli_query($con,"insert into admin_pass values('id','$i','$f','$l','addmin_$l','$e','$p')");

echo "$f $l was added as an admin";




				
		
							

		
		
	} else {
		
		echo "Client was removed from Admin";
		mysqli_query($con,"DELETE FROM Admin_pass WHERE cid = '$i' ");}

		
 ?>