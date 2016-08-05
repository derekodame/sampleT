

<?php


//include"../functions/section.php";
 error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");
require('class.translation.php');

session_start();

//translate

$sp = $_GET['sp'];

if(isset($sp)){
	$translate = new Translator($sp);
}
else{
	$translate = new Translator('en');
}




$emailss = $_SESSION['email'];

$pagee = $_GET['v'];


$p = $pagee;

$x = ($p * 25)-25;

$query = mysqli_query($con, "select * from groupp order by id DESC limit  $x, 25");







echo "


<div   ><table id='groupd' id=''  style=' padding-left:3px;'  ><tr ><td><center><div style='width:80px;  '><b>
".
$translate->__("Age")
. "
</b></div></center></td><td ><center><div style='width:140px; padding-left:3px;'><b>".
$translate->__("Stage of Change").

"</b></div></center></td><td><center><div style='width:140px; padding-left:3px; overflow-x: hidden;'><b>".
$translate->__("Symptoms and Disorders").

"</b></div></center></td><td><center><div style='width:200px;padding-left:3px; overflow-x: hidden; '><b>".
$translate->__("Psychological Treatment").

"</b></div></center></td><td><center><div style='width:120px;  padding-left:3px;overflow-x: hidden; '><b>".
$translate->__("Evidence Level").

"</b></div></center></td><td><center><div style='width:500px; padding-left:3px;overflow-x: hidden; '><b>".
$translate->__("Basis for Evidence").

"</b></div></center></td><td></td><td></td></tr></table><div>";


while($row=mysqli_fetch_array($query)){
	
	$age =ucfirst( $row['Age']);
	$id =ucfirst( $row['id']);
	$Stage_of_Change =ucfirst( $row['Stage_of_Change']);
	$Symptoms_and_Disorders = ucfirst($row['Symptoms_and_Disorders']);
	$Psychological_Treatment =ucfirst( $row['Psychological_Treatment']);
	$Evidence_Level = ucfirst($row['Evidence_Level']);
	$Basis_for_Evidence =ucfirst( $row['Basis_for_Evidence']);
	
	$id = ($row['id']);
	
	
	if($age=="Child"){
		
		mysqli_query($con,"DELETE FROM groupp WHERE id = '$id'");
		}
	 
	echo "<table  id='groupf' class='$id'><tr  ><td  ><div  contenteditable='true'  style='width:80px; padding-left:3px; overflow-x: hidden;'id='a$id' onkeyup=\"up($id,'a$id','Age');\">  $age</div></td><td ><div style='width:140px; overflow-x: hidden; padding-left:3px;' contenteditable='true'  id = 'b$id' onkeyup=\"up($id,'b$id','Stage_of_Change');\" >$Stage_of_Change</div></td><td><div style='width:140px; overflow-x: hidden; padding-left:3px;' contenteditable='true' id='c$id' onkeyup=\"up($id,'c$id','Symptoms_and_Disorders');\">$Symptoms_and_Disorders</div></td><td><div style='width:200px; overflow-x: hidden; padding-left:3px;' contenteditable='true' id='d$id' onkeyup=\"up($id,'d$id','Psychological_Treatment');\">$Psychological_Treatment</div></td><td> <div contenteditable='true' style='width:120px; overflow-x: hidden; padding-left:3px;' id='e$id' onkeyup=\"up($id,'e$id','Evidence_Level');\">$Evidence_Level</div></td><td><div style='width:500px; height:80px; overflow-x: hidden; padding-left:3px;' contenteditable='true'  contenteditable='true' id='f$id' onkeyup=\"up($id,'f$id','Basis_for_Evidence');\">$Basis_for_Evidence </div></td><td  style=' border: 0px solid ;	background-color:rgba(240,240,240,0); padding-left:3px; ' ><br/><span id='xx' onclick='delep($id);' title='delete' >x</span></td></tr></table>";

}





?>
<script type="text/javascript">

$('#groupp').hide();


</script>

 