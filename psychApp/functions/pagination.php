<?php



 error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");

session_start();
$emailss = $_SESSION['email'];

$pagee = $_GET['v'];

$p = $pagee;

$x = ($p * 25)-25;

$query = mysqli_query($con, "select * from groupp order by id DESC limit  $x, 25");


echo "<div ><table id='groupd' id=''  style='background-color:;'  ><tr ><td><div style='width:80px;  '><b>Age</b></div></td><td ><center><div style='width:140px; '><b>Stage of change</b></div></center></td><td><center><div style='width:140px; overflow-x: hidden;'><b>Symptoms and Disorders</b></div></center></td><td><center><div style='width:200px; overflow-x: hidden; '><b>Psychological Treatment</b></div></center></td><td><center><div style='width:120px; overflow-x: hidden; '><b>Evidence Level</b></div></center></td><td><center><div style='width:500px; overflow-x: hidden; '><b>Basis for Evidence</b></div></center></td><td></td><td></td></tr></table><div>";


while($row=mysqli_fetch_array($query)){
	
	$age =ucfirst( $row['Age']);
	$id =ucfirst( $row['id']);
	$Stage_of_Change =ucfirst( $row['Stage_of_Change']);
	$Symptoms_and_Disorders = ucfirst($row['Symptoms_and_Disorders']);
	$Psychological_Treatment =ucfirst( $row['Psychological_Treatment']);
	$Evidence_Level = ucfirst($row['Evidence_Level']);
	$Basis_for_Evidence =ucfirst( $row['Basis_for_Evidence']);
	
	$id = ($row['id']);
	 

	echo "<table  id='groupf'><tr ><td><div contenteditable='true'  style='width:80px; overflow-x: hidden;'>$age</div></td><td ><div contenteditable='true'style='width:140px; overflow-x: hidden;'>$Stage_of_Change</div></td><td><div style='width:140px; overflow-x: hidden;' contenteditable='true'>$Symptoms_and_Disorders</div></td><td><div style='width:200px; overflow-x: hidden;' contenteditable='true'>$Psychological_Treatment</div></td><td> <div style='width:120px; overflow-x: hidden;' contenteditable='true'>$Evidence_Level</div></td><td><div style='width:500px; height:80px; overflow-x: hidden;' contenteditable='true' >$Basis_for_Evidence </div></td><td  style=' border: 0px solid white; ' ><span id='xx' onclick='dele($id);' title='delete' >x</span></td></tr></table>";

}
echo "<br/><br/><br/><div id='groupp'><table border='1' id=''  style='background-color:;'  ><tr ><td><center><div style='width:80px; overflow-x: hidden;'><b>Age</b></div></center></td><td ><center><div style='width:140px; overflow-x: hidden;'><b>Stage of change</b></div></center></td><td><center><div style='width:140px; overflow-x: hidden;'><b>Symptoms and Disorders</b></div></center></td><td><center><div style='width:200px; overflow-x: hidden;'><b>Psychological Treatment</b></div></center></td><td><center><div style='width:120px; overflow-x: hidden;'><b>Evidence Level</b></div></center></td><td><center><div style='width:500px; overflow-x: hidden;'><b>Basis for Evidence</b></div></center></td></tr></table><div>";

?>
<script type="text/javascript">

$('#groupp').hide();


</script>

 