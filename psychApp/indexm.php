<?php include "./functions/register.php"?>
<?php include "./functions/login.php"?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css" href="./mobileCss/mobileLogin.css" rel="stylesheet"/>
</head>
<body id="s" >
<div id="login">
<span  style=" font-size:28px;"><?php echo $applyI; ?></span><br/>
<center><div >
<form action="" method="post">


<input  name ="iemail" id="iemail" type="email"  placeholder="email"  required value="<?php echo $_POST['iemail'];?>"  tabindex="1">
<input name ="ipassword" id="ipassword" type="password" placeholder="password" required tabindex="3"><br/>
<input name ="ilogin" id="ilogin"type="submit" value="Login" tabindex="0"><br/>

<span  style=" margin-top:2px; font-size:17px"></span>



</form></div></center>
</div>
<p></p>

<div id="reg">
<center><span style="width:450px;  height:90px; font-size:41px;" ><?php echo $applyR; ?></span></center><br/>
<form action="" method="post">
<input name ="first" id ="first"type="text"  placeholder="firstname" required value="<?php echo $_POST['first'];?>">
<input name ="last" id = "last" type="text"  placeholder="lastname" required value="<?php echo $_POST['last'];?>"><br/>
<input  name ="email" id ="email" type="email" placeholder="email"  required value="<?php echo $_POST['email'];?>"><br/>

<input name ="password" id="password" type="password" placeholder="password" required value="<?php echo $_POST['password'];?>"><br/>
<input name ="conpass" id="conpass" type="password" placeholder="confirm password" required value="<?php echo $_POST['conpass'];?>"><br/>
<input name ="regdone" id="regdone" type="submit" value="Done">
</form>

</div>

<?php 
$date = time();

$day = date('d', $date)-1;
$month = date ('m', $date);
$year = date('Y', $date);
$first_day = mktime(0,0,0,$month, $day, $year);
$day_of_week = date('D', $first_day);
$first_day = mktime(0,0,0,$month, $day, $year);
$title= date('F', $first_day);

echo "$month/$day/$year <br/>";
echo " $day_of_week $title,$year <br/>";
echo "  $title $day,$year";


?>
</body>

<script type="text/javascript" src="javascript/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
</html>