<?php 
error_reporting(0);
include "connection.php";



	




	$li = $_POST['li'];
	$li = 1;
	

	

	
		 
		    $query = mysqli_query($con,"SELECT * FROM likee where id = $li");
		    $row=mysqli_fetch_array($query);
	echo $row['no'];
			 
			 	 
	
?>
