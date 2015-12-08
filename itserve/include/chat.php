<?php 
error_reporting(E_ALL^E_NOTICE);
include"../include/connection.php";
//include"like.php";
session_start();


$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];
$occupation = $_SESSION['occupation'];
$fl=$first." ".$last;


$email=$_GET['email'];

$timehide = time()-6000;

$query=mysqli_query($con,"SELECT * FROM pannel where email = '$email'");
$row=mysql_fetch_array($query);
	$bg = $row['bgcolor'];

$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
$row=mysqli_fetch_array($query);
	$bgs = $row['bgcolor'];
 //mysql_query("SELECT * FROM chat  WHERE time > '$timehide' ");	





$query = mysqli_query($con,"SELECT * FROM chat  WHERE  (email = '$email' AND other_email ='$emailss') OR(email = '$emailss' AND other_email ='$email') ORDER BY id ASC");


while($row=mysqli_fetch_array($query)){
	
	
	$dbid= $row['id'];
		$ee= $row['email'];
		$nn=ucwords($row['name']);
		$cc=$row['comment'];
		
		
$queryw=mysqli_query("SELECT * FROM itserve1 where email = '$ee'");
$roww=mysqli_fetch_array($queryw);
	$bgw = ucfirst($roww['firstname'])." ".ucfirst($roww['lastname']);			
		
	if($emailss == $ee){
	
		$bgw  = "<span style=\"color:$bgs;\" >You</span>";

		}
	


		
	
	echo "<span style=\"color:$bg;  \" class=\"$ll\">$bgw</span><br/>
	<div style=\" \" class=\" \">$cc</div>
	<div style=\"\" class=\"linecmt\"></div>";
//	echo "<br class=\"$ll$lr /><br class=\"$ll$lr/>";
	//echo "<a href=\"#\"><img src=\"../photos/Chrysanthemum.jpg\" height=\"100\" width=\"100\" /></a>";
}
echo "<br/><br/><br/><br/>";	

	?>