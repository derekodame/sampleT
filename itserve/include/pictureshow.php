<?php 
error_reporting(E_ALL ^ E_NOTICE);
require("../include/connection.php");

session_start();

$emailss = $_SESSION['email'];


$query = mysqli_query($con,"SELECT * FROM itserve1 WHERE email = '$emailss' ");
	$numrows = mysqli_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysqli_fetch_assoc($query);
		
		
		

		
		$picture = $row['picture'];
		
		
		
		
//echo "<img src=\"../images/$picture\" />";		
		}
	

	
}

 ?>

