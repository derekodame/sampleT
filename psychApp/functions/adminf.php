<?php 
include("connection.php");


function clientAll($con){
$query = mysqli_query($con,"SELECT * FROM client order by date DESC");
echo "<table id='clientall' class='t'> <tr><td><center>id</center></td> <td><center>first</center></td><td><center>last</center></td><td><center>email</center></td><td><center>date  </center></td></tr></table>";
while($row=mysqli_fetch_array($query)){
	
	$first= $row['firstname'];
	$last= $row['lastname'];
	$email= $row['email'];
	$date= $row['date'];
	$id= $row['id'];
	$lenE = ucfirst(substr($email, 0, 13));
	$lenD = ucfirst(substr($date, 0,13));
	
echo "<table id='cliental' > <tr><td><a href='#'>$id</a></td> <td>$first</td><td>$last</td><td title='$email'>$lenE</td><td title='$date'>$lenD <span  style='color:red; font-size:20px; cursor:pointer;' title='delete'>X</span></td> </tr></table>";
	
	}
	
	}

function pagination($con){
	
	$queryt = mysqli_query($con, "select * from groupp order by id DESC ");

$num =mysqli_num_rows($queryt);
$div = ($num/25);
$p= ceil($div);
echo "";


for($b =1; $b<=$p; $b++){
	
	
	
	echo "<button id='$b' href='#' onClick='pag($b);'  style=' border-radius:4px; margin:5px; background-color:grey; color:white; padding:0 5px 0  5px; cursor:pointer;'>$b</button>";
	if($b>=34){
		echo"<script type='text/javascript'>
	document.getElementById('pasge').style.display = 'none';
	
	</script>";
	
	
		}
	
	}
	
	
	}
















?>