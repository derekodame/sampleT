<?php 
error_reporting(E_ALL^E_NOTICE);
include"connection.php";


//include"like.php";
$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];
$occupation = $_SESSION['occupation'];
$fl=$first." ".$last;

$email = $_SESSION['email'];
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
$row=mysqli_fetch_array($query);
	$bg = $row['bgcolor'];




$query = mysqli_query($con,"SELECT * FROM itserve1 
					JOIN comment ON itserve1.email = comment.email   ORDER BY comment.id DESC");


while($row=mysqli_fetch_array($query)){
	
	
	$n= ucfirst($row['name']);
	$c= ucfirst($row['comment']);
	$id= $row['id'];
	$user_id =$row['user_id'];
	$d= $row['date'];
	$e= $row['email'];
	$like= $row['likee'];
	$p= $row['picture'];
	
	
	
		
		
	
	$quer=mysqli_query($con,"SELECT * FROM pannel where email = '$e'");
$row=mysqli_fetch_array($quer);
	$bgg = $row['bgcolor'];
	
		$cq = mysqli_query($con,"SELECT * FROM reply WHERE userid='$id' ");
	//$count = mysql_result($cq,0);
	$count =$cq->num_rows;
	
	 if ($count==0){
		$countt = "Replies";
		}
	else if($count<=1){
			$countt = "Reply";
	}else if ($count>1){
		$countt = "Replies";
		
	}


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
//	$dbimg = "<span><img   class=\"homep\"   width=\"25px\" height=\"25px\" src=./profileshowpicture.php?email=$e></span>";
	$dbimgtip="<img   style=\"opacity:0.8;\"   width=\"200px\" height=\"200px\" src=\"../images/$pic\">";
	$downn="<div  style=\"background-color: rgba(0,0,0,.85); padding:3px; border-radius:0px 0px 4px 4px; \"   >$n<br> Email: $e <br/><em>Click to see more<em></div>";
	
	echo "<a  data-tip-type='text'
	
	data-tip-source='$dbimgtip<br/>
	$downn '
	
	class='tooltip'
	
	href=\"otherprofile.php?email=$e\" title=\"Click to see $n's Profile\" >$dbimg<span class=\"cn\" style=\"color:$bgg;\" >$n</span></a>
	";
	
	
	//$ct = preg_replace("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i","<a href=\"http://$c\" title=\"$c\" target=\"new\">$c</a>"," $c ");
	
	
	$quer=mysqli_query($con,"SELECT * FROM liketb WHERE user_id = '$idd' AND liked = '$id' ");
	$roo=mysqli_fetch_array($quer);
	$pl = $roo['user_id'];
	
	$querO=mysqli_query($con,"SELECT * FROM itserve1 WHERE id = '$pl'");
	$rooO=mysqli_fetch_array($querO);
	
	$likee = $rooO['id'];
	if($likee<=0){
		$likeee = "Like";
		
		}
	if($likee>0){
			$likeee = "Liked";
		}


//---delete


	
	 $ff = "<div  class=\"cccc\" >$c</div>	 
	 
		
	
	 
	 <span id=\"a$id\" \" onmouseover=\"liked($id);\" onclick=\"like_add($id);\" class=\"like\" style=\"color:$bgg;\"> $likeee </span>
	 	 
	
	  <span class=\"liken\" id=\"l$id\" style=\"background-color:$bgg;\">  
	  $like 
	 </span>--
	 <span class=\"r\" id=\"c$id\" onclick=rhide($id); style=\"color:$bgg;\">$count $countt </span>
	$delete
	<em style=\"float:right; font-size:8px;\">Posted on $d  </em>
	
	
	";
	

	echo $ff."<br/>";
	
	
	//people who liked
	echo "<span style=\"font-size:8.5px; color:grey;\">People who liked :</span>";
	$i=mysqli_query($con,"SELECT * FROM itserve1");
	while($ii=mysqli_fetch_array($i)){
		$l = $ii['id'];
	$quere=mysqli_query($con,"SELECT * FROM liketb WHERE user_id = '$l' AND liked = '$id'  ");
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
		
		<span class=\"peoplee\" style=\"color:$people_emaile;\"> $people_like  </span></span></a>
		";
		
		
		}
		//more---->
		
	//relpy---------------------------limit 1 offset 0
	$q = mysqli_query($con,"SELECT * FROM reply WHERE userid='$id'  ");

	while($r=mysqli_fetch_array($q)){
	$reply = $r['replycomment'];
	$replyn = $r['name'];
	$replye = $r['email'];	
	$replyt = $r['time'];
	$replyid = $r['id'];


///time ---------	
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
	
	
    $quew=mysqli_query($con,"SELECT * FROM itserve1 where email = '$replye'");
	$rww=mysqli_fetch_array($quew);
	$dbpicutrehide = $rww['picturehide'];
	$picw= $rww['picture'];
	
	$eew = $rww['email'];
		if($dbpicutrehide == 1){
		$dbimggg = "<img  class=\"homep\"  width=\"20px\" height=\"20px\" src=\"../images/$picw\">";
		}
		else
		$dbimggg = "<img  class=\"\" style=\"height:20px; width:20px; 	background-size:auto;\"  src='../photos/no-photo.png' />";
	

	
	$dbimss = "<span><img     width=\"25px\" height=\"25px\" src=\"../images/$picw\"></span>";
	//$dbimggg = "<span><img     width=\"25px\" height=\"25px\" src=./profileshowpicture.php?email=$replye></span>";
	$dbimgggtip = "<span><img     width=\"200px\" height=\"200px\" src=\"../images/$picw\"></span>";
	$downntip="<div  style=\"background-color: rgba(0,0,0,.85); padding:3px; border-radius:0px 0px 4px 4px; \"   >$replyn<br> Email: $replye <br/><em>Click to see more<em></div>";
	
	
	echo "<div style=\"border-top-color:$re;\" class=\"plain\" id=\"ss$replyid\" onmouseout=\"pearout($replyid);\"  onmouseover=\"pear($replyid);\"><div class=\"rg\">
	<a data-tip-type='text'
	
	data-tip-source='$dbimgggtip<br/>
	$downntip '
	
	class='tooltip' 
	
	href=\"otherprofile.php?email=$replye\" title=\"Click to see $replyn's Profile\">
	<span  style=\"color:rgba(0, 153, 204, 0.8); margin-left: 40px;\"><span class=\"homep\" >$dbimggg</span> <span style=\"color:$re;\">$replyn</span> </span>
	</a>
	<span  style=\"color:rgba(0, 153, 204, 0.8); float:right; margin-right:10px;  font-size:10px;\">$count_time $suffix ago</span>
	
	
	 <div class=\"reback\">$reply </div>
	 
	 <br/>
	
	
	</div></div>";
	}
	
	$p= "<img  class=\"homep\"  width=\"20px\" height=\"20px\" src=\"../images/$p\">";
	
	echo 	"<div id=\"f$id\" class=\"c\" >
	<form action=\"#\" method=\"post\" name=\"reply\">
	<span class=\"replyimg\"></span>
	<textarea style=\"\" id=\"r$id\"  class=\"reply\" name=\"reply\"  onclick=\"ffff($id);\"   onmouseout=\"tfb($id);\" onmouseover=\"tff($id);\"   onfocus=\"tf($id);\" title=\"Reply,$n\" placeholder=\"Reply,$n\"></textarea>
	<span id=\"b$id\" class=\"replybutton\" onclick=\"replysend($id,$id,'$e');\">Send</span>
	
	</div>
	</form>";
	
	//---------end showreplu
	echo "<div class=\"down\"  ></div><br/>";
	}

?>
<?php
echo "<br/><br/>";

?>

<script type="text/javascript">
function pear(ssid){
$('#ss' + ssid).css({'border-left-color':"rgba(102,102,102,0.8)","border-left-width": "5px","border-left-style":"solid"}).animate({opacity:1},650);

	}

function replaceString(sourceString, patternToFind, strReplacement) {
	var result = sourceString.replace(patternToFind,strReplacement);
	document.getElementById('false').innerHTML = result;
}

var reg = /fuck/gi
var regg = /shit/gi;
var smile = /:\)/gi;

