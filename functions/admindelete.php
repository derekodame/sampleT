<?php 
 error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");

session_start();
$emailss = $_SESSION['email'];


//admin 
$aa = mysqli_real_escape_string($con,nl2br(htmlspecialchars( ($_POST['a']))));
$p = mysqli_real_escape_string($con,nl2br(htmlspecialchars( ($_POST['p']))));
$h = md5($p);

$pa = mysqli_query($con,"select * from admin_pass where email ='$aa' and password='$h'");

$numma = mysqli_num_rows($pa);
if($numma>0){

 mysqli_query($con,"DELETE FROM admin_pass WHERE email = '$aa' ");
mysqli_query($con,"DELETE FROM client WHERE email = '$aa' ");
 echo "account deleted";
}else { echo "invalid input";}

?>