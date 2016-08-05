<?php 
include"../functions/connection.php";
include"../functions/error.php";

include"../functions/section.php";


//translate
require_once('class.translation.php');

if(isset($llk)){
	$translate = new Translator($llk);
}
else{
	$translate = new Translator('en');
}


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
echo " $cc . $a  </textarea>  <span style='border:thin solid white;'><span style='color:white; background-color:red; cursor:pointer; '>" . $translate->__('delete') . "   </span>  <span style='color:white; background-color:orange;'>". $translate->__('show') . "   <input  onclick=\"showclient('$show','$id')\"  $showc id='show$id'type='checkbox' ></span></span> $q <hr></hr> ";
}


?>