function doReplacement() {
replaceString(document.getElementById('false').innerHTML,reg,"<span style='color:red;' >"+" <em >' <span style='text-decoration:line-through;' title='Fuck; not appropriate word'> (f**k)</span> '</em> "+"</span>");
replaceString(document.getElementById('false').innerHTML,regg,"<span style='color:red;'>"+" <em>' <span style='text-decoration:line-through;'>(sh*t)</span> '</em> "+"</span>");
replaceString(document.getElementById('false').innerHTML,smile,"<span style='display:inline-block;'>"+" <img src='../photos/smilee.png' width='15px' height='15px' /> "+"</span>");
}

doReplacement();



function ffff(idd){
	}

	

</script>

	
	
	<?php 
$cq = mysqli_query($con,"SELECT * FROM comment ");
	//$countt = mysql_result($cq,0);
	$countt =$cq->num_rows;
$cqr = mysqli_query("SELECT * FROM reply ");
	$countr =$cq->num_rows;
//	$countr = mysql_result($cqr,0);
	if($countt >= 5 || ($countt >= 4&& $countr >= 2)){
		$cemage ="<img src=\"../photos/top_arrow-3.gif\"/>";
		}

?>
<a href="#top" style="float:right;"><?php echo $cemage; ?></a>
<script src="../javascript/jquery-1.8.3.min.js"></script>
<script src="../javascript/picture_edit.js"></script>

 