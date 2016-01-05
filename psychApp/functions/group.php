<?php 


 error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");

session_start();
$emailss = $_SESSION['email'];

$query = mysqli_query($con, "select * from groupp order by id DESC");

echo "<table border='1' id='groudp'   ><tr ><td ><center><div style='width:200px; overflow-x: hidden;'>stage of change</div></center></td><td><center><div style='width:200px; overflow-x: hidden;'>Symptoms and Disorders</div></center></td><td><center><div style='width:200px; overflow-x: hidden;'>Psychological Treatment</div></center></td><td><center><div style='width:200px; overflow-x: hidden;'>Evidence Level</div></center></td><td><center><div style='width:495px; overflow-x: hidden;'>Basis for Evidence</div></center></td></tr></table>";


while($row=mysqli_fetch_array($query)){
	
	$Stage_of_Change =ucfirst( $row['Stage_of_Change']);
	$Symptoms_and_Disorders = ucfirst($row['Symptoms_and_Disorders']);
	$Psychological_Treatment =ucfirst( $row['Psychological_Treatment']);
	$Evidence_Level = ucfirst($row['Evidence_Level']);
	$Basis_for_Evidence =ucfirst( $row['Basis_for_Evidence']);
	
	$id = ($row['id']);

echo "<table border='1' id='groupf'><tr ><td><div style='width:200px; overflow-x: hidden;'>$Stage_of_Change</div></td><td><div style='width:200px; overflow-x: hidden;'>$Symptoms_and_Disorders</div></td><td><div style='width:200px; overflow-x: hidden;'>$Psychological_Treatment</div></td><td> <div style='width:200px; overflow-x: hidden;'>$Evidence_Level</div></td><td><div style='width:495px; height:80px; overflow-x: hidden;' contenteditable='true' >$Basis_for_Evidence </div></td></tr></table>";

}


?>