<?Php 
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/adminf.php";




include"../functions/section.php";




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
<span id="logout"><a  href="../functions/logout.php"  title="logout"></a></span>

<span id= "welcome"><?php echo "Welcome $first $last "; ?></span>
<span id="welcome"><span style="color:black;">||</span><a style="color:orange; text-decoration:none;"  href="../main/admine.php" >Admin Section</a></span>
</div>


<div id="admin">
<div id="adminp">
<br/>
<div style="width:900px; float:left;"><span id="upe" style=" cursor:pointer;border:3px solid orange; color:brown; font-size:20px; padding:3px;">Updates</span><span id="ade" style="cursor:pointer;border:3px solid orange; color:brown; font-size:20px; padding:3px;"> Add admins </span><span id="ce" style=" cursor:pointer;border:3px solid orange; color:brown; font-size:20px; padding:3px;"> clients</span><span id="fe"style=" cursor:pointer;border:3px solid orange; color:brown; font-size:20px; padding:3px;"> Feedback</span><span id="fea"style=" cursor:pointer;border:3px solid orange; color:brown; font-size:20px; padding:3px;"> Feedback Answers</span></div>
  <br/><br/><br/><br/><br/>
  <div id="adupdate">
     <span id="add_adminseu" >Updates </span><br/>
   <input id = "feu" type="text" placeholder="first name">
  <input id = "leu"type="text" placeholder="last name">
  <input id = "ieu" type="text" placeholder="admin id">
  <input id = "eeu" type="text" placeholder="email">
  <input id = "peu" type="text" placeholder=" Password">
    <input  id = "ceu"type="text" placeholder="confirm Password">
  <input onclick="add_adminu()" id = "be" type="button" value="Update admin">
 </div>
  
  <div id="newupdate">
  <span id="add_adminse" >add admins</span><br/>
  <input id = "fe" type="text" placeholder="first name">
  <input id = "le"type="text" placeholder="last name">
  <input id = "ie" type="text" placeholder="admin id">
  <input id = "ee" type="text" placeholder="email">
  <input id = "pe" type="text" placeholder=" Password">
    <input  id = "ce"type="text" placeholder="confirm Password">
  <input onclick="add_admin()" id = "be" type="button" value="Add admin">
 <br/><br/> <br/>
  <div><?php include"../functions/admindb.php";?></div>
  </div>
</div><br/>

<div id="feedadm">
<span id="feeds"></span><br/>
question<br/>
<textarea id="q"></textarea>
Answers
a.<textarea id="a" ></textarea>
b.<textarea  id="b"></textarea>
c.<textarea id="c"></textarea>
d.<textarea id="d"></textarea>
<input onClick="feed();" type="button" value="Done">

<br/>
<?php include"../functions/showfeedback.php"; ?>
</div>


<div id="upclient">

 

<input title="searches for first and lastnames" id="cl" type="search" placeholder="Search through for names">
<input  onClick="searchclient()" type="button" value="Search"> data result<br/><br/>
<div id="clientsh"><?php echo clientAll($con); ?></div>
</div>

<div id="feedbackanswers">
<?php include"../functions/feedbackanswers.php"; ?>
</div>

</div>







<?Php include "../functions/footer.php";?>
<script type="text/javascript">



$('#adupdate').hide();

$('#feedbackanswers').hide();
$('#upclient').show();
$('#feedadm').hide();
$('#newupdate').hide();
</script>