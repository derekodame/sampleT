<?php 
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/adminf.php";


?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css" href="../css/admine.css" rel="stylesheet"/>
</head>

<body>

<div id="admin">

<div id="dropp">












<div>
<center>Age</center>

<input type="text" id="age"  placeholder="Age" onKeyUp="searche('Age','#age');"><br/>

<div  onClick="results('#ages','#age');" id="ages" style="background-color:black; border-radius:0 0 5px 5px; color:white; cursor:pointer;"></div>

</div>

<div id=""><center>
Stage of change</center>
<input onKeyUp="searche('Stage_of_Change','#stage');" type="text" id="stage"  placeholder="stage of change">
<div  onClick="results('#stages','#stage');" id="stages" style="background-color:black; border-radius:0 0 5px 5px; color:white; cursor:pointer;"></div>
</div>


<div id="" ><center>Symptoms and Disorders</center>
<input onKeyUp="searche('Symptoms_and_Disorders','#symptoms');" type="text" id="symptoms"  placeholder="Symptoms and Disorders">
<div  onClick="results('#symptomss','#symptoms');" id="symptomss" style="background-color:black; border-radius:0 0 5px 5px; color:white; cursor:pointer;"></div>
</div>



<div id=""><center>Psychological Treatment</center>
<input onKeyUp="searche('Psychological_Treatment','#psychological');" type="text" id="psychological"  placeholder="Psychological Treatment">

<div onClick="results('#psychologicals','#psychological');"  id="psychologicals" style="background-color:black; border-radius:0 0 5px 5px; color:white; cursor:pointer;"></div>
</div>



<div id=""><center>Evidence Level</center>
<input onKeyUp="searche('Evidence_Level','#evidence');"  type="text" id="evidence" placeholder="Evidence Level" >
<div  onClick="results('#evidences','#evidence');" id="evidences" style="background-color:black; border-radius:0 0 5px 5px; color:white; cursor:pointer;"></div>
</div>

<div id=""><center>Basis for Evidence</center>
<textarea onKeyUp="searche('Basis_for_Evidence','#basis');" style="height:100px;" type="text" id="basis" placeholder="Basis for Evidence" ></textarea>


</div>








</div>
</div>


</div><br/><br/><br/><br/><br/><br/><br/><br/>
<div></div>
<center><div id='ed' style="" >
<input type="button" id="adde" onClick="adde();" style="cursor:pointer; font-size:18px; position:fixed; top:0px; right:0px;" value="Insert">

<span id="s" style="font-size:24px; position:fixed; top:80px; left:670px;";></span></div></center>
<br/><br/>

<center><span id='ii' style="position:fixed; top:113px;  left:600px;font-size:25px;"></span>
<span id='hidden' style="position:fixed; top:113px;  left:-100px;font-size:25px;">1</span>


<button id='prev' style='cursor:pointer; top:200px; position:fixed; left:1px;' >preview </button><button id='nextt' style='cursor:pointer;top:200px; position:fixed; right:1px;' >next</button>

<span id="page">


<?php pagination($con);?>

</span>

<span id="page2">


<?php pagination($con);?>

</span>


<div id ="adminsr"></div>
<div  id ="adminsrp"></div>
</center>


<?Php include "../functions/footer.php";?>