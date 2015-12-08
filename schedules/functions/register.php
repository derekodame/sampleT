<?php 
include"connection.php";




$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$done = $_POST['done'];



if($done){
	if($username ){

$query = mysqli_query($con,"SELECT * FROM employees WHERE email = '$email'");
									 $numrows = mysqli_num_rows($query);
									 if ($numrows == 0 ){
										$date = date("F d, Y");
									$code = md5(rand()); 
							 
 mysqli_query($con,"INSERT INTO employees VALUES('','$username', '$email','$password','$date','','')");
  mysqli_query($con,"INSERT INTO workschedule VALUES('','$email', '$day','$hr','$min','$position')");
				
			echo "done";
				
			 }else echo  "already registered";
			 
			 }else echo "<br/>enter username";
				}


?>