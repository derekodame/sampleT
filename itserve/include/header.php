<?php
include("ClassDatabase.php");
include("../include/pictureshow.php");
session_start();
$emailss = $_SESSION['email'];
$email=$_GET['email'];


?>
<?php 
if($email){
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$email'");
$row=mysqli_fetch_array($query);
	$big = $row['bgcolor'];
}else{
	$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
$row=mysqli_fetch_array($query);
	$big = $row['bgcolor'];
	}
	
	?>
<?php 

mysqli_query($con,"UPDATE itserve1 SET online=1 WHERE email ='$emailss' ");



?>
<!doctype html >
 
<link href="<?php  //ico
$qu =mysqli_query($con,"SELECT * FROM itserve1 WHERE email='$emailss'");
$ro=mysqli_fetch_array($qu);

	$ppice = $ro['picture'];

$qu =mysqli_query($con,"SELECT * FROM itserve1 WHERE email='$email'");
$ro=mysqli_fetch_array($qu);
	$dbpicutrehide = $ro['picturehide'];
	$ppic = $ro['picture'];



 if($dbpicutrehide == 1 ){
echo "../images/$ppic";
	}
	
	else if (($dbpicutrehide == 0) && $email ){
	
	echo "../photos/no-photo.png";
	}
	else if ($emailss ){
	
	echo "../photos/iconi.png";
	}




?>" rel="shortcut icon">


<html >

<head>
<style type="text/css"   >
.bli{
	
	}
</style>
<meta  charset="utf-8">
<meta http-equiv="refresh" content="400" >
<title>
<?php //title ...
$searchh = $_GET['search'];
if($searchh){
	$sss= " : Searching... $searchh";
	}	
else if($email){	
	echo $db->names("itserve1",$email);
	}	
	else echo " IT SERVE $sss ";	
?>
</title>

<link href="../css/itserve.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />


</head>
<body 

onunload="<?php //echo "html($emailss)";?>"   style="background-color:




<?php 
/*$query=mysql_query("SELECT * FROM pannel where email = 'derek.odame@hotmail.com'");
while($row=mysql_fetch_array($query)){
	$c = $row['bgcolor'];
	$ss = $row['font'];
	echo $c;
	
	}
?>; font-size:<?php 
$query=mysql_query("SELECT * FROM pannel where email = 'derek.odame@hotmail.com'");
while($row=mysql_fetch_array($query)){
	$c = $row['bgcolor'];
	$ss = $row['font'];
	echo $ss;
	
	}
*/?>">


<div class="body" id="body"  >

<div class="down_top"   style="background-color:
<?php //color
if(isset($email)){
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$email'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bge;
}
}
if(!(isset($email))){
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bgs;
}
}

?>">

<a title="Press Esc to LogOut" href="../include/logout.php" id="out" ><span style="float:left; color:#333;">LogOut</span></a> 

<span  style=" font-size:10px; padding-left:15px; cursor:; float:left; color:#333;"   >
<span style="cursor:pointer; " onClick="closedd('t.php?email=<?php echo $emailss;?>');">
<?php // messages
$qneq = mysqli_query($con,"SELECT * FROM chat_new WHERE other_email = '$emailss'");
 $qneq->num_rows;

if($countq  >1){
	$msg = "<span class=\"bli\"> Msgs </span>";
	}
else if($countq==1){
		$msg= " <span class=\"bli\">Msg </span> ";
		}
else if($countq==0){
		$msg= " ";
		$countq = "";
		}
echo "$countq $msg";

?>
</span>
<span class="new_com_show">

<?php //comment count
$new ="new_close";
$qneq = mysqli_query($con,"SELECT * FROM comment_new where (other_email='$emailss' and email !='$emailss')");
//$countq = mysql_result($qneq,0);
$countq= $qneq->num_rows;


if($countq  >1){
	$cr = "<span class=\"bli\">  new comments </span>";
	$dot =".";
	}
else if($countq==1){
		$cr= " <span class=\"bli\">  new comment </span> ";
		$dot =".";
		}
else if($countq==0){
		$cr= " ";
		$countq = "";
		
		}
echo " $dot $countq $cr";

?>
<?php // select from comment new
$querys=mysqli_query($con,"SELECT * FROM comment where email = '$emailss'");
$rows=mysqli_fetch_array($querys);
$bgs = $rows['email'];
$bii = $rows['id'];

