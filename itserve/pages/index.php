<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">

//redirecting to mobile or desktop version

/*	if(screen.width < 1000){
	window.location="http://www.as.bugs3.com";
		}
	else
window.location="../pages/regloginphp.php";

*/

</script>
<?php 
session_start();
$emailss = $_SESSION['email'];
if($emailss)
{
header("location: ./homee.php");
}else header("location: ./regloginphp.php");


?>
</body>
</html>