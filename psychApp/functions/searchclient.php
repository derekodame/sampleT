  <?php 
	  error_reporting(E_ALL^E_NOTICE);
	 include("connection.php");
	  $k = mysqli_real_escape_string($con,trim($_GET['cl']));
	 
	  $terms = explode(" ", $k);
	  
	  
	  $query = "SELECT * FROM client WHERE  ";
	  
	  foreach($terms as $each){
		  
		 $i++;
		 
		 if(  $i==1)
			$query .= "firstname LIKE '%$each%' OR lastname LIKE '%$each%' ";
			 
			 else
			 
			$query .= "OR firstname LIKE '%$each%' ";
			
	  }
		
	 
			 $query = mysqli_query($con,$query);
			 $numrows = mysqli_num_rows($query);
			 
		
			 if(($k != "")){
			 if(($numrows > 0)) { 
			 
echo"<table id='clientalh' >" . " <tr><td>id</td> <td>Firstname</td><td>Lastname</td><td title='$email'>Email</td><td title='$date'>date </td><td><span >Act/Deact</span></td> <td><span >Check for Addmin</span></td></tr>"."</table>";
echo "<table id='cliental' >";
			
				 while($row = mysqli_fetch_assoc($query)){
				
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

				 }else echo "Info was not found";

	
	
 }else
 echo"<table id='clientalh' >" . " <tr><td>id</td> <td>Firstname</td><td>Lastname</td><td title='$email'>Email</td><td title='$date'>date </td><td><span >Act/Deact</span></td> <td><span >Check for Addmin</span></td></tr>"."</table>";
 
  echo "<table id='cliental' >";
			
				 while($row = mysqli_fetch_assoc($query)){
				
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

				
	
