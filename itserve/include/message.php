<?php 

$area = $_POST['area'];
$donem = $_POST['donem'];
	if($donem){
		$query = mysqli_query($con,"INSERT INTO message VALUES('','email','otheremail','msg')");
		header("location: ./otherprofile.php?email=$email");
	}
?>