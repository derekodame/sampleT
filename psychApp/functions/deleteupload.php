<?php 
 error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");

session_start();
$emailss = $_SESSION['email'];


$dbid=$_POST['deletee'];


$query = mysqli_query($con,"select * from test where id = $dbid");
$num = mysqli_num_rows($query);

if($num ==1){
	$row = mysqli_fetch_array($query);
	$n = $row['a'];
	
unlink("../pictures/$n");

}
mysqli_query($con,"DELETE FROM test WHERE id = '$dbid'");
?>