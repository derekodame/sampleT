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
session_start(); $s = $_SESSION['se']; echo $s;
?>

<input type="hidden" id="l" value="
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
	echo "<center><div  id ='d' style=\" position:relative; margin:0 auto; fldoat:right; width:1100px\" ><table 
	
	width =100%>";
	
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
	
	
		if($day== $day_num){
	echo "<td  style='color:#00FF00;'> <center>$day_num </center><br/>";
		}else {
			
			echo "<td style='color:black; border-style: solid;
    border-color:blue; '> <center>$day_num </center><br/>";
			}


			
			

			

			
			
			
	//for hr		
$query = mysqli_query($con,"SELECT * FROM employees where username = '$s' "); 
$row=mysqli_fetch_array($query);

	$h = ($row['id']);
	
				
$query = mysqli_query($con,"SELECT * FROM workschedule where user = '$h' and uniquee=$day_num$month$year"); 
$row=mysqli_fetch_array($query);
	$u = ($row['user']);
	$hh = ($row['hr']);
	$d = ($row['day']);
	$mim = ($row['min']);
	$p = ($row['position']);
	if($h==$u){
	
	echo $all = "Station : $p <br/> $hh  : $mim : $d ";
	}else { echo "----------";}
//if($s){echo " $all ";}else{echo "not yet";}
						for ($i=1; $i <=12;  $i++) {
  
}
			
			
	

		 echo"
			
			
			<br/>
			
			
			
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