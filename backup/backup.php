<?php 
error_reporting(0);
include "connection.php";



	




	$li = $_POST['li'];
	//$li = 1;
	

	 $quer = mysqli_query($con,"SELECT * FROM likee WHERE no = 1");
	// $roww=mysqli_fetch_array($quer);
	 
	 $num = mysqli_num_rows($quer);
	 
	 if ($num == 1){
	$quer = "UPDATE likee SET no = no - 1   WHERE id =$li"; 
		  mysqli_query($con, $quer);
		  $query = mysqli_query($con,"SELECT * FROM likee where id = $li");
		  
		  $row=mysqli_fetch_array($query);
		  
	echo $row['no'];

	
		 }else {
			$quer = "UPDATE likee SET no = no + 1   WHERE id =$li"; 
		  mysqli_query($con, $quer); 
		    $query = mysqli_query($con,"SELECT * FROM likee where id = $li");
		    $row=mysqli_fetch_array($query);
	echo $row['no'];
			 
			 }
	 
	
?>
