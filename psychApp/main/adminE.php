<?php 
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/adminf.php";

include"../functions/drop.php";
include"../functions/section.php";

//check for admin id
$check = mysqli_query($con,"select * from admin_pass where email ='$emailss'");
$num = mysqli_num_rows($check);
if ($num >0){}else {header("location: ../index.php");}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css" href="../css/admine.css" rel="stylesheet"/>
</head>

<body  onload="loadp();">
<div id="search_resulte">

</div>
<div id="admin">


<div id="heade">
<span id="logout" ><a  style="color:orange; font-size:20px;
text-decoration:none; margin-left:2px;" href="../functions/logout.php" > logout</a></span>
<span id="insertm"  style=" cursor:pointer; font-size:20px; color:green;  border-left:thin solid green; border-right:thin solid green; padding:2px;">Insert manually</span> 
 <span id="uploadee" style=" cursor:pointer; font-size:20px; color:green;  ">Upload</span>
 <span id="searched" style="cursor:pointer; font-size:20px; color:green; border-left:thin solid green;  padding:2px;"> Search </span>
 <span id="cliente" ><a  href="admin.php" style=" text-decoration:none; color:orange; border-left:thin solid green; padding:2px;"> Client/admin</a> </span>
<span id="logout"><a  href="../functions/logout.php"  title="logout"></a></span>
</div>


<div id="uploade">



<span id="success"></span><br/>

<fsorm method="post"  enctype="multipart/form-data">
<input type="file" name="excel" id="excel"   multiple /><input name='sumb' id="excelb" type="button"   onclick="uploadfile();"value="Insert"/> <span  id="successs">loading...<img   width="15px"  height="15px"src="../pictures/loading.gif"></span>


</form></div>

<div id="searchee">
<fodrm name="search" id="serach">
<select name="sel" id="sel" onchange="displaye();"  >
<option style=" display:none;">Age</option>


<?php 
dropshow($con,"Age");

?>

</select>
<select  name="sel2" id="sel2" onchange="displaye();">

<option style="display:none;">Stage of Change</option>
<?php 
dropshow($con,"Stage_of_Change");

?>
</select>
<select name="sel3" id="sel3" onchange="displaye();">
<option style="display:none;">Symptoms and Disorders</option>
<?php 
dropshow($con,"Symptoms_and_Disorders");

?>

</select>
<input style="font-size:20px;" id="done_search_s" type="button" onclick="searchhe();"  value="search"/>
</fordm>

</div>


<div id="dropp">


<br/>
<div>
<center>Age</center>

<input  type="text" id="Age"  placeholder="Age" onKeyUp="searche('Age','#Age');"><br/>

<div   id="Ages" style="background-color:green; border-radius:0 0 5px 5px; color:white;  z-index:27; overflow:scroll; width:; min-height:0px; max-height:400px;"></div>

</div>

<div id=""><center>
Stage of change</center>
<input onKeyUp="searche('Stage_of_Change','#Stage_of_Change');" type="text" id="Stage_of_Change"  placeholder="stage of change">
<div   id="Stage_of_Changes" style="background-color:green; border-radius:0 0 5px 5px; color:white; cursor:; z-index:27; overflow:scroll; width:; min-height:0px; max-height:400px;"></div>
</div>


<div id="" ><center>Symptoms and Disorders</center>
<input onKeyUp="searche('Symptoms_and_Disorders','#Symptoms_and_Disorders');" type="text" id="Symptoms_and_Disorders"  placeholder="Symptoms and Disorders">
<div   id="Symptoms_and_Disorderss" style="background-color:green; border-radius:0 0 5px 5px; color:white; cursor:; z-index:27; overflow:scroll; width:; min-height:0px; max-height:400px;"></div>
</div>



<div id=""><center>Psychological Treatment</center>
<input onKeyUp="searche('Psychological_Treatment','#Psychological_Treatment');" type="text" id="Psychological_Treatment"  placeholder="Psychological Treatment">

<div   id="Psychological_Treatments" style="background-color:green; border-radius:0 0 5px 5px; color:white; cursor:; z-index:27; overflow:scroll; width:px; min-height:0px; max-height:400px;"></div>
</div>



<div id=""><center>Evidence Level</center>
<input onKeyUp="searche('Evidence_Level','#Evidence_Level');"  type="text" id="Evidence_Level" placeholder="Evidence Level" >
<div   id="Evidence_Levels" style="background-color:green; border-radius:0 0 5px 5px; color:white; cursor:; z-index:27; overflow:scroll; width:; min-height:0px; max-height:400px;"></div>
</div>

<div id=""><center>Basis for Evidence</center>
<textarea onKeyUp="searche('Basis_for_Evidence','#Basis_for_Evidence');" style="height:60px;" type="text" id="Basis_for_Evidence" placeholder="Basis for Evidence" ></textarea>

<span id="adde" onClick="adde();" style="cursor:pointer; font-size:18px;  z-index:100px;color:white; background-color:green; border-radius:4px;  padding:1px; float:right; " >Insert</span><br/>
<span id="s" style="font-size:15px; float:right; ";><span style="color:white;">1</span></span>
</div>








</div>
</div>


</div><br/><br/><br/><br/><br/><br/><br/><br/>
<div></div>
<div id='ed' style="width:1999px; position:fixed;  top:100px; right:60px; " >


</div>
<br/><br/>

<center><span id='ii' style="position:fixed; top:0px;  left:400px;font-size:20px; width:200px;"></span>
<span id='hidden' style="position:fixed; top:113px;  left:-100px;font-size:25px;">1</span>


<input  title="this is age" type='button' id='prev' style='cursor:pointer; bottom:30px; position:fixed; left:1px; font-size:24px;
	 border-radius:5px; background-color:#1E5B1E; color:white;'  value='<<'  onclick='tp();' >
<input type='button' id='nextt' onclick='tn();' style='cursor:pointer;bottom:30px; position:fixed; right:1px; font-size:24px;
	 border-radius:5px; background-color:#1E5B1E; color:white;' value='>>' >

<span id="page"  >


<?php pagination($con);?>

</span>
<span id='left_p'>
<span id="x">hide</span>
<span id="xs">Page No.</span>
<span id="page2">


<?php pagination($con);?>
</span>
</span>



<div  id ="adminsrp"></div>
</center>


<?Php include "../functions/footer.php";?>