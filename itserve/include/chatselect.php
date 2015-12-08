<?php 
//error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);
include"connection.php";
session_start();
$emailss = $_SESSION['email'];
$email=$_GET['email'];

	
$timehide = time()-500;
$es = $_POST['email'];
$query=mysqli_query($con,"SELECT * FROM chat 
					JOIN pannel ON chat.email= pannel.email
					WHERE chat.time > '$timehide' AND chat.other_email = 'gcmt' ORDER BY chat.id ASC ");


	while($row = mysqli_fetch_array($query)){
		
		$dbid= $row['id'];
		$ee= $row['email'];
		$nn=ucwords($row['name']);
		$cc=$row['comment'];
		$bg=$row['bgcolor'];
		
		

		$quero=mysqli_query($con,"SELECT * FROM itserve1 WHERE email = '$ee'");
		$rowo=mysqli_fetch_array($quero);
		$dbpicutrehide = $rowo['picturehide'];
		$picc = $rowo['picture'];

//for picture
	if($dbpicutrehide == 1){
		$dbimgo = "<img  class=\"dbimg\"  width=\"20px\" height=\"20px\" src=\"../images/$picc\">";
		}
		else
		$dbimgo = "<img  class=\"\" style=\"height:20px; width:20px; 	background-size:auto;\"  src='../photos/no-photo.png' />";
			
		
	$dbimg = "<span  >"."<span  class=\"cg\"style=\"color:$bg;\" >$nn" ."</span>";
		echo $dbimgo.$dbimg."<br/>"."<div class=\"cccc\">$cc</div>"."<br/>";
		}
	
	
?>