
<?php 
include"../include/connection.php";
error_reporting(E_ALL^E_NOTICE);
session_start();
$emailss = $_SESSION['email'];

if($emailss)
{
header("location: ./homee.php");
}

?><!doctype html>
<html>
<head>
<meta content="it,IT,itserve,ITSERVE,bugs3,bugs,bug,bugs3.com,serverfree,serversfree.com,com,computer,facebook,twitter,myspace,bbc,latest,history,now,iphone,android,wiki,wikipedia,dictionary,typing,now,so,what,give,best,cool website,website,free website,pussy,porn,pornography,game,games,nice ball,football,like,derek,stecks,stacks,stack,odame,derek odame,jennifer,keyboard,us,like us, lynda.com,lynda,google,google.com,joomla,google+,drupal,page,free,free games,free game,online courses,online,online course,mathematics course,english course,many,whatsup,sup,girls,pretty girls,available,server,It,it,ict,ICT,love,why sad,sad,profile" name="keywords" />
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

<il><input required name="user" type="email" class="input" id="username" value = "Email" /></il>
<il><input required name="pass" type="password" class="input" id="password" value ="Password"/></il>
<il><input name="donelogin" type="submit" class="inputb" id="donelogin" value="LogIn"  style="cursor:pointer;"/>
 
 <span class="loginanswer"><?php 
require("../include/login.php");
error_reporting(E_ALL ^ E_NOTICE);
echo $login;
?><br/><a href="forget.php"><span style="color:black;font-size:9px;">Forgot Your Password</span></a> || <a href="regloginphp.php"><span style="color:black;font-size:9px;">Register</span></a></span></il>

</ul>
</form>
</div>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="side_search">

<?php //search through ?>

<input type="text" name="other_search" id="other_search" class="other_search">
 <span class="os"></span> 
</div>

<center><span style="color: rgba(51,51,51,0.8); font-size: 18px; font-family: Tahoma, Geneva, sans-serif;">ICT TIPS FROM MEMBERS ON IT SERVE</span></center>
<div id="oo"  class="other">
  <?php
  include "../include/other_comment_show.php";
echo "<br/><br/>";

?>
<a href="#top" style="float:right;"><img src="../photos/top_arrow-3.gif"/></a>

<script src="../javascript/jquery-1.8.3.min.js"></script>
<script src="../javascript/picture_edit.js"></script>
<script type="text/javascript">

function iii(idc){
	 var v =$('#r' + idc).click(function(){
		 //v.val("opps!");
		// window.location = "./regloginphp.php?email=<?php  ;?>";
		 }
	 
	 );
	
	}

function replaceString(sourceString, patternToFind, strReplacement) {
	var result = sourceString.replace(patternToFind,strReplacement);
	document.getElementById('oo').innerHTML = result;
}

var reg = /fuck/gi
var regg = /shit/gi;
var smile = /:\)/gi;


function doReplacement() {
replaceString(document.getElementById('oo').innerHTML,reg,"<span style='color:red;' >"+" <em >' <span style=''> ***</span> '</em> "+"</span>");
replaceString(document.getElementById('oo').innerHTML,regg,"<span style='color:red;'>"+" <em>' <span style=''>***</span> '</em> "+"</span>");
replaceString(document.getElementById('oo').innerHTML,smile,"<span style='display:inline-block;'>"+" <img src='../photos/smilee.png' width='15px' height='15px' /> "+"</span>");

}

doReplacement();

//search
$(".other_search").keyup(function(e){


$(".other").hide();
var sv = $(".other_search").val()	
 $('.os').html('<img src=../photos/loader.gif />');
 

	 
$.get('../include/searchh.php', {sv:sv},function(data){
	
$('.os').html('');	
$('.op').html(data) 	
 
	});	


if(($(".other_search").val()=="")){
	
	$(".other").show();
	}	
})
</script> 
 
 </div>


<div  

align="center">
<?php 
$time = date(Y);
echo "© ". $time." Itserve. All Rights reserved ";
?>
   
  <br/><br/>
  
</div>
<div id="op" class="op"></div>
</div>




<script src="../javascript/login.js"></script>

</body>
</html>