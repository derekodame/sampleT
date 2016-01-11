<?Php include "../functions/header.php";

include"../functions/connection.php";
include"../functions/error.php";
include"../functions/drop.php";
?>




<div id="search_body">


<div id="left_dropdown">
<form name="search" id="serach">
<select name="sel" id="sel" onchange="dis();" >
<option style=" display:none;">Age</option>


<?php 
dropshow($con,"Age");

?>

</select>
<select  name="sel2" id="sel2" onchange="dis();">

<option style="display:none;">Stage of Change</option>
<?php 
dropshow($con,"Stage_of_Change");

?>
</select>
<select name="sel3" id="sel3" onchange="dis();">
<option style="display:none;">Symptoms and Disorders</option>
<?php 
dropshow($con,"Symptoms_and_Disorders");

?>

</select>
<input id="done_search_s" type="button" onclick="searchh();"  value="search"/>
</form>
</div>

<div id ="search_top"></div>


<!-- search result area-->



</div>

<center>


<div id="search_result">

</div><p></p>
<p></p>
<p></p><p></p>
<span  id="successsh" style="position:fixed; top:50px; left:10px"><img   width="45px"  height="45px" src="../pictures/loading.gif"><br/>loading...</span>
</center>

<script type="text/javascript">



</script>

<?Php include "../functions/footer.php";?>