<?php 
include"../functions/connection.php";
include"../functions/error.php";





$v = $_POST['u'];

$i = $_POST['id'];

$query = mysqli_query($con,"SELECT * FROM feedbackq where id = '$i'");
$row=mysqli_fetch_array($query);
	
	$q=$row['shows'];
	
if($q==1){
echo "$v";

$query = mysqli_query($con,"UPDATE feedbackq SET shows = '0' where id ='$i'");
}else  {
	$query = mysqli_query($con,"UPDATE feedbackq SET shows = '1' where id ='$i'");
	echo "did not";
	}

?>