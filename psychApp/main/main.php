<?Php include "../functions/header.php";

include"../functions/connection.php";
include"../functions/error.php";
include"../functions/drop.php";
?>




<div id="search_body">


<div id="left_dropdown">


<select name="sel" id="sel" onchange="displaye();"  title="Age">
<option style=" display:none;">Age</option>


<?php 
dropshow($con,"Age");

?>

</select>
<select  name="sel2" id="sel2" onchange="displaye();" title="Stage of Change" >

<option style="display:none;">Stage of Change</option>
<?php 
dropshow($con,"Stage_of_Change");

?>
</select>
<select name="sel3" id="sel3" onchange="displaye();"  title="Symptoms and Disorders">
<option style="display:none;">Symptoms and Disorders</option>
<?php 
dropshow($con,"Symptoms_and_Disorders");

?>

</select>
<input id="done_search_s" type="button" onclick="searchh();"  value="search"/>

</div>

<div id ="search_top"></div>


<!-- search result area-->



</div>




<div id="search_result">

</div><p></p>
<p></p>
<p></p><p></p>
<span  id="successsh" style="position:fixed; top:50px; left:10px"><img   width="45px"  height="45px" src="../pictures/loading.gif"><br/>loading...</span>


<div id='pop' style=" height:auto; width:500px; position:fixed; top:120px; right:404px; z-index:50px;">

<div style=" width:690px; "><span  style="float:right; border:thin solid red; border-radius:100px; padding:0 3px 0 3px;background-color:red; color:white; cursor:pointer;" id="popx">X</span></div>
<br/>
<div id='popc' style="background-color:red; max-height:400px; width:687px; overflow-x:hidden; border-radius:3px; ">

<?php  include"../functions/showfeedbackclient.php"; ?>
</div>

</div>

<div 
id="tooll" 
style=" 
        position: absolute;
        display: none;
        padding: 5px;
        max-width: 400px; /* need i.e. rule */
        dbackground-color: red;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
     "
>
    
</div>
<?Php include "../functions/footer.php";?>