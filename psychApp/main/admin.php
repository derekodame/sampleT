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
<div><span style="border:3px solid orange; color:brown; font-size:20px; padding:3px;">Updates</span><span style="border:3px solid orange; color:brown; font-size:20px; padding:3px;"> Add admins </span><span style="border:3px solid orange; color:brown; font-size:20px; padding:3px;"> clients</span></div>
  <br/><br/><br/>
  <div id="adupdate">
     <span id="add_adminseu" >Updates </span><br/>
   <input id = "feu" type="text" placeholder="first name"><br/>
  <input id = "leu"type="text" placeholder="last name"><br/>
  <input id = "ieu" type="text" placeholder="admin id"><br/>
  <input id = "eeu" type="text" placeholder="email"><br/>
  <input id = "peu" type="text" placeholder=" Password"><br/>
    <input  id = "ceu"type="text" placeholder="confirm Password"><br/>
  <input onclick="add_adminu()" id = "be" type="button" value="Update admin">
 </div>
  <p>&nbsp;</p>
  <div id="newupdate">
  <span id="add_adminse" >add admins</span><br/>
  <input id = "fe" type="text" placeholder="first name"><br/>
  <input id = "le"type="text" placeholder="last name"><br/>
  <input id = "ie" type="text" placeholder="admin id"><br/>
  <input id = "ee" type="text" placeholder="email"><br/>
  <input id = "pe" type="text" placeholder=" Password"><br/>
    <input  id = "ce"type="text" placeholder="confirm Password"><br/>
  <input onclick="add_admin()" id = "be" type="button" value="Add admin">
  </div>
</div><br/>

<div id="upclient">
<br/>
 

<input type="search" placeholder="Search through for names">
<input type="button" value="Search"> data result<br/><br/>
<?php echo  clientAll($con);?>
</div><br/>


</div>







<?Php include "../functions/footer.php";?>