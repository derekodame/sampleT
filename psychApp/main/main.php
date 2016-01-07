<?Php include "../functions/header.php";?>



<div id="search_body">


<div id="left_dropdown">
<select id="sel">
<option>Age</option>
<option>Stage of Change</option>
<option>Symptoms & Disorders</option>
<option>Psychological Treatment</option>
<option>Evidence Level</option>
<option>Basis for Evidence</option>
</select>

</div>

<div id ="search_top">
<input id="search" type="search"  onKeyUp="searchh();"  placeholder="Search through here, <?php echo $first." ". $last."...";?>"/>
<input id="done_search" type="button" onclick="searchh();" value="search"/>

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
<span  id="successsh"><img   width="425px"  height="425px" src="../pictures/loading.gif"></span>
</center>

<script type="text/javascript">



</script>

<?Php include "../functions/footer.php";?>