<?php 
include"../functions/connection.php";
include"../functions/error.php";

$query = mysqli_query($con,"SELECT * FROM feedbackq  where feedbackq.shows ='1'  ORDER BY feedbackq.id DESC");

$queryy = mysqli_query($con,"SELECT * FROM feedbacka  where emailu ='$emailss' ");

$numrows = mysqli_num_rows($queryy);

if($numrows==0){
$cc=0;
while(($row=mysqli_fetch_array($query))){
	$cc++;
	$q=$row['question'];
	$a=$row['a'];
	$b=$row['b'];
	$c=$row['c'];
	$d=$row['d'];
	$e=$row['e'];
	$ida=$row['id'];
	$id=$row['id'];
	
	
echo " $cc . $q <br/>0<input   id =\"r$id\" onChange=\"range('$id','$emailss')\" type=\"range\"  step=\"1\" max=\"5\" min=\"0\" value=\"0\">5 ==><span id=\"rg$id\" >0</span></br/></br/>Comment</br/> <textarea  onkeyup=\"range('$id','$emailss')\" id='cn$id' style=' padding:0 5px 0 5px; '></textarea>  </span> <span  id='sc' ></span><hr></hr> <br/><br/>


";
}
echo "<input onClick=\"feedad('$emailss')\"  type=\"button\" value=\"Submit\">";
}else {
	
	echo "like us on facebook";
	
	}
?>