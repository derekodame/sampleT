
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
error_reporting(E_ALL^E_NOTICE);
mysql_connect("localhost","root","");
mysql_select_db("itserve");
	 $a=0;
	$like = $_GET['get'];
	if($like>0){
		$a = $a + 1;
		
		}
		
$query=mysql_query("SELECT * FROM pannel");
while($row=mysql_fetch_array($query)){
	$bg = $row['like'];
	
	
	if($bg){
		$bg = $bg +1;
		echo "<a href=\"like.php?$bg\" >$bg</a>";
		//header("location: like.php");
		}
	}
?>
<a href="like.php?get=<?php //echo $a;?>" onClick="">Like
<?php //echo $a;?>

</a>

<?php 


?>
</body>
</html>