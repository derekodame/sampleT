
<?php 
include("../include/header.php");

session_start();
$emailss = $_SESSION['email'];
$email=$_GET['email'];	
?>

<?php 
if($emailss){
	$query = mysqli_query($con,"SELECT * FROM pannel WHERE email ='$emailss'");
	$num = mysqli_num_rows($query);
	if($num == 0){
			 mysqli_query($con,"INSERT INTO pannel VALUES('','$emailss','$sessioncolor','sessioncolor','sessionbodycolor')");
			}
	
}
//session color
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$email'");
$row=mysqli_fetch_array($query);
	$bg = $row['bgcolor'];

$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
$row=mysqli_fetch_array($query);
	$bgs = $row['bgcolor'];	
//----

	

?>
<div class="logo">
 <img src="../photos/IT-Serve.png" width="200" height="80" /> 




</div>

<div class="ctextarea" id="ctextarea">
  <form action="" method="post"  id="form21" enctype="multipart/form-data" >
  <textarea  class="textarea"  id="textarea" title="<?php echo "Give your Tip,$first"; ?>"  required name="comment"   placeholder="<?php echo "Let's Tip, $first"; ?>"  >
</textarea>

<br/>
<input type="hidden" name="hide" value="1000000">

<div class="textdown">





<span style="background-color:<?php echo $bgss;?>;" class="cbutton" id="cdone"  onclick="cmtt();" >Done</span>
</div>
</form>

</div >


<div class="showcomment" id="false" style="background-color:white;">
 






<div class="otherdetail4" id="otherdetail4">
  
  <?php 

//include "../include/cmt.php";
?>
  <?php 

include("../include/homeshow.php");


?>
    
 

 
</div>

</div>
<div class="onlineM" align="center" style="background-color:<?php echo $bg;?>" >
<span class="count">
<?php include"../include/count.php"; ?>
</span>
</div>

<div class="online" style="border-left: 1px solid 
<?php 
echo $bg;
?>;border-right: 1px solid 
<?php 
echo $bg;
?>">

<?php 
include"../include/onlineshow.php";

$query=mysqli_query($con,"SELECT * FROM itserve1 WHERE email= '$emailss' ");
$row=mysqli_fetch_array($query);
	$chate = $row['email'];
	
?>




</div>
<div class="chattop">

<span >General Chat OR <span  style=" cursor:pointer; color: rgba(0,153,255,.8);"  onclick="closedd('t.php?email=<?php echo $chate;?>');" ><span style="color:<?php echo $bgs;?>;cursor:pointer; text-decoration:underline;">Personal Chat</span></span></span>

<script type="text/javascript">
function closedd (target){
	
	popwin = window.open(target,"windowName","width=550,height=850,status=yes");
	popwin.moveTo(1,1);
	
	//window.open('t.php');
	//alert('hat');
}

</script>
</div>
<div class="chat" style="border: 1px solid  
<?php 
echo $bgs;
?>">

<div class="chatshow">
<?php include"../include/chatselect.php";?>
</div>

<div class="chatform">

<textarea placeholder="Let's chat <?php echo $fl;?>" id="chattext" class="chat_text"  style="border-top: 1px solid 
<?php 
echo $bgs;
?>;border-right: 1px solid 
<?php 
echo $bgs;
?>"></textarea>
<span id="chat_button" class="chat_button" onclick="send();" style="border-top: 1px solid 
<?php 
echo $bgs;
?>;border-right: 1px solid 
<?php 
echo $bgs;
?>"><span style="color:
<?php 
echo $bgs;
?>;">Go</span></span>

</div>

</div>

<div 
id="tooll" 
style=" color: #fff;
        position: absolute;
        display: none;
        padding: 5px;
        max-width: 400px; /* need i.e. rule */
        dbackground-color: rgba(0,0,0,.85);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;"
>tooltip
    
</div>
<script  type="text/javascript">
	  






//for comment
$("#textarea").val("Click here to start Tipping,<?php echo $db->names("itserve1",$emailss)."."; ?>").css({'color':'<?php echo $bgs;?>',});
$("#textarea").focus(function(){
	if($("#textarea").val()=="Click here to start Tipping,<?php echo $db->names("itserve1",$emailss)."."; ?>"){
		$("#textarea").val("");
		}
	
	})

$("#textarea").blur(function(){
	if($("#textarea").val()==""){
		$("#textarea").val("Click here to start Tipping,<?php echo $db->names("itserve1",$emailss)."."; ?>");
		}
	
	})
	
 $(document).keyup(function(ee){
	   // if(ee){keycode = ee.keyCode}else keycode =event.keyCode; or below
	  ee? keycode = ee.keyCode : keycode =event.keyCode;
	  console.log(keycode);
	   if(keycode == 27){
		window.location="../include/logout.php";	  
		}
		});
		
		
		
		
//regx

	
		
</script>
<script src="../javascript/jquery-1.8.3.min.js"></script>
<script src="../javascript/picture_edit.js"></script>
<script>


</script>
<?php include("../include/footer.php");?>

