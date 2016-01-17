<?php 


 error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");

session_start();
$emailss = $_SESSION['email'];


$query = mysqli_query($con, "select * from test order by id DESC");

echo "<table id='uptablee'   ><tr ><td><center>Update Dates</center></td><td><center>Actual name</center></td></tr></table>";
while($row=mysqli_fetch_array($query)){
	
	$a =ucfirst( $row['a']);
	$b = ucfirst($row['b']);
	$id = ($row['id']);
	
	

	if(strlen($aa)>12){
		$aa =ucfirst(substr($a, 0, 12))."...";
		}else  $aa = $a ;
		
		if(strlen($bb)>12){
		$bb =ucfirst(substr($b, 0, 12))."...";
		}else  $bb = $b ;
		
		

	echo "<table id='uptable'   ><tr ><td>".$b."</td><td><a  href='../file/$a' title ='download $a'>".$a."</a></td><th id='th' class='$a' onclick='del($id);' >X</th></tr></table>";
	}
?>
