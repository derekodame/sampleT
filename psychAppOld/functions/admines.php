<?php 
include"../functions/connection.php";
include"../functions/error.php";

 
 $k = mysqli_real_escape_string($con,trim($_GET['val']));
 $sel = mysqli_real_escape_string($con,trim($_GET['id']));
	 
$terms = explode(" ", $k);



$query = "select * from groupp where ";

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
while($row = mysqli_fetch_array($query)){
	
	 $y =$row[$sel]."<br/>";
	 
	
		 echo $y;
		 break;
		 
}

			 }
			 }
?>