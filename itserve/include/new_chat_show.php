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

$qne = mysqli_query($con,"SELECT * FROM chat_new WHERE  (other_email = '$emailss') ");	
while($rne = mysqli_fetch_array($qne)){

$ne = $rne['number'];
$nee = $rne['email'];
$ide = $rne['id'];

$queryw=mysqli_query($con,"SELECT * FROM itserve1 where email = '$nee'");
$roww=mysqli_fetch_array($queryw);
$bgw = ucfirst($roww['firstname'])." ".ucfirst($roww['lastname']);

$query=mysqli_query($con,"SELECT * FROM pannel where email = '$nee'");
$row=mysqli_fetch_array($query);
$bgne = $row['bgcolor'];

if($ne  >1){
	$msg = "messages";
	}
else if($ne==1){
		$msg= "message";
		}

echo "<span style=\" cursor:pointer; padding:1.6px; color:$bgne; font-size:12px; border-radius:4px; border:1px solid $bgne;\"

 onclick=\"newc($ide);\" ><span  title=\"$bgw\"  onclick=\"closedd('t.php?email=$nee');\">$ne $msg from $bgw</span></span>  ";
}
?>
