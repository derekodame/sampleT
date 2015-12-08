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
$ch = "ssss@hotmail.com";

$email=$_GET['email'];

$queryy = mysqli_query($con,"SELECT count(*) FROM itserve1 WHERE online = 1 and email != '$emailss'");
$count = $queryy->num_rows."<br/>";

if($count >1){
	$sf = "Friends";
	}
	else if($count==0){
		$sf = "No one ";
		$count="";
		}
else if($count==1){
		$sf = "Friend";
		}

$query=mysqli_query($con,"SELECT * FROM itserve1 WHERE online =1 and email != '$emailss'");
echo "<center><span style=\"color:rgba(0,153,51,1); font-size:14px; font-family:Hobo Std;\">$count $sf Online</span></center>";
while($rowo= mysqli_fetch_array($query)){

	$em = $rowo['email'];
	$emid = $rowo['id'];
	$nn = ucfirst($rowo['firstname']);
	$pic = $rowo['picture'];
	$dbpicutrehide = $rowo['picturehide'];
	$full_name = ucfirst($rowo['firstname'])." ".ucfirst($rowo['lastname']);
	
	
	$quer=mysqli_query($con,"SELECT * FROM pannel where email = '$em'");
$row=mysql_fetch_array($quer);
	$bgg = $row['bgcolor'];
	
	if($emailss ==$em){
		
		$text_d = "line-through";
		}
		else $text_d ="";
	
	if($dbpicutrehide == 1){
		$dbimg = "<img  class=\"\"  width=\"15px\" height=\"15px\" src=\"../images/$pic\">";
		}
		else{
		$dbimg = "<img  class=\"\" style=\"height:15px; width:15px; 	background-size:auto;\"  src='../photos/no-photo.png' />";
		}

$qne = mysqli_query($con,"SELECT * FROM chat_new WHERE  (email = '$em') ");	
$rne = mysqli_fetch_array($qne);	
$ide = $rne['id'];



	$divonline = "<span  onclick=\"newcn($ide);\"  >
	<span title=\"$full_name\" class=\"cmtg\"  style=\"color:$bgg; cursor:pointer;\" onclick=\"closedd('t.php?email=$em')\" >$dbimg <span style=\"font-size:12px; text-decoration:$text_d;\">$full_name </span></span>  </span> <br/>";

	
	echo $divonline;
	
	}

?>