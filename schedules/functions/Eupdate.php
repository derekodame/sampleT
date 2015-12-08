<?php 
error_reporting(0);
include_once"../functions/connection.php";
session_start();
$s = $_SESSION['se'];  


$email=$s;


$unique= trim($_POST['uniquee']);
$user= $_POST['users'];
$ap= trim($_POST['ape']);
$h= trim($_POST['hr']);
$m= trim($_POST['mim']);
$p= trim($_POST['p']);



	
	

	$quer=mysqli_query($con,"SELECT * FROM workschedule WHERE email = '$email' AND uniquee = '$unique'  ");
	
	$num = mysqli_num_rows($quer);
	
	if($num ==1){
		
		
		$quen=  mysqli_query($con,"UPDATE workschedule SET hr ='$h',day='$ap',min='$m',position='$p',user=$user WHERE email = '$email' AND uniquee = '$unique'");

		
		
		}else{
			
			$que = mysqli_query($con,"INSERT INTO workschedule VALUES('','$user','$email','$unique','$dayy','$h','$m','$p')");
		 
		
			
}

?>