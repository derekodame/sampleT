<?php 
error_reporting(E_ALL ^ E_NOTICE);
require("../include/connection.php");

session_start();

$emailss = $_SESSION['email'];


	
$key = $_GET['emails'];
$query = mysqli_query($con,"SELECT * FROM itserve1 WHERE email = '$key' ");	
	$numrows = mysqli_num_rows($query);
	
		$row = mysqli_fetch_assoc($query);
		
		
		$picture = $row['picture'];
		echo $picture;
		header("Content-type: image/jpeg");
		//header("location: otherprofile.php");
		
	


/*$query = mysql_query("SELECT * FROM itserve1 WHERE email = '$emailss' ");
	$numrows = mysql_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysql_fetch_assoc($query);
		
		
		header("Content-type: image/jpeg");

		
		$picture = $row['picture'];
		
		//header("Content-type: image/jpeg");
		echo $picture; 
		
		
		}
	
	
	
}*/


?>
