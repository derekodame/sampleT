<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta content="it,IT,itserve,ITSERVE,bugs3,bugs,bug,bugs3.com,serverfree,serversfree.com,com,computer,facebook,twitter,myspace,bbc,latest,history,now,iphone,android,wiki,wikipedia,dictionary,typing,now,so,what,give,best,cool website,website,free website,pussy,porn,pornography,game,games,nice ball,football,like,derek,stecks,stacks,stack,odame,derek odame,jennifer,keyboard,us,like us, lynda.com,lynda,google,google.com,joomla,google+,drupal,page,free,free games,free game,online courses,online,online course,mathematics course,english course,many,forget,lost,forgoten,whatsup,sup,girls,pretty girls,available,server,It,it,ict,ICT,love,why sad,sad,profile" name="keywords" />
<meta content="IT Serve, an ideal place to share ideas about ICT or IT and also learn from your friends who may call themselves the IT Geeks." name="description" />
<title>Welcome to IT Serve</title>
<link href="../css/itserve.css" rel="stylesheet" type="text/css" />
<link href="../photos/icon.png" rel="shortcut icon">

</head>

<body>
<div  class="body">
<div class="down_top">
<span style="float:left; width:AUTO;  margin-top:8px;">
<a href="regloginphp.php"><img src="../photos/IT-Serve.png" alt="IT Sever" width="227" height="77"/></a></span>

  <div  class="login">
  <form id="form3" name="form1" method="post" action=""><br/>

<ul>

<il><input required name="user" type="email" class="input" id="username" value = "Email" /></il>
<il><input required name="pass" type="password" class="input" id="password" value ="Password"/></il>
<il><input name="donelogin" type="submit" class="input" id="donelogin" value="LogIn"  style="cursor:pointer;"/>
 
 <span class="loginanswer"><?php 
  //echo $_SERVER['HTTP_HOST'];
require("../include/login.php");

error_reporting(E_ALL ^ E_NOTICE);
echo $login;
?><br/><a href="regloginphp.php"><span  class="rr" style="color:#333; font-size:9px;">Register</span></a></span></il>

</ul>
</form>
</div>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<div  class="regforget">
  <form action=""  method="post" enctype="multipart/form-data" name="form2" id="form2">
    <center ><span style="font-size:14px;color:#fff"><span style="font-size: 15px; color: #333">
      <?php 

  include"../include/connection.php";
  $forget = $_POST['forget'];
  $forgetbtn = $_POST['forgetbtn'];
  
  if($forgetbtn){
	  		$queryF=mysql_query("SELECT * FROM itserve1 WHERE email='$forget'");
			$num = mysql_num_rows($queryF);
			if($num == 1){
			$rowF = mysql_fetch_array($queryF);	
			$pass = $rowF['password'];
			$namef = $rowF['firstname'];
			$namel = $rowF['lastname'];
				
			$headers = array('From: IT_Serve','Content-Type: text/html');
			$content="<table style=\"font-family:Tahoma;\">
			
			<tr>
			<td> <img src='http://itserve.bugs3.com/photos/IT-Serve.png' /></td>
			<td>$namef $namel, your password is $pass<br/>
			Hope you enjoy using our website.<br/>
			Visit our <a href=\"https://www.facebook.com/pages/IT_Serve/442906509078634?ref=hl\">facebook</a> home page <br/>
			OR<br/>
			Go straight to our website <a href=\"http://www.itserve.bugs3.com\">Itserve.bugs3.com</a>
			</td>
			</tr>
			
			
			
			<table>";
			
			
			
		if(	mail($forget, "IT Serve", $content, implode("\r\n", $headers))){
				
				
				echo "Please check your email($forget) for your password";
		}else
			echo "did not go";
				}
		  else echo "Email not found in IT Serve server";
		
		
		
		
		//while($rowF = mysql_fetch_array($queryF)){
		//	echo $rowF['password'];
		//	}
	  
	  }else echo "Input Email";
	
  ?>
    </span></span></center>
  <p>
   <center> <input required name="forget" type="email" class="input" placeholder="Email" title="email" />
     <input name="forgetbtn" type="submit" class="inputb"  value="Get Password"  style="cursor:pointer;"/>
   </center> </p>
  <p>
 <center></center>
  </p>
  </form>
</div>


<div  

align="center">
  © 2013 Itserve. All Rights reserved 
  <essbr/><br/>
  <?php 

  $date = date("F d, Y");
  $datee = date("D");
//  echo $date." on ". $datee;
  ?>
</div>
</div>



<script src="../javascript/login.js">



</script>
</body>
</html>