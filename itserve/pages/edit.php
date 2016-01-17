<?php 
include("../include/header.php");
include("../include/pictureshow.php");
session_start();
$emailss = $_SESSION['email'];
$sessioncolor = $_SESSION['sessioncolor'];
?>

<div class="pic"> 
 
  <form action="" method="post">
  <span  ><input  title="Remove Picture" name="de" type="submit" id="x" value="X"  /></span>
  </form>
<?php 

$de = $_POST['de'];
if($de){
$update = mysqli_query($con,"UPDATE itserve1 SET picturehide = 0 ,picture = 'no picture' WHERE email = '$emailss'");	
	//unlink("../images/$ppic");
	unlink("../images/$emailss.png");
	unlink("../images/$emailss.jpeg");
	unlink("../images/$emailss.gif");
	header("location: ../pages/edit.php");
	}
?>
<div class="picc">
    <?php 
$qu =mysqli_query($con,"SELECT * FROM itserve1 WHERE email='$emailss'");
while($ro=mysqli_fetch_array($qu)){
	$dbpicutrehide = $ro['picturehide'];
	 $ppic = $ro['picture'];
	 
	 if($dbpicutrehide == 1 ){
$email=$_GET['email'];

$dbimg = "<img  class=\"editpic\"
	
	 src=\"../images/$ppic\">";
	
	echo $dbimg;
	
	}
	
	else
	
	echo "<img  class=\"mobile\" style=\"height:200px; width:200px; 	background-size:auto;\"  src='../photos/no-photo.png' />";


}


?>
    
  
  <p>
    <?php $db->image();?>
  </p>
  </div>
</div>


<div class="about"> 
<form action="#" method="post">

<span id="show" >Edit About</span>
<input  name="ok" type="submit" id="hideabout" value="Done"  /><br/>

<textarea class="aboutarea" name="about" style="border: 1px solid
<?php 
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
?>"><?php echo (($db->about("itserve1",$emailss))); ?></textarea>

<div id="showabout" style="background-color:
<?php 
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
?>"

 >
 <?php echo nl2br($db->about("itserve1",$emailss)); ?> 
 
 </div>
</form>

<?php
$about = mysqli_real_escape_string($con,(($_POST['about']))); 
$ok = $_POST['ok']; 
if($ok){
	$query = "UPDATE itserve1 SET about = '$about'  WHERE email ='$emailss'";

	mysqli_query($con,$query);
	header("location: edit.php");
	
	}
?>
</div>


<div class="detail" style="background-color:
<?php 
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
?>;box-shadow:-1px 2px 5px 1px <?php 
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
?>">
<br/>
  <div class="li_left">
<ul>
<li >Name</li>
<li >Email</li>
<li >Occupation</li>
<li >Sex</li>
<li >  Registed On</li>

</ul>
</div>
<div  class="li_right">
<ul>
<li ><?php echo $db->names("itserve1",$emailss); ?></li>
<li ><?php echo $db->email("itserve1",$emailss); ?></li>
<li ><?php echo $db->occup("itserve1",$emailss); ?></li>
<li ><?php echo $db->sex("itserve1",$emailss); ?></li>
<li ><?php echo $db->reg("itserve1",$emailss); ?></li>


</ul>
</div>
</div>
<div class="edit" style="background-color:
<?php 
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
?>;box-shadow:-1px 2px 5px 1px <?php 
$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
while($row=mysqli_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
?>">

<div  align="left" >
<form action="#" method="post" enctype="multipart/form-data" id="form">
<ul class="hl">
<li >
  <input class="input" placeholder="firstname" tabindex="1" required name="firstname" type="text" id="firstname" title="Firstname" value="<?php echo $db->firstname("itserve1",$emailss); ?>"/ >
</li>
<li >
  <input class="input" placeholder="password" tabindex="3" required name="password" type="text" id="password" title="Password" value="<?php echo $db->pass("itserve1",$emailss); ?>" />
</li>

<li >

  color <input type="color" name="sessioncolor"   value="<?php echo $db->color("itserve1",$emailss); ?>">
  <?php 
  $db->color($emailss,'sessioncolor')
  ?>
</li>
<li ></li>
</ul>

<ul class="hr">
<li >
  <input class="input" title="Lastname" placeholder="lastname" tabindex="2" required  name="lastname" type="text" id="lastname" value="<?php echo $db->lastname("itserve1",$emailss); ?>">
</li>
<li >
  <input class="input"  title="Occupation" placeholder="occupation" tabindex="4" required name="occupation" type="text"  value="<?php echo $db->occup("itserve1",$emailss); ?>" />
</li>
<li ></li>
<li >
  
  
 <input class="inputb"  //onclick="window.location.reload()"  name="done"  type="submit" id="done" tabindex="8" value="Done">
</li>
</ul>
</form>

</div>

</div>
</div>
<form action="#" method="post" enctype="multipart/form-data" >
<div class="iii" style="">

  <input name="picture" type="file" class="inputup" id="picture" onchange="this.form.submit()" />
</div>
</form>



<p>&nbsp;</p>
<script  type="text/javascript">

$('#done').click(function(){
	window.location="../pages/homee.php";
	//$(document).load("homee.php");
	
	});




  $(document).keyup(function(ee){
	   // if(ee){keycode = ee.keyCode}else keycode =event.keyCode; or below
	  ee? keycode = ee.keyCode : keycode =event.keyCode;
	  console.log(keycode);
	 if(keycode == 27){
		window.location="../include/logout.php";	  
		}
	
});
</script>
<?php include("../include/footer.php");?>