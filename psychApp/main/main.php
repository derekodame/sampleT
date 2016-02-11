<?Php include "../functions/header.php";

include"../functions/connection.php";
include"../functions/error.php";
include"../functions/drop.php";
?>




<div id="search_body">


<div id="left_dropdown">


<select name="sel" id="sel" onchange="displaye();" data-tip-type='text' data-tip-source="
<div id ='to' style='border: solid thin orange; padding:4px; color:black;'>



Age</div>" class='tooltip'>
<option style=" display:none;">Age</option>


<?php 
dropshow($con,"Age");

?>

</select>
<select  name="sel2" id="sel2" onchange="displaye();" data-tip-type='text' data-tip-source="
<div style='border: solid thin orange; padding:4px; color:black;' >



Stage of Change</div>" class='tooltip'>>

<option style="display:none;">Stage of Change</option>
<?php 
dropshow($con,"Stage_of_Change");

?>
</select>
<select name="sel3" id="sel3" onchange="displaye();" data-tip-type='text' data-tip-source="
<div style='border: solid thin orange; padding:4px; color:black;' >



Symptoms and Disorders</div>" class='tooltip'>>
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


<div id='pop' style=" height:auto; width:500px; position:fixed; top:93px; right:404px; z-index:50px;">

<div style=" width:500px; "><span  style="float:right; border:thin solid red; border-radius:100px; padding:0 3px 0 3px;background-color:red; color:white; cursor:pointer;" id="popx">X</span></div>
<br/>
<div style="background-color:red; height:400px; width:487px; border-radius:3px; ">

<center >what do you think about the site <?php echo $first ; ?></center><br/>
<center><textarea   > give a little comment </textarea></center>
<center><input type="button" value="send"></center>
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