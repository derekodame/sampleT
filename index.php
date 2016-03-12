<?php
include "./functions/error.php";
 //include "./functions/register.php"?>
<?php 
session_start();

$id = $_SESSION['id'];
$emailss = $_SESSION['email'];
$lasts	= $_SESSION['lastname'];
$firsts = $_SESSION['firstname'];
if($emailss){
		header("location: ./main/main.php");
		}else {//header("location: index.php");
		}
		
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>psych</title>
<link type="text/css" href="./css/login.css" rel="stylesheet"/>
</head>


<body id="s" >
<div id="top"></div>


<div id="login">
<fordm action="" method="post">

<div  style="height:42px; background-color:orage; border-radius:4px;">
<center><div  id="ss" style="height:19px;" ></div></center>
<span  id="" ><div id="signin" style="height:50px;" ></div>
</span></div>
<div>
<span><br/></span><input   autofocus name ="iemail" id="iemail" type="email"  placeholder="Email/Userid"   title="Email/Userid" value=""  ></div>
<div>
<span><center></center></span>
<input name ="ipassword" id="ipassword" type="password" placeholder="password" required ></div>



<div><input name ="ilogin" id="ilogin"type="submit" value="Sign In" onclick="signin();"  ></div>
<span  style=" margin-top:2px; font-size:17px"></span>
</form>
<div><span style="float:ridght; color:rgba(43,43,43,1.00); cursor:pointer;"><center>Forgot Your Password</center></span></div>
<div style="color:white; cursor:pointer;" id="regn"><center>Create an account</center></div>

</div>
<p></p>

<div id="reg" >

 <div style=" width:325px;height:42px;" ><center><div style=" width:308px;height:42px; color:; margin-left:1px;" id="regs" ></div></center></div>
 <div id='regp' style="height:80px;"  > </div>
<fordm action="" method="post">
<div >
<input name ="first" id ="first"type="text"  placeholder="firstname" required value="">
<input name ="last" id = "last" type="text"  placeholder="lastname" required value=""></div>
<div>
<input oncopy="copy()" name ="email" id ="email" type="email" placeholder="email"  required value=""></div>

<div><input name ="password" id="password" type="password" placeholder="password" required value=""></div>
<div><input  name ="conpass" id="conpass" type="password" placeholder="confirm password" required value=""></div>
<div><input name ="reset" id="reset" type="button" value="Reset">
<input onClick="register();" name ="regdone" id="regdone" type="submit" value="Done"></div>
</form>

<div id="sin"></div>
</div>

<?php 
/*$date = time();

$day = date('d', $date);
$month = date ('m', $date);
$year = date('Y', $date);
$first_day = mktime(0,0,0,$month, $day, $year);
$day_of_week = date('D', $first_day);
$first_day = mktime(0,0,0,$month, $day, $year);
$title= date('F', $first_day);

echo "$month/$day/$year <br/>";
echo " $day_of_week $title,$year <br/>";
echo "  $title $day,$year";
*/

?>
</body>

<script type="text/javascript" src="javascript/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
</html>