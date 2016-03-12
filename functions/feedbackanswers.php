<?php 
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/section.php";


$query = mysqli_query($con,"SELECT * FROM feedbacka ");
echo "<table id='clientalh' >" ;
echo "<tr><td style=\" border:thin solid black; \">question</td> <td style=\" border:thin solid black; \">name</td><td  style=\" border:thin solid black; \" title=''>rate</td><td  style=\" border:thin solid black; \" title=''>comment </td></tr>";

echo "</table>";
echo "<table style=\"background-color:;\" id='clientalh' >" ;
while($row=mysqli_fetch_array($query)){
	
	
	
	$n = $row['emailu'];
	$q= $row['qid'];
	$r= $row['rate'];
	$c= $row['comment'];
	
	$queryq = mysqli_query($con,"SELECT * FROM feedbackq where id = '$q' ");
	$rowq=mysqli_fetch_array($queryq);
	$qq= $rowq['question'];
	
		$queryc = mysqli_query($con,"SELECT * FROM client where email = '$n' ");
	$rowc=mysqli_fetch_array($queryc);
	$fc= $rowc['firstname'];
	$lc= $rowc['lastname'];
		echo " <tr><td style=\" border:thin solid black; background-color:white; color:black; \" ><textarea style='width:154px;  resize:none;' disabled>$qq</textarea></td> <td style=\" border:thin solid black; background-color:white; color:black;\" >$fc $lc</td><td style=\" border:thin solid black; background-color:white; color:black;\" >$r</td><td title='$c'style=\"border:thin solid black;  background-color:white; color:black;\" ><textarea style='width:154px;  resize:none;' disabled>$c</textarea></td></tr>";

	}
	echo "</table>";
	
	

?>