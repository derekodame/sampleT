<?php 	include("../include/header.php");
session_start();
$emailss = $_SESSION['email'];
$email=$_GET['email'];	

	
?>




</a>

<div class="otherwrapper" style="background-color:
<?php 
$email=$_GET['email'];
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$email'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
?>">

<div class="otherpicture">
<?php 
$qu =mysqli_query($con,"SELECT * FROM itserve1 WHERE email='$email'");
while($ro=mysqli_fetch_array($qu)){
	$dbpicutrehide = $ro['picturehide'];
	 $ppic = $ro['picture'];
	 
	 if($dbpicutrehide == 1 ){
$email=$_GET['email'];

$dbimg = "<img  class=\"mobile\"
	
	 src=\"../images/$ppic\">";
	
	echo $dbimg;
	
	}
	
	else
	
	echo "<img  class=\"mobile\" style=\"height:200px; width:200px; 	background-size:auto;\"  src='../photos/no-photo.png' />";


}




?>
</div>

<div class="otherdetail1">

<ul>
<li >Name</li>
<li >Email</li>
<li >Occupation </li>
<li >Sex</li>
<li >Registed On </li>
</ul>
<p>&nbsp;</p>

</div>
<div class="otherdetail2">

<ul>
<li ><?php echo $db->names("itserve1",$email); ?></li>
<li ><?php echo $db->email("itserve1",$email); ?></li>
<li > <?php echo $db->occup("itserve1",$email); ?></li>
<li > <?php echo $db->sex("itserve1",$email); ?></li>
<li > <?php echo $db->reg("itserve1",$email); ?></li>
</ul>

</div>
  
    <div class="remove"><span id="" class="msgleft">
	<?php
	 if(!($email==$emailss)){
		echo "<span onclick=\"closedd('t.php?email=$email');\">Message</span>";
		}
		?></span> </div>
   
</div>
<div id="hhh" class="otherdetail3" style="background-color:white">

<div class="otherdetail4">
<?php 
if($email == $emailss){
	$tt = "block";
	}
	else {
	$tt = "none";
	$query = mysqli_query($con,"SELECT * FROM comment	 WHERE email='$email'");
$num =mysqli_num_rows($query);
if($num==1){
	echo  $db->names("itserve1",$email)."'s".", Tips";
	}
	
}

?>



<textarea  style="display:<?php echo $tt;?>;" class="textarea"  id="ptextarea" title="<?php echo "Give your Tip,$first"; ?>"  required name="comment"   placeholder="<?php  echo "Let's Tip, $first"; ?>"  ></textarea>

<br/>
<br/><br/>

<div class="textdown" style=" ">

<span style="display:<?php echo $tt;?>; " class="" id="pdone"  onclick="pcmtt('<?php echo $email; ?>');" >Done</span>
</div>
<br/>
</div>
<div  id="otherdetail4d" class="otherdetail4">



<?php 

//$db->showprofile($email);
include("../include/profileeephp.php");

?>



</div>
<?php 
$cq = mysqli_query($con,"SELECT count(*) FROM comment WHERE email ='$email' ");
	$countt = $cq->num_rows;
$cqr = mysqli_query($con,"SELECT count(*) FROM reply ");
	$countr = $cq->num_rows;
	if($countt >= 5 || ($countt >= 4 && $countr >= 2)){
		$cemage ="<img src=\"../photos/top_arrow-3.gif\"/>";
		}

?>
<a href="#top" style="float:right;"><?php echo $cemage; ?></a>
</div>

<div class="message" style="border-left: 1px solid 
<?php 
$email=$_GET['email'];
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$email'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}?>;border-right: 1px solid 
<?php 
$email=$_GET['email'];
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$email'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}?>;"
>
<?php 

 if($emailss==$email){
include "../include/new_chat_show.php";
}
 ?>

  
  <div class="box2" >
  <?php 

 
 if($emailss!=$email){
echo"<span style=\"color:grey; float:left; font-size:10px;>\">About </span><br/>";
 $db->about("itserve1",$email);
}
 
 ?>
  </div>


  
</div>

<script  type="text/javascript">


$(document).keyup(function(ee){
	   // if(ee){keycode = ee.keyCode}else keycode =event.keyCode; or below
	  ee? keycode = ee.keyCode : keycode =event.keyCode;
	  console.log(keycode);
	 
	     if(keycode == 27){
		window.location="../include/logout.php";	  
		}
	   
});
</script>



<script src="../javascript/jquery-1.8.3.min.js"></script>
<script src="../javascript/picture_edit.js"></script>
<script type="text/javascript">

function replysendd(userid,e){
		
 var v =$('#r' + userid).val();

$('.sh').html('<img src=../photos/loader.gif />');

	//var me = document.getElementById('m').value;

		$.post('../include/replyinsert.php', {reply:v,userid:userid},function(data){
			
			if(data== ' '){
				$('#otherdetail4d').load("../include/profileeephp.php?email=<?php echo $email;?>");
				$('.sh').html('<img src=../photos/icon.png width=\"20px\" height=\"20px\"/>');
				$('#r' + userid).show();
				}
			});
			$.post('../include/comment_new.php', {cid:userid,c_othere:e},function(data){
	
			});
			}
			
$(setInterval(function(){
$('#otherdetail4d').load("../include/profileeephp.php?email=<?php echo $email;?>");
				
}, 300000));	


 function deleteeo(deletee_id){
	$('.sh').html('<img src=../photos/loader.gif />'); 
	  
	  $.post('../include/delete.php', {deletee:deletee_id},function(data){
		if(data== ' '){
			
		$('#otherdetail4d').load("../include/profileeephp.php?email=<?php echo $email;?>");
			$('.sh').html('<img src=../photos/icon.png width=\"20px\" height=\"20px\"/>');
			}
			
			
				
		})
	}

function closedd (target){
	
	popwin = window.open(target,"windowName","width=550,height=850,status=yes");
	popwin.moveTo(1,1);
	
	//window.open('t.php');
	//alert('hat');
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

//for comment
$("#ptextarea").val("Click here to start Tipping,<?php echo $db->names("itserve1",$emailss)."."; ?>").css({'color':'<?php echo $bg;?>',});
$("#ptextarea").focus(function(){
	if($("#ptextarea").val()=="Click here to start Tipping,<?php echo $db->names("itserve1",$emailss)."."; ?>"){
		$("#ptextarea").val("");
		}
	
	})
	
$("#ptextarea").val("Click here to start Tipping,<?php echo $db->names("itserve1",$emailss)."."; ?>").css({'color':'<?php echo $bg;?>',});
$("#ptextarea").blur(function(){
	if($("#ptextarea").val()==""){
		$("#ptextarea").val("Click here to start Tipping,<?php echo $db->names("itserve1",$emailss)."."; ?>");
		}
	
	})

//comment profile --

function pcmtt(pcmt){

	//var me = document.getElementById('m').value;
	var ne = document.getElementById('ptextarea').value;
	$('.sh').html('<img src=../photos/loader.gif />');
		$.post('../include/pcomentdoen.php', {nsend:ne,pcmt:pcmt},function(data){
			if(data = ' '){
				$('#otherdetail4d').load("../include/profileeephp.php?email=<?php echo $email;?>");
				$('#ptextarea').val('');
				$('#ptextarea').focus();
				$('.sh').html('<img src=../photos/icon.png width=\"20px\" height=\"20px\"/>');
				
			}
			});
			}
		
</script>

<?php include("../include/footer.php");?>