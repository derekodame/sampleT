<?php



function allusers(){
	include "connection.php ";
	
$query = mysqli_query($con,"SELECT * FROM employees"); 
while($row=mysqli_fetch_array($query)){
	$r = ($row['username']);
	$i = ($row['id']);
		
		echo "<option> $r </option>";
		
		}
	
	
	}




 ?>

