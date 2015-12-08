<?php 
error_reporting(E_ALL ^ E_NOTICE);
require("../include/connection.php");
require("../include/ClassDatabase.php");
session_start();

$emailss = $_SESSION['email'];

if($emailss){
	
	}
	else
	header ("location: ./register_login.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Profile Edit</title>

<link href="../css/main.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv2 {
	position: absolute;
	left: 70px;
	top: 4px;
	width: 122px;
	height: 103px;
	z-index: 1;
	border: 1px solid #F5F5F5;
}
#apDiv3 {
	position: absolute;
	left: 293px;
	top: 215px;
	width: 511px;
	height: 109px;
	z-index: 2;
}
#apDiv4 {
	position: absolute;
	left: 296px;
	top: 466px;
	width: 511px;
	height: 41px;
	z-index: 3;
}

</style>
</head>

<body  class="body"  >
<div class="picture_box_details"><br/>
  <table width="80%" border="0" align="center" cellpadding="3" class="detail_text">
    <tr>
      <td align="left">Email</td>
      <td align="left"><span class="regirster_text">
        <?php 
$db->email("itserve1","$emailss");
 ?>
      </span></td>
    </tr>
    <tr>
      <td width="44%" align="left">Occupation<br/></td>
      <td width="56%" align="left"><span class="regirster_text">
        <?php 
error_reporting(E_ALL ^ E_NOTICE);


$query = mysql_query("SELECT * FROM itserve1 WHERE email = '$emailss' ");
	$numrows = mysql_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysql_fetch_assoc($query);
		
		global $s;
		
		$S = $row['sex'];
		$F = $row['firstname'];
		$L = $row['lastname'];
		$sex = $row['sex'];
		$o = $row['occupation'];
		echo ucfirst($o);
		}
	
	
}

 ?>
      </span></td>
    </tr>
    <tr>
      <td align="left">Sex</td>
      <td align="left"><span class="regirster_text" >
        <?php 
error_reporting(E_ALL ^ E_NOTICE);


$query = mysql_query("SELECT * FROM itserve1 WHERE email = '$emailss' ");
	$numrows = mysql_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysql_fetch_assoc($query);
		
		global $s;
		
		$S = $row['sex'];
		$F = $row['firstname'];
		$L = $row['lastname'];
		$sex = $row['sex'];
		$o = $row['occupation'];
		
		if($sex == ""){
			echo "Not Given";
			}
			else
		echo ucfirst($sex);
		}
	
	
}

 ?>
      </span></td>
    </tr>
    <tr>
      <td align="left">Date<span class="white">_</span>Of<span class="white">_</span>Registration</td>
      <td align="left"><span class="regirster_text">
        <?php 
error_reporting(E_ALL ^ E_NOTICE);


$query = mysql_query("SELECT * FROM itserve1 WHERE email = '$emailss' ");
	$numrows = mysql_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysql_fetch_assoc($query);
		
		global $s;
		
		$S = $row['sex'];
		$F = $row['firstname'];
		$L = $row['lastname'];
		$sex = $row['sex'];
		$o = $row['occupation'];
		$d = $row['date'];
		echo ucfirst($d);
		}
	
	
}

 ?>
      </span></td>
    </tr>
    <tr >
      <td align="left"><a href="edit.php">click</a></td>
      <td align="right">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  </p>
</div>
<span  class="picture_name">
  <a href="profile.php"><span class="Top_text">Profile</span></a>
  <a href="home.php"><span class="home">Home</span></a></span>
<div id="apDiv2" ><a href="../include/logout.php" id="out" ><span class="lout">LogOut</span></a></div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p><p></p>
<div class="picture_box" onmouseover="MM_showHideLayers('picture_edit','','show')" ><span class=" regirster_text">
  <?php
  
 $dbimg = "<img   width=\"150px\"  class=\"pictureborder\"height=\"120px\" src=../include/pictureshow.php?email=$emailss>";
 echo $dbimg;
   ?>
  
  <br/>
  <center>
    <span class="regirster_text">
      <?php 
$db->names("itserve1",$emailss);

 ?>
    </span>
  </center>
</div>
<form action="" method="post" enctype="multipart/form-data"  name="form1" id="form1">
  <table width="50%" border="0" align="center" cellpadding="5" class="editbody">
    <tr>
      <td align="right"><label for="textfield"></label><span class="regirster_text">First Name</span><br/>
      <input onblur="this.form.submit()" name="firstname" type="text" class="textfield"  id="textfield"  value="<?php 
error_reporting(E_ALL ^ E_NOTICE);


$query = mysql_query("SELECT * FROM itserve1 WHERE email = '$emailss' ");
	$numrows = mysql_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysql_fetch_assoc($query);
		
		global $s;
		
		$S = $row['sex'];
		$F = $row['firstname'];
		$L = $row['lastname'];
		$sex = $row['sex'];
		$o = $row['occupation'];
		$e = $row['email'];
		echo ucfirst($F);
		}
	
	
	
}

 ?>" size="30"/></td>
      <td><p>
        <label for="textfield2"></label><span class="regirster_text">Last Name</span><br/>
        <input  name="lastname" type="text" class="textfield" id="textfield2"   value="<?php 
error_reporting(E_ALL ^ E_NOTICE);


