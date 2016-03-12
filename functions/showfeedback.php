<?php 
include"../functions/connection.php";
include"../functions/error.php";

$query = mysqli_query($con,"SELECT * FROM feedbackq   ORDER BY id DESC");
$cc =0;
while(($row=mysqli_fetch_array($query))){
	
	$q=$row['question'];
	$id=$row['id'];
	$a=$row['a'];
	$b=$row['b'];
	$c=$row['c'];
	$d=$row['d'];
	$e=$row['e'];
	$show=$row['shows'];
	
	
	if($show==1){
		
		$showc ="Checked";
		}else { 
		$showc ="";}
	$cc++;
echo " $cc . $q <br/>   </textarea>  <span style='border:thin solid white;'><span style='color:white; background-color:red; cursor:pointer; '>delete</span>.<span style='color:white; background-color:orange;'>show <input  onclick=\"showclient('$show','$id')\"  $showc id='show$id'type='checkbox' ></span></span><hr></hr> ";
}


?>