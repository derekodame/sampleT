<?php 
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/section.php";

$query = mysqli_query($con,"SELECT * FROM admin_pass ");
echo "<table id='clientalh' >" ;
echo "<tr><td style=\" border:thin solid black; \">id</td> <td style=\" border:thin solid black; \">FirstName</td><td style=\" border:thin solid black; \">LastName</td><td  style=\" border:thin solid black; \" title='$email'>Email</td><td  style=\" border:thin solid black; \" title='$date'>UserId </td></tr>";

echo "</table>";
echo "<table style=\"background-color:;\" id='clientalh' >" ;
while($row=mysqli_fetch_array($query)){
	
	$f = $row['firstname'];
	$first= $row['firstname'];
	$last= $row['lastname'];
	$email= $row['email'];
	$uid= $row['userid'];
	$id= $row['id'];
	$a= $row['act'];
	$pp= $row['password'];
	
	if($email==$emailad){
		$uid = $uid;
		}else {$uid='***';}
	
		echo " <tr><td style=\" border:thin solid black; background-color:white; color:black; \" >$id</td> <td style=\" border:thin solid black; background-color:white; color:black;\" >$f</td><td style=\" border:thin solid black; background-color:white; color:black;\" >$last</td><td title='$email'style=\"border:thin solid black;  background-color:white; color:black;\" >$email</td><td title='$uid' style=\" border:thin solid black; background-color:white; color:black;\" >$uid </td></tr>";

	}
	echo "</table>";
?>