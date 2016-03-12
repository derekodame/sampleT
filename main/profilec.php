
<?Php include "../functions/header.php";?>

<?php $ff = mysqli_query($con,"select * from client where email ='$emailss'");
while ($r=mysqli_fetch_array($ff)){
	$fu= $r['firstname'];
	$lu= $r['lastname'];
	$u= $r['username'];
	} ?>
<div id="sf"  >
<center><div id="p" style="height:40px;"   >Updates </div></center>
<input id="firstn"  type="text" placeholder="Frist"   value = "<?php 

echo $fu;
	?>"

 title="FirstName"

><br/>
<input title="LastName" id="lastn"  type="text" placeholder="Last Name" value="<?php echo $lu;?>" ><br/>
<input  title="UserId"id="username" type="text" placeholder="User Id" value="<?php echo $u; ?>" ><br/>

<input  title="Current Password" id="currentpass" type="password" placeholder="Current Password" ><br/>
<span style="float:right;"> Check here for new password 
<input id="checku" style="width:30px; height:30px; float:;"    type="checkbox" ></span></br>
<input id="new"  title="New Password"   type="password" placeholder="New Password">
<br/>
<input title="<?PHp echo $fu ." ". $lu . ', if done click on the update button to update';?>" onClick="profileupdate();" type="button" value="Update" >

</div>

<?Php include "../functions/footer.php";?><script type="text/javascript">

//for check new password
 document.getElementById('new').disabled=true;
 
 $('#checku').click(function (){
	 
	if($("#checku").is(':checked')){

		 document.getElementById('new').disabled=false;
	}else {
	 document.getElementById('new').disabled=true;
	  document.getElementById('new').value="";
	}
	 });
</script>