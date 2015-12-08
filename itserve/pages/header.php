<?php
include("../include/ClassDatabase.php");

session_start();
$emailss = $_SESSION['email'];
$email=$_GET['email'];


?>
<?php 

mysqli_query($con,"UPDATE itserve1 SET online=1 WHERE email ='$emailss' ");



?>
<!doctype html >
 
<link href="<?php  
echo "../include/pictureshow.php?email= $emailss";




if(isset($email)){
echo "./profileshowpicture.php?email=$email";
}else{
echo "../include/pictureshow.php?email= $emailss";
}


?>" rel="shortcut icon">


<html>

<head>
<meta  charset="utf-8">

<title>
<?php 
$searchh = $_GET['search'];
if($searchh){
	$sss= " : Searching... $searchh";
		
	}

	
if($email){	
	echo $db->names("itserve1",$email);
	}	
	else 
	
	echo " IT SERVE $sss ";	
	
		
		?>
</title>

<link href="../css/itserve.css" rel="stylesheet" type="text/css" />


 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />

 <script>
 $(function() {
$( document ).tooltip();
});
</script>
</head>
<body   style="background-color:




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
<?php 
if(isset($email)){
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$email'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
}
if(!(isset($email))){
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
}

?>">

<a href="../include/logout.php" id="out" ><span style="float:left; color:#fff;">LogOut</span></a> 

<a href="homee.php" title="Home"><span class="home">Home</span></a>
<a href="edit.php" title="Edit Account"><span class="editt">Edit Account</span></a>
<a href="otherprofile.php?email=<?php echo $emailss?>" title="<?php echo "Profile";?>">

<span class="profile" >
<?php

 
 echo $db->names("itserve1",$emailss);?>
 </span>
 <span class="profileimg" ><?php 
 $qu =mysqli_query($con,"SELECT * FROM itserve1 WHERE email='$emailss'");
while($ro=mysqli_fetch_array($qu)){
	$dbpicutrehide = $ro['picturehide'];
	 
	 
	 if($dbpicutrehide == 1 ){
 
 $dbimg = "<img  style=\"\" width=\"20\"  height=\"20\" src=../include/pictureshow.php?email=$emailss>";
	echo $dbimg;
	 }
	 else
	
	echo "<img style=\"height:20px; width:20px; 	background-size:auto;\"  src='../photos/no-photo.jpg' />";
}
?></span>
 </a>

<form action="search.php?search=<?php urlencode($comment); ?>" method="get"  id="form21">
<input class="searchtop" type="search" title="Search through... "  required name="search"  placeholder="Search through..."  style="background-color:
<?php 
if(isset($email)){
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$email'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
}
if(!(isset($email))){
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
}

?>"/ >
</form>
</div>



<script type="text/javascript">

</script>
