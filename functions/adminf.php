
<script type="text/javascript" src="../javascript/jquery-1.11.3.min.js"></script>
<?php 
include("connection.php");

function clientAll($con){
$query = mysqli_query($con,"SELECT * FROM client order by date DESC");


//$query = mysqli_query($con,"SELECT * FROM client JOIN admin_pass ON client.email = admin_pass.email   ORDER BY client.id DESC");

echo"<table id='clientalh' >" . " <tr><td>id</td> <td>Firstname</td><td>Lastname</td><td title='$email'>Email</td><td title='$date'>date </td><td><span >Act/Deact</span></td> <td><span >Check for Addmin</span></td></tr>"."</table>";
echo "<table id='cliental' >";
while(($row=mysqli_fetch_array($query))){
	
	
	
	
	$first= $row['firstname'];
	$last= $row['lastname'];
	$email= $row['email'];
	$date= $row['date'];
	$id= $row['id'];
	$a= $row['act'];
	$pp= $row['password'];
	
	$lenE = ucfirst(substr($email, 0, 23));
	
	if($a==1){
		$aa = "Active";
		$radioc ="Checked";
		}else {$aa = "Deactive"; $radioc ="";}
		
		if($a==0){
		
		$radiocc ="Checked";
		}else { 
		$radiocc ="";}
		
		$queryy = mysqli_query($con,"SELECT * FROM admin_pass where cid='$id'");
		$rowe=mysqli_fetch_array($queryy);
		$ae= $rowe['email'];
	if($email==$ae){
		$ade = "Admin";
		$check="Checked";
		}else{ $ade = "Client"; $check="";}
	
	
echo "  <tr><td><a href='#'>$id</a></td> <td>$first</td><td>$last</td><td title='$email'>$lenE</td><td title='$date'>$date </td><td title=''><input $radioc  name='c$id' type='radio' value='act' onclick=\"act(1,'$id')\"
 >Act <input  $radiocc onclick=\"act('0','$id')\" chedcked name='c$id' type='radio' value='deact'
 >Deact.<span  style='color:white; background-color:orange; font-size:9px;' id='acc$id'>$aa</span></td><td><span  ><input  $check onClick=\"checkaddmin('$id','$first','$last','$email','$pp','$ade')\"  value='checka' type=\"checkbox\" ><span id=\"adde$id\">$ade</span></span></td> </tr>";
	
	}
	echo "</table>";
	}

function pagination($con){
	
	$queryt = mysqli_query($con, "select * from groupp order by id DESC ");

$num =mysqli_num_rows($queryt);
$div = ($num/25);
$p= ceil($div);
$pp= ceil($div)-1;


//javascript for next/preview
echo"<script type='text/javascript'>



	function tn(){
	var o =$('#hidden').text();
	
	if(o>=$pp){
		$('#nextt').hide(); 
			//document.getElementById('nextt').disabled=true;
		}}

function tp(){
	var o =$('#hidden').text();
	
	if(o<=$p){
		$('#nextt').show();
//document.getElementById('nextt').disabled=false;
		}
	
	
	
	}


$('#'+$b).click(function(){
	
	alert($b);
	
	});
</script>";

//pagination	

$b =1;

echo "<script  type='text/javascript'>

</script>";
for($b; $b<=$p; $b++){
	

	
	echo "<button id='$b' href='$cc'  onClick='pag($b);'  style=''>$b</button>";
	
 $pd = $p+1;
	echo"<script type='text/javascript'>
	
	
	
	
	$('#'+$b).click(function(){
		var cc =$('#'+$b).text();
		
		
		if($b==$p||$b==$pd){
		$('#nextt').hide();
		}else {
			$('#nextt').show();
		}
		 
			
		});
		
		$('#page2').click(function(){
		
		$('#nextt').hide();
		
		 });
		
		
	</script>";
	
	//page2 display
	if($p>35){
		echo"<script type='text/javascript'>
	document.getElementById('left_p').style.display = 'block';


	</script>";
	}else{
		echo"<script type='text/javascript'>
	document.getElementById('left_p').style.display = 'none';
		//document.getElementById('nextt').style.display = 'none';
	</script>";
		}
		
	
	}
	
	
	}
















?>