<?php 
include"../functions/connection.php";
include"../functions/head.php"; 

include"../functions/function.php";


?>
<button id="s" onclick="printDiv('d');">Print this month schedule</button>
<script src="../javascript/jquery-1.11.3.min.js">

var se = document.getElementsByName('se').item(0).value;
</script>

<?php 
session_start();
$users = $_GET['se'];
$_SESSION['se']=$users;
$s = $_SESSION['se'];
echo $s;
?>
<form method="get">
<select name="se" id="se" onchange="this.form.submit()">
<option><?php

if($s){
echo  $s;
}else{echo "employees";}

?>

<?php 
echo allusers();
?>
</select>

</form>
<input type="text" id="l" value="
<?php
$query = mysqli_query($con,"SELECT * FROM employees where username = '$s'"); 
while($row=mysqli_fetch_array($query)){
	$r = ($row['username']);
	$i = ($row['id']);
		
	echo $i;
}


?>
"/>

<?php 

?>
<?php 



$date = time();

$day = date('d', $date);
$month = date ('m', $date);
$year = date('Y', $date);
$month_next = date ('m', $date)+1;



$first_day = mktime(0,0,0,$month, 1, $year);

//getting the date of the month
$title= date('F', $first_day);

//getting the date of the month
 $day_of_week = date('D', $first_day);


switch($day_of_week){
	
	case "Sun": $blank = 0; break;
	case "Mon": $blank = 1; break;
	case "Tue": $blank = 2; break;
	case "Wed": $blank = 3; break;
	case "Thu": $blank = 4; break;
	case "Fri": $blank = 5; break;
	case "Sat": $blank = 6; break;
	
	}
	
	$days_in_month = cal_days_in_month(0, $month, $year);
	echo "<center> Schedule for  $title $year </center>";
	echo "<center><div  id ='d' style=\" position:relative; margin:0 auto; fldoat:right; width:1100px\" ><table border=0.2 width =100%>";
	
	echo "<tr><td width= 62>Sun</td><td width = 62> Mon</td><td width = 62>Tue</td><td width = 62>Wed</td><td width = 62>Thu</td><td width = 62>Fri</td><td width = 62>Sat</td>";
	
	$day_count =1;
	echo "<tr></tr>";
	
	while ($blank >0)
	{
	echo "<td></td>";
	$blank = $blank-1;
	$day_count++;
		}
$day_num = 1;

$uu = "station$day_num$month$year";



while($day_num<=$days_in_month){
	


			
			echo "<td bgcolor='#33FFFF'> <center>$day_num </center><br/>
			<select name='p$day_num' >";

			
$query = mysqli_query($con,"SELECT * FROM employees where username = '$s' "); 
$row=mysqli_fetch_array($query);

	$h = ($row['id']);
				
$query = mysqli_query($con,"SELECT * FROM workschedule where user = '$h' and uniquee=$day_num$month$year"); 
$row=mysqli_fetch_array($query);

	$p = ($row['position']);
		
if($p){echo "<option>$p</option>";}else{
	echo "<option>station</option><option>Fry</option><option>Grill</option><option>Salad</option>";}
			
			
			echo "</select>
			<br/>
			<select name='h$day_num'>";
	//for hr		
$query = mysqli_query($con,"SELECT * FROM employees where username = '$s' "); 
$row=mysqli_fetch_array($query);

	$h = ($row['id']);
				
$query = mysqli_query($con,"SELECT * FROM workschedule where user = '$h' and uniquee=$day_num$month$year"); 
$row=mysqli_fetch_array($query);

	$hh = ($row['hr']);
		
if($hh){echo "<option>$hh</option>";}else{echo "<option>hr</option>";}
						for ($i=1; $i <=12;  $i++) {
   echo "<option>$i</option>";
}
			
			
		echo	"</select><select name='m$day_num'>";
//for day

$query = mysqli_query($con,"SELECT * FROM employees where username = '$s' "); 
$row=mysqli_fetch_array($query);

	$h = ($row['id']);
				
$query = mysqli_query($con,"SELECT * FROM workschedule where user = '$h' and uniquee=$day_num$month$year"); 
$row=mysqli_fetch_array($query);

	$m = ($row['min']);
		
if($m){echo "<option>$m</option>";}else{echo "<option>min</option>";}

						for ($i=-30; $i <=30;  $i++) {
						$i=$i+30;
	if($i==31){$i=30;}else if($i==0){$i='00';}
   echo "<option>$i</option>";
}
		//javascript here	
		echo "</select>
			<select name='ap$day_num' id='ap$day_num'>";
			
			// for day
$query = mysqli_query($con,"SELECT * FROM employees where username = '$s' "); 
$row=mysqli_fetch_array($query);

	$h = ($row['id']);
				
$query = mysqli_query($con,"SELECT * FROM workschedule where user = '$h' and uniquee=$day_num$month$year"); 
$row=mysqli_fetch_array($query);

	$d = ($row['day']);
		
if($d){echo "<option>$d</option>";}else{echo "<option>a/p</option><option>am</option><option>pm</option>";}
			
		 echo"</select>
			<button type='Submit' id='$day_num$month$year' name='sdone' >$day_num$month$year</button>
			
			<br/>
			<script type='text/javascript'>
			
			$('#$day_num$month$year').click(function(){
				//allert($day_num$month$year);
				//var umser =$('#se').val();
				var ap =$('#ap').val();
				var app = document.getElementsByName('ap$day_num').item(0).value;
				var h = document.getElementsByName('h$day_num').item(0).value;
				var m = document.getElementsByName('m$day_num').item(0).value;
				var p = document.getElementsByName('p$day_num').item(0).value;
				var userr = document.getElementsByName('se').item(0).value;
				
			var bb =$('#l').val();
				
				//var user =userr;
				var user = bb;
				alert(bb);
				var unique ='$day_num$month$year';
				
		
	$.post('../functions/Eupdate.php', {uniquee:unique,users:user,ape:app,hr:h,mim:m,p:p},function(data){
			
				if(data ==' '){
				$('#d').load('employer.php');
				//alert(2);
				}
				});
			});

			
			 </script>
			
			
			</td>";
			
		
	$day_num++;
	$day_count++;
	
	if($day_count >7) {
		echo "<tr></tr>";
		$day_count = 1;
		}
	
	}
while ($day_count >1 && $day_count <=7){
	echo "<td> </td>";
	$day_count++;
	}
	echo "<tr></table></div></center>";
	

	
	
		

	echo "<hr></hr>";

?>


<script type="text/javascript">
//print
var i = document.getElementById('d');



function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}






if(1==2){
	$.post('backup.php', {li:ne},function(data){
			
				//$('#likee').text(data);
				$('#likee').load("test.php");
				if(data==1){
					$('#like').text('Liked');
					
					}else $('#like').text('unLike');
				
				
				
			
			});
}
			
</script>



<?php 
include_once"../functions/footer.php"; ;


?>