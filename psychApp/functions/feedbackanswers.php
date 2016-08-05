<?php 
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/section.php";


$query = mysqli_query($con,"SELECT * FROM feedadd ");
echo "<table id='clientalh' >" ;
echo "<tr><td style=\" border:thin solid black; \">". $translate->__('question')."</td> <td  style=\" border:thin solid black; \" title=''>rate</td> 
<td  style=\" border:thin solid black; width:70px; \" title=''>". $translate->__('count') . " 1</td>
<td  style=\" border:thin solid black;width:70px; \" title=''>". $translate->__('count') . " 2</td>
<td  style=\" border:thin solid black;width:70px; \" title=''>". $translate->__('count') . " 3</td>
<td  style=\" border:thin solid black;width:70px; \" title=''>". $translate->__('count') . " 4</td>
<td  style=\" border:thin solid black;width:70px; \" title=''>". $translate->__('count') . " 5</td>

</tr>";

echo "</table>";
echo "<table style=\"background-color:;\" id='clientalh' >" ;

$c=0;
$q="";
while($row=mysqli_fetch_array($query)){
	
	
	
	$n = $row['emailu'];
	$q= $row['q'];
	$qid= $row['qid'];
	$r= $row['r'];
	$c= $row['comment'];
	
	$queryq = mysqli_query($con,"SELECT * FROM feedbackq where id = '$q' ");
	$rowq=mysqli_fetch_array($queryq);
	$qq= $rowq['question'];
	$qi= $rowq['id'];
	
	
	
		$queryc = mysqli_query($con,"SELECT * FROM client where email = '$n' ");
	$rowc=mysqli_fetch_array($queryc);
	$fc= $rowc['firstname'];
	$lc= $rowc['lastname'];
	
	
	$queryk = mysqli_query($con,"SELECT * FROM feedbacka where qid='$q' ");
		$rowk=mysqli_fetch_array($queryk);
			$ac= $rowk['comment'];
			$rc= $rowk['rate'];
	$count =$queryk->num_rows;
	
	
	
	
	//number of people who rated
	$queryr = mysqli_query($con,"SELECT * FROM feedbacka where rate='1' and qid='$q' ");
	$count1 =$queryr->num_rows;
	$queryr = mysqli_query($con,"SELECT * FROM feedbacka where rate='2' and qid='$q' ");
	$count2 =$queryr->num_rows;
	$queryr = mysqli_query($con,"SELECT * FROM feedbacka where rate='3' and qid='$q' ");
	$count3 =$queryr->num_rows;
	$queryr = mysqli_query($con,"SELECT * FROM feedbacka where rate='4' and qid='$q' ");
	$count4 =$queryr->num_rows;
	$queryr = mysqli_query($con,"SELECT * FROM feedbacka where rate='5' and qid='$q' ");
	$count5 =$queryr->num_rows;
	
	$t =round(($r)/($count));
	
	
	
		echo " <tr><td style=\" border:thin solid black; background-color:white; color:black; \" ><textarea style='width:154px;  resize:none;' disabled  >$qq</textarea></td><td style=\" border:thin solid black; background-color:white; color:black;\" >$t</td>
		
<td style=\" border:thin solid black; background-color:white; color:black; width:70px;\" >$count1</td>
<td style=\" border:thin solid black; background-color:white; color:black; width:70px;\" >$count2</td>
<td style=\" border:thin solid black; background-color:white; color:black;width:70px;\" >$count3</td>
<td style=\" border:thin solid black; background-color:white; color:black; width:70px;\" >$count4</td>
<td style=\" border:thin solid black; background-color:white; color:black;width:70px;\" >$count5</td>

<td style=\" border:thin solid black; background-color:white; color:black;\" >
<span onclick=\"closedd('t.php?g=$q');\" style=\"cursor:pointer;\">link to question answers</span></td></tr>";
		
		

		
	
		
	
}

	echo "</table>";
	
	

?>
<script type="text/javascript">
function closedd (target){
	
	popwin = window.open(target,"windowName","width=550,height=850,status=yes");
	popwin.moveTo(1,1);
	
	//window.open('t.php');
	//alert('hat');
}
</script>