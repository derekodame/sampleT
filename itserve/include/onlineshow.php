<?php 
error_reporting(0);
include"connection.php";

session_start();
$emailss = $_SESSION['email'];

$query=mysqli_query($con,"SELECT * FROM itserve1 
					JOIN pannel ON itserve1.email = pannel.email 
					WHERE online =1 AND itserve1.email !='$emailss'");
	while($rowo= mysqli_fetch_array($query)){

	$em = $rowo['email'];
	$nn = ucfirst($rowo['firstname']);
	$pic = $rowo['picture'];
	$dbpicutrehide = $rowo['picturehide'];
	$full_name = ucfirst($rowo['firstname'])." ".ucfirst($rowo['lastname']);
	$bg=$rowo['bgcolor'];
	
// picture
		if($dbpicutrehide == 1){
		$dbimg = "<img  class=\"dbimg\"  width=\"20px\" height=\"20px\" src=\"../images/$pic\">";
		}
		else
		$dbimg = "<img  class=\"\" style=\"height:20px; width:20px; 	background-size:auto;\"  src='../photos/no-photo.png' />";
	
	$divonline = "<div class=\"online1\">
	<a href=\"../pages/otherprofile.php?email=$em\"><div class=\"nn\" style=\"color:$bg; cursor:pointer;\" > $nn </div></a>  <span  style=\"cursor:pointer; color:$bg;\" onclick=\"closedd('t.php?email=$em')\" >Msg -> </span> $dbimg</div>
	<div class=\"downmsg\"></div>";
	
	echo $divonline;
	
	}

?>
