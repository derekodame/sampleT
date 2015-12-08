<?php 
error_reporting(E_ALL^E_NOTICE);
include("connection.php");
session_start();
$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];
$occupation = $_SESSION['occupation'];
$fl=$first." ".$last;

$email=$_GET['email'];


//for colors
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$email'");
$row=mysqli_fetch_array($query);
$bg = $row['bgcolor'];

//for name
$query=mysqli_query($con,"SELECT * FROM itserve1 where email = '$email' ");
$row=mysqli_fetch_array($query);
$naa = $row['firstname']." ".$row['lastname'];



$query = mysqli_query($con,"SELECT * FROM comment	 WHERE email='$email'  ");
$num =mysqli_num_rows($query);

if($num==true){	
		
		$query = mysqli_query($con,"SELECT * FROM comment	 WHERE email='$email'  ORDER BY id DESC");

while($row=mysqli_fetch_array($query)){
	$n= $row['name'];
	$c= ucfirst($row['comment']);
	$d= $row['date'];
	$e= $row['email'];
	$dd= $row['id'];	
	$like= $row['likee'];
	
	//--count	
	$cq = mysqli_query($con,"SELECT count(*) FROM reply WHERE userid='$dd' ");
	$count = $cq->num_rows; 
	
	 if ($count==0){
		$countt = "Replies";
		}
	else if($count<=1){
			$countt = "Reply";
	}else if ($count>1){
		$countt = "Replies";
		
	}
	
// for image or not image
	$querw=mysqli_query($con,"SELECT * FROM itserve1 where email = '$e'");
	$roww=mysqli_fetch_array($querw);
	$dbpicutrehide = $roww['picturehide'];
	$pic= $roww['picture'];
	$eew = $roww['email'];
	
		if($dbpicutrehide == 1){
		$dbimg = "<img  class=\"homep\"  width=\"20px\" height=\"20px\" src=\"../images/$pic\">";
		}
		else
		$dbimg = "<img  class=\"\" style=\"height:20px; width:20px; 	background-size:auto;\"  src='../photos/no-photo.png' />";
	
		
		
	
	$dbimgg = "<span><img     width=\"25px\" height=\"25px\" src=\"../images/$pic\"></span>";
	$dbimgtip="<img   style=\"opacity:0.8;\"   width=\"200px\" height=\"200px\" src=\"../images/$pic\">";
	$downn="<div  style=\"background-color: rgba(0,0,0,.85); padding:3px; border-radius:0px 0px 4px 4px; \"   >$n<br> Email: $e <br/><em>Click to see more<em></div>";
	
	echo "<br/><br/><br/><a  data-tip-type='text'
	
	data-tip-source='$dbimgtip<br/>
	$downn '
	
	class='tooltip'
	
	href=\"otherprofile.php?email=$e\" title=\"Click to see $n's Profile\" >$dbimg <span class=\"cn\" style=\"color:$bg;\" >$n</span></a>
	";
	


// if liked
$quer=mysqli_query($con,"SELECT * FROM liketb WHERE user_id = '$idd' AND liked = '$dd' ");
	$roo=mysqli_fetch_array($quer);
	$pl = $roo['user_id'];
	
	$querO=mysqli_query($con,"SELECT * FROM itserve1 WHERE id = '$pl'");
	$rooO=mysqli_fetch_array($querO);
	
	$likee = $rooO['id'];
	if($likee==""){
		$likeee = "Like";
		}
	else if($likee>0){
			$likeee = "Liked";
		}
	
	if($emailss == $email){
		$delete = "<span class=\"deleteo\" style=\"float:right; margin-left:6px;\"  id=\"$dd\" onclick=\"deleteeo($dd);\" title=\"Delete\">X </span>";
		}


	 $ff = "$delete<br/><div class=\"cccc\"  >$c </div>
	
	 
	 
	 <span id=\"a$dd\"  onclick=\"like_add($dd);\" class=\"like\" style=\"color:$bg;\">$likeee </span>

	  <span class=\"liken\" id=\"l$dd\" style=\"background-color:$bg;\"> $like</span>--
	 <span class=\"r\" id=\"c$id\" onclick=rhide($id); style=\"color:$bg;\">$count $countt</span>	
	
	<em style=\"float:right; font-size:8px;\" >Posted on $d </em><br/>";
	

	echo $ff;
	
//people who liked
	echo "<span style=\"font-size:8.5px; color:grey;\">People who liked :</span>";
	$i=mysqli_query($con,"SELECT * FROM itserve1");
	while($ii=mysqli_fetch_array($i)){
		$l = $ii['id'];
	$quere=mysqli_query($con,"SELECT * FROM liketb WHERE user_id = '$l' AND liked = '$dd'  ");
	$ee=mysqli_fetch_array($quere);
		$ci= $ee['user_id'];
		
		$ie=mysqli_query($con,"SELECT * FROM itserve1 WHERE id = '$ci'");
		$eei=mysqli_fetch_array($ie);
		$people_liken = $eei['firstname']." ".$eei['lastname'];
		$people_like = $eei['firstname']." ".$eei['lastname']." ";
		$people_email = $eei['email'];
		
		
		
		$quer=mysqli_query($con,"SELECT * FROM pannel where email = '$people_email'");
$row=mysqli_fetch_array($quer);
	$people_emaile= $row['bgcolor'];
		echo "<span id=\"p$id\" class=\"people\" ><a href=\"otherprofile.php?email=$people_email \" title=\"Click to see $people_liken's Profile\">
		
		<span class=\"peoplee\" style=\"color:$people_emaile;\"> $people_like  </span></span></a>";
		
		
		}
		
//relpy---------------------------
	$q = mysqli_query($con,"SELECT * FROM reply WHERE userid='$dd' ");

	while($r=mysqli_fetch_array($q)){
	$reply = $r['replycomment'];
	$replyn = $r['name'];
	$replye = $r['email'];	
	$replyt = $r['time'];
	
//time ---------	
	$time=time();
	$dif = $time - $replyt;
	
	switch(1)
	{
	case($dif <60 ):
	$count_time =round(floor($dif));
	
	if($count_time==0){
	$count_time="";
	$suffix= "A moment";
	}	
	else if($count_time==1){
	$count_time="";
	$suffix= "A second";
	}
		else
	$suffix = "Seconds";
	break;	
		
	case($dif >60 && $dif < 3600):
	$count_time =floor($dif/60);
	
	 if($count_time==1){
		  $count_time="";
		$suffix ="A Minute";
	 }else
	$suffix = "Minutes";
	break;
	
	case($dif >3600 && $dif < 86400):
	$count_time =floor($dif/3600);
	 if($count_time==1){
		  $count_time="";
		$suffix ="A Hour";
	 }else
	$suffix = "Hours";
	break;
	
	case($dif >86400 && $dif < 2629743):
	$count_time =floor($dif/86400);
	
	 if($count_time==1){
		  $count_time="";
		$suffix ="A Day";
	 }else
	$suffix = "Days";
	break;
	
	case($dif >2629743 && $dif < 31556926):
	$count_time =floor($dif/2629743);
	
	 if($count_time==1){
		 $count_time="";
		$suffix ="A Month";
	 }
	else
	$suffix = "Months";
	break;
	
	case($dif >31556926):
	$count_time =floor($dif/31556926);
	
	 if($count_time==1){
		  $count_time="";
		$suffix ="A Year";
	 }
	else
	$suffix = "Years";
	break;			
	}
	
//color-----------
	$quer=mysqli_query($con,"SELECT * FROM pannel where email = '$replye'");
$row=mysqli_fetch_array($quer);
	$re = $row['bgcolor'];
	
// TITLE
	
$quew=mysqli_query($con,"SELECT * FROM itserve1 where email = '$replye'");
	$rww=mysqli_fetch_array($quew);
	$dbpicutrehide = $rww['picturehide'];
	$pic = $rww['picture'];
	$eew = $rww['email'];
		if($dbpicutrehide == 1){
		$dbimggg = "<img  class=\"homep\"  width=\"20px\" height=\"20px\" src=\"../images/$pic\">";
		}
		else
		$dbimggg = "<img  class=\"\" style=\"height:20px; width:20px; 	background-size:auto;\"  src='../photos/no-photo.png' />";
	

		
	echo "<div style=\"border-top-color:$re; margin-top:7px;\" class=\"plain\"  id=\"ss$id\"><div class=\"rg\">
	
	<a href=\"otherprofile.php?email=$replye\" title=\"Click to see $replyn's Profile\">
	<span  style=\"color:rgba(0, 153, 204, 0.8); margin-left: 40px;\">
	$dbimggg 
	<span style=\"color:$re;\">$replyn</span> </span>
	
	</a>
	 <span  style=\"color:rgba(0, 153, 204, 0.8); float:right; margin-right:10px; margin-bottom:10px;font-size:10px;\">$count_time $suffix ago</span>
	 <br/>
	 <div class=\"reback\">$reply</div>
	<br/>
	
	
	</div></div>";
	}
	
echo 	"<div id=\"f$dd\" class=\"c\" >
	<form action=\"#\" method=\"post\" name=\"reply\">
	<span class=\"replyimg\"></span>
	<textarea id=\"r$dd\"  class=\"reply\" name=\"reply\"   onmouseout=\"tfb($dd);\" onmouseover=\"tff($dd);\"   onfocus=\"tf($dd);\" title=\"Reply,$n\" placeholder=\"Reply,$n\"></textarea>
	<span id=\"b$dd\" class=\"replybutton\" onclick=\"replysendd($dd);\">Send</span>
	
	</div>
	</form>";
	
//---------end showreplu

	echo "<div class=\"down\" ></div>";


	}
}else echo "<br/><br/><span class=\"notip\">Oops,No Tips yet...</span>";
	
?>
<script type="text/javascript">

function replaceString(sourceString, patternToFind, strReplacement) {
	var result = sourceString.replace(patternToFind,strReplacement);
	document.getElementById('otherdetail4d').innerHTML = result;
}

var reg = /fuck/gi
var regg = /shit/gi;
var smile = /:\)/gi;

function doReplacement() {
replaceString(document.getElementById('otherdetail4d').innerHTML,reg,"<span style='color:red;' >"+" <em >' <span style='text-decoration:line-through;'> (f**k)</span> '</em> "+"</span>");
replaceString(document.getElementById('otherdetail4d').innerHTML,regg,"<span style='color:red;'>"+" <em>' <span style='text-decoration:line-through;'>(sh*t)</span> '</em> "+"</span>");
replaceString(document.getElementById('otherdetail4d').innerHTML,smile,"<span style='display:inline-block;'>"+" <img src='../photos/smilee.png' width='15px' height='15px' /> "+"</span>");

}

doReplacement();
</script>
<script src="../javascript/jquery-1.8.3.min.js"></script>
<script src="../javascript/picture_edit.js"></script>