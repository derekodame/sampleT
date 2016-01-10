<?Php include "../functions/header.php";

include"../functions/connection.php";
include"../functions/error.php";
include"../functions/drop.php";
?>




<div id="search_body">


<div id="left_dropdown">
<select id="sel">
<option style=" display:none;">Age</option>


<?php 
dropshow($con,"Age");

?>

</select>
<select id="sel2">

<option style="display:none;">Stage of Change</option>
<?php 
dropshow($con,"Stage_of_Change");

?>
</select>
<select id="sel3">
<option style="display:none;">Symptoms and Disorders</option>
<?php 
dropshow($con,"Symptoms_and_Disorders");

?>

</select>
<input id="done_search_s" type="button" onclick="searchh();"  value="search"/>
</div>

<div id ="search_top">


<div id='ser'>

</div>

</div>

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