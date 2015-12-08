<?php 

$comment = $_POST['comment'];
$commentbtn = $_POST['done'];

if($commentbtn){
		
		$query = mysqli_query($con,"SELECT * FROM itserve1");
		while($row = mysqli_fetch_array($query)){
			
			$image = $row['image'];
			$query = "INSERT INTO comment VALUES('id','$emailss','$image','$comment')";
	        mysqli_query($con,$query);
			
			}
	
	
			
		
		
	}
?>
