<?php 
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/section.php";

$query = mysqli_query($con,"SELECT * FROM admin_pass ");

echo " <span id='add_adminse'>add admins</span><br/>
  <input id = 'fe' type='text' placeholder='first name'>
  <input id = 'le'type='text' placeholder='last name'>
  <input id = 'ie' type='text' placeholder='admin id'>
  <input id = 'ee' type='text' placeholder='email'>
  <input id = 'pe' type='text' placeholder='Password'>
    <input  id = 'ce' type='text' placeholder='confirm Password'>
  <input onclick='add_admin()' id = 'be' type='button' value='Add admin'>
 <br/><br/> <br/>";

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
		$dd="<td title='$email' onclick=\"admindelete('$email')\" id='$email' style=\" cursor:pointer; border:thin solid black; background-color:white; color:black;\" >delete </td>";
		}else {$uid='***';
		$dd="";}
	
		echo " <tr><td style=\" border:thin solid black; background-color:white; color:black; \" >$id</td> <td style=\" border:thin solid black; background-color:white; color:black;\" >$f</td><td style=\" border:thin solid black; background-color:white; color:black;\" >$last</td><td title='$email'style=\"border:thin solid black;  background-color:white; color:black;\" >$email</td><td title='$uid' style=\" border:thin solid black; background-color:white; color:black;\" >$uid </td>
	$dd	</tr>";

	}
	echo "</table>";
?>