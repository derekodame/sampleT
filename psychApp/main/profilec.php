
<?Php include "../functions/header.php";?>

<?php $ff = mysqli_query($con,"select * from client where email ='$emailss'");
while ($r=mysqli_fetch_array($ff)){
	$fu= $r['firstname'];
	$lu= $r['lastname'];
	$u= $r['username'];
	$ee= $r['email'];
	} ?>
<div id="sf"  >
<center><div id="p" style="height:40px;"   ><?Php $translate->__('Updates')?> </div></center>
<input id="firstn"  type="text" placeholder="<?Php $translate->__('First Name')?>"   value = "<?php 

echo $fu;
	?>"

 title="FirstName"

><br/>
<input title="LastName" id="lastn"  type="text" placeholder="<?Php $translate->__('Last Name')?>" value="<?php echo $lu;?>" ><br/>
<input  title="UserId"id="username" type="text" placeholder="<?Php $translate->__('User Id')?>" value="<?php echo $u; ?>" ><br/>

<input  title="Current Password" id="currentpass" type="password" placeholder="<?Php $translate->__('Current Password')?>" ><br/>
<span style="float:right;"><?Php $translate->__('Check here for new password')?> 
<input id="checku" style="width:30px; height:30px; float:;"    type="checkbox" ></span></br>
<input id="new"  title="New Password"   type="password" placeholder="<?Php $translate->__('New Password')?>">
<br/>
<input title="<?PHp echo $fu ." ". $lu . ', if done, click on the update button to update';?>" onClick="profileupdate();" type="button" value="<?Php $translate->__('Update')?>" >
<input title="<?PHp echo $fu ." ". $lu  . ', if done, click to delete';?>" onClick="profiledelete('<?php echo $emailss?>');" type="button" value="<?Php $translate->__('Delete Account')?>" >

</div>

<?Php include "../functions/footer.php";?>
<script type="text/javascript">

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