$query=mysqli_query($con,"SELECT * FROM comment_new where email != '$emailss'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['email'];
	
	//echo $bg."<br/>";
}
?>

 </span>
 <em ><span class="<?php echo $new;?>" style="color:rgba(248,132,82,1); cursor:pointer;">  X(close) </span></em>
 <span   style="background:<?php echo $big; ?>"class="com_new">

<?php //comment show
$que = mysqli_query($con,"select * from comment_new where other_email='$emailss' and email !='$emailss' ORDER BY id DESC");

while($ros=mysqli_fetch_array($que)){
	$qc = $ros['comment_id'];
	$em = $ros['email'];
	$emo = $ros['other_email'];
	$num = $ros['number'];
	
	$quec = mysqli_query($con,"select * from reply where userid='$qc' and email='$em' ORDER BY id DESC");
	$rosc=mysqli_fetch_array($quec);
	
	$qcc = $rosc['replycomment'];
	$qce = $rosc['name'];
		
	$quecc = mysqli_query($con,"select * from comment where id='$qc' ORDER BY id DESC");
	$roscc=mysqli_fetch_array($quecc);
	$qcec = $roscc['comment'];	
	$len = ucfirst(substr($qcec, 0, 45));
	
	//reply
	if($num >1){
		$reply = "replies";
		}else if($num =1){
			$reply = "reply";
			}
 //color
 $query=mysqli_query($con,"SELECT * FROM pannel where email = '$em'");
$row=mysqli_fetch_array($query);
	$bgne = $row['bgcolor'];
	
	
	
	echo "<div class='com_new_show' style=\"\"><span style=\"color:$bgne\">$qce</span> <em>has $num $reply on</em> $len..."."<br/></div>";
	
	}

?>
<?php 
/*$que = mysql_query("select * from comment_new where email !='$emailss'  ");

while($ros=mysql_fetch_array($que)){
	$qc = $ros['comment_id'];
	$em = $ros['email'];
	$emo = $ros['other_email'];
	$num = $ros['number'];
	
	$quec = mysql_query("select * from reply where userid='$qc' and email='$emo'");
	$rosc=mysql_fetch_array($quec);
	
	$qcc = $rosc['replycomment'];
	$qce = $rosc['name'];
		
	$quecc = mysql_query("select * from comment where id='$qc'");
	$roscc=mysql_fetch_array($quecc);
	$qcec = $roscc['comment'];	
	$len = ucfirst(substr($qcec, 0, 20));

	echo "<div class='com_new_show' style=\"\"><em>$qce has $num reply</em>  on $len..."."<br/></div>";
	
	}
*/
?>
</span>
</span>

<a href="homee.php" title="Home"><span class="home">Home</span></a>
<a href="edit.php" title="Edit Account"><span class="editt">Edit Account</span></a>
<a href="otherprofile.php?email=<?php echo $emailss?>" title="<?php echo "Your Status";?>">

<span class="profile" >
<?php

 
 echo $db->names("itserve1",$emailss);?>
 </span>
 <span class="profileimg" ><?php 
 $qu =mysqli_query($con,"SELECT * FROM itserve1 WHERE email='$emailss'");
while($ro=mysqli_fetch_array($qu)){
	$dbpicutrehide = $ro['picturehide'];
	 
	 
	 if($dbpicutrehide == 1 ){
 
 $dbimg = "<img  style=\"\" width=\"20\"  height=\"20\" src=\"../images/$picture\"";
	echo $dbimg;
	 }
	 else
	
	echo "<img style=\"height:20px; width:20px; 	background-size:auto;\"  src='../photos/no-photop.png' />";
}
?></span>
 </a>
 <span class="sh" style="float:right; margin-right:100px;"><img src="../photos/iconi.png"  width="20px" height="20px"/></span>


<input class="searchtop"   autocomplete="off" value="<?php //echo ucfirst(trim($_GET['search']));?>" type="search" title="Search through... "  required name="sv"  placeholder="Search through..."  style="background-color:
<?php 
if(isset($email)){
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$email'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bges;
}
}
if(!(isset($email))){
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bgs;
}
}

?>"/ >

<div class="search_downn" id="search_downn">
<div class="search_down"></div>
<div class="search_left_c"></div>
</div>
<div class="xxs">x</div>
</div>
