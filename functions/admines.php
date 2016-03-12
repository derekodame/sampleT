<?php 
include"../functions/connection.php";
include"../functions/error.php";

 
 $k = mysqli_real_escape_string($con,trim($_GET['val']));
 $sel = mysqli_real_escape_string($con,trim($_GET['id']));
	 
$terms = explode(" ", $k);



$query = "select * from dropbox where ";

 foreach($terms as $each){
	 
		  
		 $i++;
		 
		 if(  $i==1){
			$query .= " $sel LIKE '%$each%'  ";
		 }
			 else{
			 
			$query .= " OR $sel LIKE '%$each%' ";
			 }
			
	  }
	  	



	 
	 
	  $query = mysqli_query($con,$query);
	$numrows = mysqli_num_rows($query);
			 
if(($k != "")){
if(($numrows > 0)) { 

$c =0;

while($row= mysqli_fetch_array($query)){
	$c++;
	$a= $row[$sel];
	
	
	if($a==1 OR $a=="****" OR $a=="" ){
		echo "<option style='display:none;'>$a</option>";
		}else{ echo  "<option  style=\"cursor:pointer; border-left:5px solid #eee;  margin-bottom:3px; z-index:3300; \" id=\"$c$sel\"  onClick=\"results('$c$sel','$sel');\">$a </option>";
		
		}
	
	
	}

			 }
			 }
?>