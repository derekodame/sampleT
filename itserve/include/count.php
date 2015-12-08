<link href="../css/itserve.css" rel="stylesheet" type="text/css">
<?php 

include"connection.php";



$queryy = mysqli_query($con,"SELECT count(*) FROM itserve1 WHERE online = 1");
//$count = (mysql_result($queryy,0)-1);
$count = $queryy->num_rows-1;

if($count==1){
	echo "One Member Is Online";
	}
	else if($count==0){
		echo "NO One Is Online";
		}
	else
echo " $count Members Online";;

?>