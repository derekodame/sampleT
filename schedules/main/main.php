<?php include_once"../functions/head.php"; ?>
<?php include_once"../functions/register.php"; session_start(); $s = $_SESSION['se']; echo $s;?>


<div>
Employee
<form action="" method="post">
name<br/>
<input id='username' name="username" type="text" required="required" /><br/>
email<br/>
<input name="email" type="email"  required="required"/><br/>
password<br/>
<input name="password" type="password"  required="required"/><br/>
<input id='done'name="done" type="submit" value="register" /> forgot password



</form>

Employer
<div>
<form action="" method="post">
name<br/>
<input name="Eunsername" type="text"  required="required"/><br/>
email<br/>
<input name="Eemail" type="email"  required="required"/><br/>
password<br/>
<input name="Epassword" type="password"  required="required"/><br/>
<input  name="Edone" type="submit" value="register" /> forgot password



</form>

</div>

</div>
<script src="../javascript/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$('#done').prop("disabled",true);
$('#username').keypress(function(){
if($('#username').val()==0){
	
$('#done').prop("disabled",true);
	
	
	}else{
		$('#done').prop("disabled",false);
		 }

});
</script>
<?php include_once"../functions/footer.php"; ?>
