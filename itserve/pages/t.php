<?php 
error_reporting(E_ALL^E_NOTICE);
include"../include/connection.php";
//include"like.php";
session_start();


$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];
$occupation = $_SESSION['occupation'];
$fl=$first." ".$last;
$ch = "ssss@hotmail.com";

$email=$_GET['email'];



if($emailss){
	
	}
else
header ("location: ../pages/regloginphp.php");
?>

<!doctype html>
<link href="/photos/icon.png" rel="shortcut icon">
<html>
<head>
<meta charset="utf-8">
<title><?php
$qu = mysql_query("SELECT * FROM itserve1 WHERE email = '$email'"); 
while($ru= mysql_fetch_array($qu)){
	
	$nc = $ru['firstname']." ".$ru['lastname'];
	
$query=mysql_query("SELECT * FROM pannel where email = '$email'");
$row=mysql_fetch_array($query);
	$bg = $row['bgcolor'];
	
	  $tt = "Chatting with ".$ru['firstname']." ".$ru['lastname'];

if($emailss == $email){
	
	echo $tt = "Select a friend to chat with";
	$ts = "none";
	}
	else if($email != $emailss){
	
	echo $tt;
	}	
	}
	
?></title>
<link href="../css/itserve.css" rel="stylesheet" type="text/css" />
</head>

<body><div class="newmsg">
<?php 
include "../include/new_chat_show.php";
?>

</div>
<br/>
<div class="bodycc">

<h1 class="h1c">
<?php


$qu = mysql_query("SELECT * FROM itserve1 WHERE email = '$email'"); 
while($ru= mysql_fetch_array($qu)){
	
	$nc = $ru['firstname']." ".$ru['lastname'];
	$dbpicutrehide = $ru['picturehide'];
	$pico = $ru['picture'];
	
$query=mysql_query("SELECT * FROM pannel where email = '$email'");
$row=mysql_fetch_array($query);
	$bg = $row['bgcolor'];
	
		if($dbpicutrehide == 1){
		$dbimg = "<img  style=\" width:60px; height:60px; border-radius:4px;\" class=\"\"   src=\"../images/$pico\">";
		}
		else{
		$dbimg = "<img  class=\"\" style=\"height:20px; width:20px; 	background-size:auto;\"  src='../photos/no-photo.png' />";
		}

	  $tt = "<center >$dbimg<br/></center>"."<span style=\"color:$bg;\">"."Chatting/Messaging with ".$ru['firstname']." ".$ru['lastname']."</span>";

if($emailss == $email){
	
	echo $tt = "";
	$ts = "none";
	}
	else if($email != $emailss){
	
	echo $tt;
	}

	}
	
?></h1>
<div class="hh" >
<?php


include"../include/chatname.php";

?>
</div>
<div class="dd">

<?php 
include("../include/chat.php");
?>
</div>


<div class="chatformc">

<textarea placeholder="Chatting/Messaging with <?php echo $nc;?>" id="ctm" style="display:<?php  echo $ts;?>;" class="ctm" ></textarea>

<span  class="btm" style="display:<?php echo $ts;?>;" onclick = "sendd('<?php echo $email; ?>');" > Go</span>


</div>
</div>













<script src="../javascript/jquery-1.8.3.min.js"></script>
<script src="../javascript/picture_edit.js"></script>




<script type="text/javascript">
function closedd (target){
	
	popwin = window.open(target,"windowName","width=500,height=700,status=yes");
	popwin.moveTo(1,1);
	
	//window.open('t.php');
	//alert('hat');
}

</script>
<script type="text/javascript">


$(setInterval(function(){
	$('.dd').load("../include/chat.php?email=<?php echo $email; ?>");
	}, 1000));
	
$(setInterval(function(){
	$('.newmsg').load("../include/new_chat_show.php");

	}, 3000));	
	
function newc(nc){
		$.post('../include/new_chat_delete.php', {cdi:nc},function(data){
			
		
				if(data = ' '){
					$('.newmsg').load("../include/new_chat_show.php");
				$('#ctm').val('');
				$('#ctm').focus();
				$('.dd').animate({scrollTop:999999999*9999999},.5);
		}
				
			});
	//alert(nc);
	}

function newcn(nc){
		$.post('../include/new_chat_delete.php', {cdi:nc},function(data){
			
		
				if(data = ' '){
					$('.newmsg').load("../include/new_chat_show.php");
				$('#ctm').val('');
				$('#ctm').focus();
				$('.dd').animate({scrollTop:999999999*9999999},.5);
		}
				
			});
	//alert(nc);
	}
</script>
<br/>

</body>



</html>