
<?php 
include"../include/connection.php";
error_reporting(E_ALL^E_NOTICE);
session_start();
$emailss = $_SESSION['email'];

if($emailss)
{
header("location: ./homee.php");
}

?>
<!doctype html>
<html>
<head>
<meta content="it,IT,itserve name="keywords" />
<meta content="@2013 IT Serve" name="copyright"/>
<meta content="IT Serve" name="generator" />
<meta content="IT Serve, an ideal place to share ideas about ICT or IT and also learn from your friends who may call themselves the IT Geeks." name="description" />
   
<meta content="" name="description"
<meta charset="utf-8">
<title>Welcome to IT Serve</title>
<link href="../css/itserve.css" rel="stylesheet" type="text/css" />
<link href="../photos/icon.png" rel="shortcut icon">
<style>
.o{
	left: 157px;
	top: 20;
	background-color: rgba(255,51,204,0.7);
	width: 20px;
	height: 119px;
	z-index: 99828;
	position: absolute;
	background-image: url(../photos/IT-Serve.png);
	background-repeat: no-repeat;
	background-position: -13px 0px;
}


</style>
</head>

<body>

<div  class="body">

<div 

style="backgroundd: -linear-gradient(top,#A4E9FF,#09C);	
	backgroundd: -o-linear-gradient(top,#A4E9FF,#09C);	
	backgroundd: -ms-linear-gradient(top,#A4E9FF,#09C);	
	backgroundd: -webkit-linear-gradient(top,#A4E9FF,#09C);	"  
    
    
    class="down_top"><span style="float:left; width:AUTO;  margin-top:8px;">
<a href="regloginphp.php"><img class="aa" src="../photos/IT-Serve.png" alt="IT Serve" width="227" height="77"/></a></span>

  <div  class="login">
  <form id="form3" name="form1" method="post" action=""><br/>

<ul>
<?php 

$rt = $_POST['user'];

$rs = $_POST['donelogin'];
if($rs){
	 $rt;
	}else{$rt= "Email";}

?>
<il><input required name="user" type="email" class="input" id="username" value = <?php echo $rt;?> /></il>
<il><input required name="pass" type="password" class="input" id="password" value ="Password"/>
</il>

<il><input name="donelogin" type="submit" class="inputb" id="donelogin" value="LogIn"  style="cursor:pointer;"/>
 
 <span class="loginanswer"><?php 
require("../include/login.php");
error_reporting(E_ALL ^ E_NOTICE);
echo $login;
?><br/><a href="forget.php"><span style="color:black;font-size:9px;">Forgot Your Password</span></a></span></il>

</ul>
</form>
</div>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>

<div  class="reg">
<a href="others.php"><span style="float: right; color: #666; font-family: 'Comic Sans MS', cursive; text-decoration: underline;" >Check other's tips</span></a>

  <form action=""  method="post" enctype="multipart/form-data" name="form2" id="form2">
    <table width="30%" border="0" align="left">
      <tr align="">
      <td align="left"   style="color: #333; font-stretch: expanded; font-size: 18px;"   >
        <?php require("../include/done_registering.php");
	error_reporting(E_ALL ^ E_NOTICE);
echo $ss;

 ?><br/>
       <br/>
      </td>
    </tr>
    <tr>
      <td align="left"><span class="white">Firstname<br/><input required name="firstname" type="text" class="inputt" id="form" placeholder="..."  value="<?php echo $firstname; ?>"/></td>
    </tr>
    <tr>
      <td align="left"><span class="white">Lastname<br/><input required name="lastname" type="text" class="inputt" id="form4"  placeholder="..." value="<?php echo $lastname; ?>"/></td>
    </tr>
    <tr>
      <td align="left"><span class="white">Email<br/></span>
        <input required name="email" type="email" class="inputt" id="form1" placeholder="eg@yahoo.com"  value="<?php echo $email; ?>" size="45"/></td>
    </tr>
    <tr>
      <td align="left"><span class="white">Password<br/></span>
        <input name="password" type="password" class="inputt" id="textfield2" placeholder="..." size="45"  /></td>
    </tr>
    <tr>
      <td align="left"><span class="white">Occupation<br/></span>
        <input name="occupation" type="text" class="inputt" id="textfield89" size="45" placeholder="..."   /></td>
    </tr>
    <tr>
      <td align="left"><table width="10%" border="0" align="left">
        <tr>
          <td><span class="white">Male</span>
            <input name="sex" type="radio" class="" id="sex_0" value="Male" /></td>
          <td align="left"><span class="white">Female</span>
            <input name="sex" type="radio" class="" id="sex_1" value="Female" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="left"><span class="white">
        <input name="age" type="checkbox"  checked class="" id="checkbox" value="Above 18"/>
        Are you at least 12 years of age or above?</span>
        </td>
    </tr>
    <tr>
      <td align="left"><input style="cursor:pointer;"  name="done" type="submit" class="inputb" id="done" value="Done" /></td>
    </tr>
</table>
  <p style="position:absolute; top:213px; right:2px"></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </form>
  <div id="apDiv1"><br/>
  <?php 
  $vi="<div id='vs'><video controls   width='560px' height='342px'  >
 <source src = '../photos/4.mp4' type ='video/mp4' />
 </video></div>";
   $pii =rand(2,3);
   if($pii ==2){
	 $sc =".png"; 
	  }else if ($pii ==3){
		   $sc =".gif";
		   }
  $pi = "<img src='../photos/$pii$sc' width='560px' height='342px'/> ";
  $rr = rand(1,2);

  if($rr==2){
	  echo $vi;
	  }else{
		 echo $pi; 
		  }
  
  ?>
  
  
  
  
  </div>
 
</div>


<div  
style=
"font-family:Tahoma, Geneva, sans-serif; font-size:13px; color:#000; 
border: 0px none #09C;
background:white; 	
	backgroundd: -o-linear-gradient(top,#A4E9FF,#09C);	
	backgroundd: -ms-linear-gradient(top,#A4E9FF,#09C);	
	backgroundd: -webkit-linear-gradient(top,#A4E9FF,#09C);	 "
align="center">
<?php 
$time = date(Y);
echo "© ". $time." Itserve. All Rights reserved ";
?>
   
  <br/><br/>
</div>

</div>



<script src="../javascript/jquery-1.8.3.min.js"></script>
<script src="../javascript/picture_edit.js"></script>
<script src="../javascript/login.js"></script>
</body>
</html>