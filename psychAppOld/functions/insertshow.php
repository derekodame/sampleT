<?php
include"../functions/connection.php";
include"../functions/error.php";

$age = $_POST['age'];
$stage = $_POST['stage'];
$Symptoms = $_POST['symptoms'];
$Psychological = $_POST['psychological'];
$Evidence = $_POST['evidence'];
$Basis = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['basis'])));


if($age){
if($stage){
if($Symptoms){
if($Psychological){
if($Evidence){
	if($Basis){
		
		echo "all set";
		$query = mysqli_query($con,"insert into groupp values('id','$age','$stage','$Symptoms','$Psychological','$Evidence','$Basis')");
		
		}else echo "basis empty";
	
	
	}else echo "evidenceempty empty or put N/a";
	
	}else echo "psychological empty or put N/a";
	
	}else echo "symptoms empty or put N/a";
	
	}else echo "stage empty or put N/a";
	
	}else echo "age empty or put N/a";



 ?>