<?php 
include"../functions/connection.php";
include"../functions/error.php";

$query = mysqli_query($con,"SELECT * FROM feedbackq  where feedbackq.shows ='1'  ORDER BY feedbackq.id DESC");

$queryy = mysqli_query($con,"SELECT * FROM feedbacka  where emailu ='$emailss' ");

$numrows = mysqli_num_rows($queryy);

if($numrows==0){
$cc=0;
while(($row=mysqli_fetch_array($query))){
	$cc++;
	$q=$row['question'];
	$a=$row['a'];
	$b=$row['b'];
	$c=$row['c'];
	$d=$row['d'];
	$e=$row['e'];
	$ida=$row['id'];
	$id=$row['id'];
	
	
echo "<div id = '$id'> $cc . $q <br/>
<table ><tr><th width='50px'><center>Excelent</center></th>
<th></th>
<th width='50px'><center>Neutral</center></th>
<th width='50px'></th>
<th width='50px'><center>poor</center></th>
<th width='50px'></th>
<th width='50px' ><center>N/A</center></th>
</tr>

<tr><td width='50px'><center><input type='radio'  name=\"r$id\"  id=\"r$id\" value=\"1\"></center></td>
<td width='50px'><center><input type='radio'  name=\"r$id\"  id=\"r$id\" value=\"2\"></center></td>
<td width='50px'><center><input type='radio'  name=\"r$id\" id=\"r$id\" value=\"3\"></center></td>
<td width='50px'><center><input type='radio'  name=\"r$id\" id=\"r$id\" value=\"4\"></center></td>
<td width='50px'><center>
<input type='radio'  name=\"r$id\"  id=\"r$id\" value=\"5\"></td></center>
<td></td>
<td width='50px'><center>
<input type='radio'  name=\"r$id\"  id=\"r$id\" value=\"0\"></td></center>

</tr>






</table>
<br/>
Comment</br/> 


<textarea  id='cn$id' style=' padding:0 5px 0 5px; '></textarea>  </span> <span  id='sc' ></span><br/>

<input type='button' onclick=\"range('$id','$emailss','r$id')\"  name='rr' value='submit'><br/>
<hr></hr> <br/><br/>
</div>

";
}
echo "<input onClick=\"feedad('$emailss')\"  type=\"button\" value=\"Close\">";
}else {
	
	echo "like us on facebook";
	
	}
?>