$query = mysql_query("SELECT * FROM itserve1 WHERE email = '$emailss' ");
	$numrows = mysql_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysql_fetch_assoc($query);
		
		global $s;
		
		$S = $row['sex'];
		$F = $row['firstname'];
		$L = $row['lastname'];
		$sex = $row['sex'];
		$o = $row['occupation'];
		$e = $row['email'];
		echo ucfirst($L);
		}
	
	
}

 ?>" size="30"/>
      </p></td>
    </tr>
    <tr>
      <td align="right"><label for="textfield3"></label><span class="regirster_text">Email</span><br/>
     
      <input name="email" type="text" class="textfield" id="textfield3" title="Email can't be changed"  value="<?php 
error_reporting(E_ALL ^ E_NOTICE);


$query = mysql_query("SELECT * FROM itserve1 WHERE email = '$emailss' ");
	$numrows = mysql_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysql_fetch_assoc($query);
		
		global $s;
		
		$S = $row['sex'];
		$F = $row['firstname'];
		$L = $row['lastname'];
		$sex = $row['sex'];
		$o = $row['occupation'];
		$e = $row['email'];
		echo ucfirst($e);
		}
	
	
}

 ?>" size="30" readonly="readonly" /></td>
      <td><label for="textfield4"></label>
      <span class="regirster_text">Password</span><br/>  <input name="password" type="text" class="textfield" id="textfield4" value="<?php 
error_reporting(E_ALL ^ E_NOTICE);


$query = mysql_query("SELECT * FROM itserve1 WHERE email = '$emailss' ");
	$numrows = mysql_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysql_fetch_assoc($query);
		
		global $s;
		$pass = $row['password'];
		$S = $row['sex'];
		$F = $row['firstname'];
		$L = $row['lastname'];
		$sex = $row['sex'];
		$o = $row['occupation'];
		$e = $row['email'];
		echo ucfirst($pass);
		}
	
	
}

 ?>" size="30" /></td>
    </tr>
    <tr>
      <td align="right"></td>
      <td><span class="regirster_text">Occupation</span><br/><input name="occupation" type="text" class="textfield" id="textfield5" value="<?php 
error_reporting(E_ALL ^ E_NOTICE);


$query = mysql_query("SELECT * FROM itserve1 WHERE email = '$emailss' ");
	$numrows = mysql_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysql_fetch_assoc($query);
		
		
		
		$S = $row['sex'];
		$F = $row['firstname'];
		$L = $row['lastname'];
		$sex = $row['sex'];
		$o = $row['occupation'];
		$e = $row['email'];
		echo ucfirst($o);
		}
	
	
}

 ?>" size="30" /></td>
    </tr>
    <tr>
      <td align="right"><span class="regirster_text"> Male</span><br/><input name="sex" type="radio" class="textfield" id="RadioGroup1_1" value="Male"  />        <br />    </td>
      <td align="left"><span class="regirster_text">Female</span><br/>
        <input name="sex" type="radio" class="textfield" id="RadioGroup1_0" value="Female" /></td>
    </tr>
    <tr>
      <td align="center"><span class="regirster_text"> <?php include("../include/picture.php");?><span class="warning">
       
      </td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right"><input  dropzone="link" name="picture" type="file" class="textfield" id="textfield6" onchange="this.form.submit()" />        <br/></td>
      <td align="center" ><input name="done" type="submit" class="button" id="button" value="<?php 
error_reporting(E_ALL ^ E_NOTICE);


$query = mysql_query("SELECT * FROM itserve1 WHERE email = '$emailss' ");
	$numrows = mysql_num_rows($query);
	if ($numrows == 1 ){
		if($emailss){
		$row = mysql_fetch_assoc($query);
		
	
		
		$S = $row['sex'];
		$F = $row['firstname'];
		$L = $row['lastname'];
		$sex = $row['sex'];
		$o = $row['occupation'];
		$e = $row['email'];
		echo "Click to Update ".ucfirst($F)."'s Profile";
		
		}
	
	
	
}

 ?>" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>

<div class="footer">Copyright © 2012 itserve. All Rights Reserved<center>Powered by stecks</center></div>
<script src="../javascript/picture_edit.js"></script>
</body>
</html>
<?php 
$firstnameE = $_POST['firstname'];
$lastnameE = $_POST['lastname'];
$emailE = $_POST['email'];
$passwordE = $_POST['password'];
$sexE = $_POST['sex'];
$occupationE = $_POST['occupation'];
$done = $_POST['done'];

if($done){
	$query = "UPDATE itserve1 SET firstname = '$firstnameE'  WHERE email ='$emailss'";

	mysql_query($query);
	if(mysql_query($query)){
	$query = "UPDATE itserve1 SET lastname = '$lastnameE'  WHERE email ='$emailss'";

	mysql_query($query);
	if(mysql_query($query)){
		$query = "UPDATE itserve1 SET email = '$emailE'  WHERE email ='$emailss'";
	mysql_query($query);
	
		if(mysql_query($query)){
			$query = "UPDATE itserve1 SET password = '$passwordE'  WHERE email ='$emailss'";

	mysql_query($query);
	if(mysql_query($query)){
		$query = "UPDATE itserve1 SET occupation = '$occupationE'  WHERE email ='$emailss'";
		mysql_query($query);
		if(mysql_query($query)){
		$query = "UPDATE itserve1 SET sex = '$sexE'  WHERE email ='$emailss'";
		mysql_query($query);
		if($emailss != $emailE){
	header ("location: ./register_login.php");
	}
	
	
		}
		}
			}
		}
	}
}


?>