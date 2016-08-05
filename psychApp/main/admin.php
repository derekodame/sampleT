<?Php 
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/adminf.php";




include"../functions/section.php";


//translate
require_once('class.translation.php');

if(isset($llk)){
	$translate = new Translator($llk);
}
else{
	$translate = new Translator('en');
}


//check for admin id
$check = mysqli_query($con,"select * from admin_pass where email ='$emailad'");
$num = mysqli_num_rows($check);
if ($num >0){}else {header("location: ../index.php");}

?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php $i = 1;?>
<link type="text/css" href="../css/main.css" rel="stylesheet"/>
</head>
<body>

<div id="top">
<span id="logout"><a  href="../functions/logout.php"  title="<?php echo $translate->__('Logout'); ?>"></a></span>

<span id= "welcome"><?php echo  $translate->__('Welcome') . " $first $last "; ?></span>
<span id="welcome"><span style="color:black;">||</span><a style="color:orange; text-decoration:none;"  href="../main/admine.php" ><?php echo $translate->__('Admin Section'); ?></a></span>
</div>


<div id="admin">
<div id="adminp">
<br/>
<div style="width:900px; float:left;"><span id="upe" style=" cursor:pointer;border:3px solid orange; color:brown; font-size:20px; padding:3px;"><?php echo $translate->__('Updates'); ?></span><span id="ade" style="cursor:pointer;border:3px solid orange; color:brown; font-size:20px; padding:3px;"><?php echo $translate->__('Add admins'); ?>  </span><span id="ce" style=" cursor:pointer;border:3px solid orange; color:brown; font-size:20px; padding:3px;"><?php echo $translate->__('clients'); ?> </span><span id="fe"style=" cursor:pointer;border:3px solid orange; color:brown; font-size:20px; padding:3px;"><?php echo $translate->__('Feedback'); ?> </span><span id="fea"style=" cursor:pointer;border:3px solid orange; color:brown; font-size:20px; padding:3px;"><?php echo $translate->__('Feedback Answers'); ?> </span></div>
  <br/><br/><br/><br/><br/>
  <div id="deletedate"><?php echo $translate->__('deleting'); ?>
  
  </div>
  <div id="adupdate">
     <span id="add_adminseu" ><?php echo $translate->__('Updates'); ?> </span><br/>
   <input id = "feu" type="text" placeholder="
   <?php echo $translate->__('firstname'); ?>">
  <input id = "leu"type="text" placeholder="<?php echo $translate->__('lastname'); ?>">
  <input id = "ieu" type="text" placeholder="<?php echo $translate->__('admin'); ?> id">
  <input id = "eeu" type="text" placeholder="<?php echo $translate->__('email'); ?>">
  <input id = "peu" type="text" placeholder=" <?php echo $translate->__('Password'); ?>">
    <input  id = "ceu"type="text" placeholder=<?php echo $translate->__('confirm Password'); ?>"">
  <input onclick="add_adminu()" id = "be" type="button" value="<?php echo $translate->__('update admin'); ?>">
 </div>
  
  <div id="newupdate">
 
  <div id='sdc'>
 <?php //include"../functions/admindb.php";?></div>
  </div>
</div><br/>

<div id="feedadm">
<p><span id="feeds"></span><br/><?php echo $translate->__('question'); ?>
  </p>
<p><br/>
  <textarea id="q"></textarea>
  <input  "onClick="feed();" type="button" value="<?php  echo $translate->__('Add')?>">
</p>


<div id="feedid" >
  
</div>
</div>


<div id="upclient">

 

<input title="searches for first and lastnames" id="cl" type="search" 

placeholder="<?php echo $translate->__('Search through for names') ?>

">
<input  onClick="searchclient()" type="button" value="<?php echo $translate->__('Search'); ?>"> <br/><br/>
<div id="clientsh"><?php echo clientAll($con); ?></div>
</div>

<div id="feedbackanswers">
<?php include"../functions/feedbackanswers.php"; ?>
</div>

</div>







<?Php include "../functions/footer.php";?>
<script type="text/javascript">



$('#adupdate').hide();
$('#deletedate').hide();
$('#feedbackanswers').hide();
$('#upclient').show();
$('#feedadm').hide();
$('#newupdate').hide();
</script>