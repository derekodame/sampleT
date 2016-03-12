<?php 
include"error.php";
include"connection.php";





include"../functions/section.php";

//check for admin id
$check = mysqli_query($con,"select * from client where email ='$emailss'");
$num = mysqli_num_rows($check);


//if email exist direct
if($num>0){
		//header("location: ./main/main.php");
		}else 	header("location: ../main/admine.php");
?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php $i = 1;?>
<link type="text/css" href="../css/main.css" rel="stylesheet"/>
</head>
<body>
<div id="top">
<span id="logout"><a  href="../functions/logout.php" title="Log Out" ></a></span> 

<span id="setting" > 
<a style=" margin-left:3px; color:orange;" href="./main.php" title="Main page"> Main</a></span>
<span id= "welcome"><a style=" font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;color:white; text-decoration:none; background-color: ;" href="./profilec.php" title="Your profile edit">

<?php

$ff = mysqli_query($con,"select * from client where email ='$emailss'");
while ($r=mysqli_fetch_array($ff)){
	echo "Welcome ". $r['firstname']." ". $r['lastname'];
	}

 ?>


</a></span>

</div>


