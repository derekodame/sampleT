
<?php include("../include/header.php");

session_start();
$emailss = $_SESSION['email'];
$email=$_GET['email'];
?>
<div class="otherwrapper" style="background-color:
<?php 
$query=mysql_query("SELECT * FROM pannel where email = '$emailss'");
while($row=mysql_fetch_array($query)){
	$bg = $row['bgcolor'];
	
	echo $bg;
}
?>">
  <div class="otherpicture">
    <?php 
$email=$_GET['email'];
$dbimg = "<img  width=\"200px\" height=\"200px\" src=./profileshowpicture.php?email=$emailss>";
echo $dbimg;
?>
  </div>
  <div class="otherdetail1">
    <ul>
      <li >Email</li>
      <li >Occupation </li>
      <li >Sex</li>
      <li >Registed On </li>
    </ul>
  </div>
  <div class="otherdetail2">
    <ul>
      <li ><?php echo $db->email("itserve1",$emailss); ?></li>
      <li > <?php echo $db->occup("itserve1",$emailss); ?></li>
      <li > <?php echo $db->sex("itserve1",$emailss); ?></li>
      <li > <?php echo $db->reg("itserve1",$emailss); ?></li>
    </ul>
  </div>

</div>

<div id="otherdetail4"  class="otherdetail3" style="background-color:white">
  <div class="otherdetail4"  >
    <?php 
	include"../include/profile_delete.php";
/*
$query = mysql_query("SELECT * FROM comment	 WHERE email='$emailss' ORDER BY id DESC");
while($row=mysql_fetch_array($query)){
	$n= $row['name'];
	$c= ucfirst($row['comment']);
	$d= $row['date'];
	$dbid= $row['id'];	
	


	echo "<span class=\"cccc\">$c</span><br/>
	<span style=\"color:red; cursor:pointer;\" id=\"$dbid\" onclick=\"deletee($dbid);\">delete</span><br/><br/>";

	/* $ff = "<br/><span class=\"cccc\">$c</span><br/>
	
	<em >Posted on $d </em><a href=../include/delete.php?id=$dbid onclick=\"return confirm('$last, are you sure you want to remove your IT Tip')\">
	<span class=\"\"  id=\"remove2\" title=\"Remove This\"> remove</span></a><br/><div class=\"down\" ></div><br/>";
	
	echo $ff;
	



	}*/
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
<?php include("../include/footer.php");?>