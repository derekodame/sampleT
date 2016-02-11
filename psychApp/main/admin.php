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
<span id="logout"><a  href="../functions/logout.php" >logout</a></span>
<span id="logoudt"><a  href="../main/admine.php" >Admin Section</a></span>
<span id= "welcome"><?php echo "welcome boss "; ?></span>

</div>


<div id="admin">
<div id="adminp">
<br/>
Change Password: 
<input type="text" placeholder="current Password">
<input type="text" placeholder="New Password">
<input type="button" value="Done">
</div><br/>

<div id="adminp">
<br/>
 

<input type="search" placeholder="Search through for names">
<input type="button" value="Search"> data result<br/><br/>
<?php echo  clientAll($con);?>
</div><br/>


</div>







<?Php include "../functions/footer.php";?>