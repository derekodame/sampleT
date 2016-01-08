<?Php 
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/adminf.php";



session_start();
$emailad = $_SESSION['email'];
$idad = $_SESSION['id'];


/*//if email  admin exist direct
if($emailad){
		//header("location: ./main/main.php");
		}else 	header("location: ../index.php");*/

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

<span id= "welcome"><?php echo "welcome boss "; ?></span>

</div>


<div id="admin">
<div id="left_admin">
<div id="clientAmind">client</div>
<div id="uploadAmind">upload</div>
<div id="dropdown_box">dropdown box</div>
<div id="">grouping</div>
<div > suggested treatments</div>

</div>


<div id="right_admin">


<div id="client">
<center><input  id="sclient"type="search" style=" border-radius:5px; width:670px; font-size:24px; background-color:green; color:white;"  placeholder="search through client"name="sclient"> </center><br/>
<?php echo  clientAll($con);?>
</div>


<div id="upload">
<center><input  id="sexcel" type="search" style=" border-radius:5px; width:670px; font-size:24px; background-color:green; color:white;"  placeholder="search through excel"name="sexcel"> </center><br/>
<span id="success"></span><span  id="successs"><img   width="15px"  height="15px"src="../pictures/loading.gif"></span><br/>

<fsorm method="post"  enctype="multipart/form-data">
<input type="file" name="excel" id="excel"   multiple /> 
<input type="text" required name="aa"  id="aa" placeholder="name of file"  /><input name='sumb' id="excelb" type="button"   onclick="uploadfile();"value="submit"/> 


</form>
<br/>
<div id ="showUpload"></div>
</div>


<div id="drop">

for drop

<form enctype="multipart/form-data" method="post">
<select>
<option>Age</option>
<option>Stage of change</option>
<option>Symptoms and Disorders</option>
</select><br/>
<input type="text"  placeholder="Psychological Treatment"><input type="text" placeholder="Evidence Level" ><input type="text" placeholder="" >
<input type="button"  value="add">
</form>
</div>
</div>

<?php 


?>

<div>
<iframe id="frame" width="100%" height="100%"   src="../pictures/2.txt">myDocument</iframe>



</div>




<div></div>

</div>







<?Php include "../functions/footer.php";?>