<?php 
error_reporting(E_ALL^E_NOTICE);
include"../include/connection.php";





	



$query = mysqli_query($con,"SELECT * FROM comment ORDER BY id DESC");


while($row=mysqli_fetch_array($query)){
	
	
	$n= ucfirst($row['name']);
	$c= ucfirst($row['comment']);
	$id= $row['id'];
	$user_id =$row['user_id'];
	$d= $row['date'];
	$e= $row['email'];
	$like= $row['likee'];
	
	
	
	
		
		
	
	$quer=mysqli_query($con,"SELECT * FROM pannel where email = '$e'");
$row=mysqli_fetch_array($quer);
	$bgg = $row['bgcolor'];
	
		$cq = mysqli_query($con,"SELECT * FROM reply WHERE userid='$id' ");
	$count =$cq->num_rows;
	
	
	
	
	
		 if ($count==0){
		$countt = "Replies";
		}
	else if($count<=1){
			$countt = "Reply";
	}else if ($count>1){
		$countt = "Replies";
		
	}
	
$qw=mysqli_query($con,"SELECT * FROM itserve1 WHERE email = '$e'");
	$w=mysqli_fetch_array($qw);
	$dbpicutrehide = $w['picturehide'];
	$picutre = $w['picture'];
	$ew = $w['email'];
		if($dbpicutrehide == 1){
		$dbimggg = "<img  class=\"homep\"  width=\"20px\" height=\"20px\" src=\"../images/$picutre\">";
		}
		else
		$dbimggg = "<img  class=\"\" style=\"height:20px; width:20px; 	background-size:auto;\"  src='../photos/no-photo.png' />";
	
		

	//$dbimggg = "<span><img   class=\"homep\"   width=\"25px\" height=\"25px\" src=../include/otherpicture.php?emails=$e></span>";
	
	$downn="<div  style=\"background-color: rgba(0,0,0,.85); padding:3px; border-radius:0px 0px 4px 4px; \"   >$n<br> Email: $e <br/><em>Click to see more<em></div>";
	
	echo " <a  
	

	
	
	class='tooltip'
	
	href=\"regloginphp.php?email=$ew\" title=\"You will need to login to see $n's Profile\" >$dbimggg  <span class=\"cn\" style=\"color:$bgg;\" >$n</span></a>
	";
	
	
	 $ff = "<div  class=\"cccc\" >$c </div>	 
	 
	 
	
	 
	<a href=\"regloginphp.php?email=$ew\" title=\"You will need to login to like $n's Tips\"> <span id=\"liked\" onclick=\"like_add($id);\" class=\"like\" style=\"color:$bgg;\"> Like </span></a>
	 
	
	  <span class=\"liken\" id=\"l$id\" style=\"background-color:$bgg;\">  
	  $like 
	 </span> --
	 <span class=\"r\" id=\"c$id\" onclick=rhide($id); style=\"color:$bgg;\">$count $countt</span>
	
	<em style=\"float:right; font-size:8px;\">Posted on $d </em>
	";
	

	echo $ff."<br/>";
	
		
	//relpy---------------------------
	$q = mysqli_query($con,"SELECT * FROM reply WHERE userid='$id' ");

	while($r=mysqli_fetch_array($q)){
	$reply = $r['replycomment'];
	$replyn = $r['name'];
	$replye = $r['email'];	
	$replyt = $r['time'];
	
	
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

	$queew=mysqli_query($con,"SELECT * FROM itserve1 where email = '$replye'");
	$rwwe=mysqli_fetch_array($queew);
	$dbpicutrehide = $rwwe['picturehide'];
	$picture = $rwwe['picture'];
	$eew = $rwwe['email'];
		if($dbpicutrehide == 1){
		$dbimgggg = "<img  class=\"homep\"  width=\"20px\" height=\"20px\" src=\"../images/$picture\">";
		}
		else
		$dbimgggg = "<img  class=\"\" style=\"height:20px; width:20px; 	background-size:auto;\"  src='../photos/no-photo.png' />";
	

	
	
	//$dbimgggg = "<span><img class=\"homep\"     width=\"25px\" height=\"25px\" src=../include/otherpicture.php?emails=$replye></span>";
	
	
	
	echo "<div id=\"ss$id\"><div class=\"rg\">
	
	<a href=\"regloginphp.php?email=$replye\" title=\"You will need to login to see $replyn's Profile\">
	<span  style=\"color:rgba(0, 153, 204, 0.8); margin-left: 40px;\"> <span style=\"color:$re;\">$dbimgggg $replyn</span> </span>
	</a>
	<span  style=\"color:rgba(0, 153, 204, 0.8); float:right; margin-right:10px; margin-bottom:10px; font-size:10px;\">$count_time $suffix ago</span>
	 <br/>
	 
	 <div class=\"rebacko\">$reply</div>
	 
	 <br/>
	
	
	</div></div>";
	}
	
	echo 	"<div id=\"f$dd\" class=\"c\" >
	<form action=\"#\" method=\"post\" name=\"reply\">
	<span class=\"replyimg\"></span>
	
	<a href=\"regloginphp.php?email=$ew\"><textarea id=\"r$id\" disdabled=\"disabled\" class=\"reply\"  onfocus = iii($id);  title=\"Login/Register to reply,$n\" placeholder=\"Login/Register to reply,$n\"></textarea></a>
	
	
	</div>
	</form>";
	
	//---------end showreplu
	echo "<div class=\"down\" ></div><br/>";
	}

?>