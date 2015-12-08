<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$date = time();

$day = date('d', $date);
$month = date ('m', $date);
$year = date('Y', $date);
$n_year = date('Y', $date)+1;
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
	echo "<center><div style=\" position:relative; margin:0 auto; fldoat:left; width:1100px\" ><table border=0.2 width =100%>";
	
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

while($day_num<=$days_in_month){
	
	
	if($day== $day_num){
		echo "<td height=40> $day_num, today<br/>Fry : 4:30pm </td>";
		}else {
			
			echo "<td bgcolor='#33FFFF'> <center>$day_num </center>Station: Grill<br/>4:30pm -10:30pm</td>";
			}
		
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
	echo "<center>next month</center>";
		echo "<hr></hr>";
	
if($month==12){$ny = $n_year;}else{$ny = $year;}
	
	
	$first_day = mktime(0,0,0,$month_next, 1, $ny);

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
	
	$days_in_month = cal_days_in_month(0, $month_next, $year);
	echo "<center> Schedule for  $title ".$ny." </center>";
	echo "<center><div style=\"color:red; position:relative; margin:0 auto; fldoat:left; width:1100px\" ><table  border=0.2 width =100%>";
	
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

while($day_num<=$days_in_month){
	
	
	
			echo "<td bgcolor='#33FFFF'> $day_num </td>";
			
		
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
	
	
	

?>
</body>
</html>