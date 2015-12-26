<?php 
include("connection.php");


function clientAll($con){
$query = mysqli_query($con,"SELECT * FROM client");
echo "<table id='clientall' class='t'> <tr><td><center>id</center></td> <td><center>first</center></td><td><center>last</center></td><td><center>email</center></td><td><center>date  </center></td></tr></table>";
while($row=mysqli_fetch_array($query)){
	
	$first= $row['firstname'];
	$last= $row['lastname'];
	$email= $row['email'];
	$date= $row['date'];
	$id= $row['id'];
	$lenE = ucfirst(substr($email, 0, 12));
	$lenD = ucfirst(substr($date, 0,12));
	
echo "<table id='cliental' > <tr><td>$id</td> <td>$first</td><td>$last</td><td title='$email'>$lenE..</td><td title='$date'>$lenD..  <span  style='color:red; font-size:20px; cursor:pointer;' title='delete'>X</span></td> </tr></table>";
	
	}
	
	}

function clientDelete(){}

function clientUpdate(){}

function clientAlll(){}
















?>