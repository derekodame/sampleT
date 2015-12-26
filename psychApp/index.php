<?php include "./functions/register.php"?>
<?php include "./functions/login.php"?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css" href="./css/login.css" rel="stylesheet"/>
</head>
<center><a href="main/admin.php" style="color:white; font-size:50px;" >preview link to admin...</a></center>
<body id="s" >
<div id="top"></div>


<div id="login">
<form action="" method="post">
<input name ="ilogin" id="ilogin"type="submit" value="Login" tabindex="0">

<input name ="ipassword" id="ipassword" type="password" placeholder="password" required tabindex="3">
<input  autofocus name ="iemail" id="iemail" type="email"  placeholder="email"  required value="<?php echo $_POST['iemail'];?>"  tabindex="1">
<span  style="float:right; margin-right:3px; font-size:12px"><?php echo $applyI; ?></span>
<span  style=" margin-top:2px; font-size:17px"></span>
</form>
</div>
<p></p>

<div id="reg">
<center> <?php echo $applyR; ?></center><br/>
<form action="" method="post">
<input name ="first" id ="first"type="text"  placeholder="firstname" required value="<?php echo $_POST['first'];?>">
<input name ="last" id = "last" type="text"  placeholder="lastname" required value="<?php echo $_POST['last'];?>"><br/>
<input  name ="email" id ="email" type="email" placeholder="email"  required value="<?php echo $_POST['email'];?>"><br/>

<input name ="password" id="password" type="password" placeholder="password" required value="<?php echo $_POST['password'];?>"><br/>
<input name ="conpass" id="conpass" type="password" placeholder="confirm password" required value="<?php echo $_POST['conpass'];?>"><br/>
<input name ="reset" id="reset" type="button" value="Reset">
<input name ="regdone" id="regdone" type="submit" value="Done">
</form>

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