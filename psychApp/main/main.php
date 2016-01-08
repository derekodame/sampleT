<?Php include "../functions/header.php";?>



<div id="search_body">


<div id="left_dropdown">
<select id="sel">
<option>Age</option>
<option>Child</option>
<option>Adolescent</option>
<option>Adult</option>

</select>
<select id="selst">

<option>Stage of Change</option>
<option>Precontemplation</option>
<option>Contemplation</option>
<option>Preparation</option>
<option>Action</option>
<option>Maintenance</option>
</select>
<select id="selsy">
<option>Symptoms & Disorders</option>
<option>Anorexia</option>
<option>Anxiety (general symptoms)</option>
<option>ADHD</option>
<option>	
Autism Spectrum (lower functioning)</option>

</select>
<input id="done_search_s" type="button" onclick="searchh_s();" value="search"/>
</div>

<div id ="search_top">
<input id="search" type="search"  onKeyUp="searchh();"  placeholder="Search through..."/>
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