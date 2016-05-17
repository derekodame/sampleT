<?php 
error_reporting(E_ALL^E_NOTICE);
include"../functions/connection.php";

session_start();


$q = $_GET['g'];




?>
<!doctype html>
<link href="/photos/icon.png" rel="shortcut icon">
<html>
<head>
<meta charset="utf-8">
<title>hi</title>
</head>
<body>


<?php 
echo "<center>All the people who commented</center><p></p>";

$c=0;
$qu = mysqli_query($con,"SELECT * FROM feedbacka WHERE qid = '$q'"); 
while($ru= mysqli_fetch_array($qu)){
	$c++;
$nc = "$c . ".$ru['comment'] . "<br/><hr></hr>";
echo $nc;
}

?>

</body>



</html>