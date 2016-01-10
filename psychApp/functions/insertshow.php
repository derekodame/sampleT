<?php
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/drop.php";

$age = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['age'])));
$stage = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['stage'])));
$Symptoms = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['symptoms'])));
$Psychological =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['psychological'])));
$Evidence =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['evidence'])));
$Basis = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['basis'])));


if($age){
if($stage){
if($Symptoms){
if($Psychological){
if($Evidence){
	if($Basis){
		
		echo "all set";
		$query = mysqli_query($con,"insert into groupp values('id','$age','$stage','$Symptoms','$Psychological','$Evidence','$Basis')");
		
		
	 dropbox($con,$age,$stage,$Symptoms,$Psychological,$Evidence,$Basis);
		
		}else echo "basis empty";
	
	
	}else echo "evidenceempty empty or put N/a";
	
	}else echo "psychological empty or put N/a";
	
	}else echo "symptoms empty or put N/a";
	
	}else echo "stage empty or put N/a";
	
	}else echo "age empty or put N/a";



 ?>