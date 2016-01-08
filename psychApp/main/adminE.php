<?php 
include"../functions/connection.php";
include"../functions/error.php";


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
<center><span id="s"></span><br/>
<input type="button" id="adde" onClick="adde();" style="cursor:pointer;" value="add"></center>
<br/><br/>

<center>
<?php 

$queryt = mysqli_query($con, "select * from groupp order by id DESC ");

$num =mysqli_num_rows($queryt);
$div = ($num/50);
$p= ceil($div);
echo "preview";


for($b =1; $b<=$p; $b++){
	
	
	echo "<span id='$b' href='#' onClick='pag($b);'  style='margin:5px; background-color:grey; color:white; padding:0 5px 0  5px; cursor:pointer;'>$b</span>";
	}
	echo "next";
?>
<div id ="adminsr"></div>
<div id ="adminsrp">pagination</div>
</center>


<?Php include "../functions/footer.php";?>