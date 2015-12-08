<?php 
error_reporting(E_ALL^E_NOTICE);
include"connection.php";
include"like.php";




$query = mysqli_query($con,"SELECT * FROM comment ORDER BY id DESC");
while($row=mysqli_fetch_array($query)){
	$n= ucfirst($row['name']);
	$c= ucfirst($row['comment']);
	//$m = preg_match_all("[htttp://www.\w+.com]",$c);
//$ct = preg_replace("[htttp://www.\w+.com]","<h1>ct</h1>",$c);
	
	//$ct = preg_replace("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i","$c",$c);
	//if($ct){
	//	echo "<a href=\"$ct\">$ct</a>";
	//	}
	
	$id= $row['id'];
	$d= $row['date'];
	$e= $row['email'];
	$like= $row['likee'];
	
	$dbimg = "<span><img   class=\"homep\"   width=\"25px\" height=\"25px\" src=./profileshowpicture.php?email=$e></span>";
	$dbimgtip="<img   style=\"opacity:0.8;\"   width=\"200px\" height=\"200px\" src=./profileshowpicture.php?email=$e>";
	$downn="<div  style=\"background-color: rgba(0,0,0,.85); padding:3px; border-radius:0px 0px 4px 4px; \"   >$n<br> Email: $e <br/><em>Click to see more<em></div>";
	
	echo "
	 
	 
	 
	 <span class=\"liken\" id=\"l$id\"> $like</span>
	 <span onclick=\"like_add($id);\" class=\"like\">
	 
	 Likes </span>
	 
	 
	
	
	
	
	";

	
	
	}
	
?>
<?php 

?>
 