<?php 
error_reporting(E_ALL ^ E_NOTICE);
require("../include/connection.php");

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
<title>home</title>

<link href="../css/main.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv2 {
	position: absolute;
	left: 70px;
	top: 4px;
	width: 122px;
	height: 103px;
	z-index: 1;
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
#apDiv {
	position: absolute;
	left: 186px;
	top: 172px;
	width: 695px;
	height: 201px;
	z-index: 2;
}
</style>
<script type="text/javascript">

</script>
</head>

<body  class="body">
<span  class="picture_name">
  <a href="profile.php"><span class="Top_text">Profile</span></a>
  <a href="home.php"><span class="home">Home</span></a></span>
</div>
<div id="apDiv2" ><a href="../include/logout.php"><span class="lout">LogOut</span></a></div>

<div class="commentform">
  <p><span class="regirster_text">Give IT Tip</span></p>
  <form id="form1" name="form1" method="post" action="">
    <center>
      <table width="40%" border="0" align="center" >
        <tr>
          <td width="75%" align="right"><span class="warning">
            <?php 
	require("../include/comment.php");
	
	?>
          </span></td>
        </tr>
        <tr>
          <td align="right" ><br/>
            <textarea   name="comment" cols="55" rows="2" class="textfield" id="comment" value = "Password" ><?php 
		if($_POST['comment']){
			if(strlen($_POST['comment'])>88){
				
				echo $_POST['comment'];
				}
				//else
				//$_POST['comment']= "";
				
			}
		
		
		?>
            </textarea></td>
        </tr>
        <tr>
          <td align="right"><input name="commentbtn" type="submit" class="button" id="button" value="Done" /></td>
        </tr>
      </table>
    </center>
  </form>
 

  <div class="commentshow">
    <p><?php 
	require("../include/commentshow.php");

	?>
  </div>
  <p>&nbsp;</p>
</div>

<div class="picture_box" onmouseover="MM_showHideLayers('picture_edit','','show')" ><span class=" regirster_text">
  <?php
  echo "<img  width=\"150px\"  class=\"pictureborder\"height=\"120px\" src=../include/pictureshow.php?email=$emailss>"; ?>
  <br/>
  <center>
    <span class="regirster_text">
      <?php 
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
		echo ucfirst($F)."<span class=\"white\">_</span>". ucfirst($L);
		}
	
	
}

 ?>
    </span>
  </center>
</div>
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