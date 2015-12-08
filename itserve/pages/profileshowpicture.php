<?php 
error_reporting(E_ALL ^ E_NOTICE);
require("../include/connection.php");

session_start();

$emailss = $_SESSION['email'];


	
$key = $_GET['email'];
$query = mysql_query("SELECT * FROM itserve1 WHERE email = '$e' ");	
	$numrows = mysql_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysql_fetch_assoc($query);
		
		
		
		$pictures = $row['picture'];
		}
	
}



?>
