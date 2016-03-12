<?php 
include"error.php";
require("connection.php");

session_start();
$emailss = $_SESSION['email'];

 $k = mysqli_real_escape_string($con,trim($_GET['sv']));
$sel =  mysqli_real_escape_string($con,trim($_GET['sel']));
$sel2 =  mysqli_real_escape_string($con,trim($_GET['sel2']));
$sel3 =  mysqli_real_escape_string($con,trim($_GET['sel3']));
 
 




$query = "select * from groupp  where (Age = '$sel') and (Stage_of_Change = '$sel2') and (Symptoms_and_Disorders= '$sel3') order by  ranking DESC , Psychological_Treatment  ";
	 
	  $query = mysqli_query($con,$query);
	$numrows = mysqli_num_rows($query);
			 
	if($sel!="Age"){
		if($sel2!="Stage of Change"){
			if($sel3!="Symptoms and Disorders"){
			 if(($numrows > 0)) { 
			 
echo "<table  id='groupd'  style='background-color:s;'  ><tr ><td><center><div style='width:80px; overflow-x: hidden;'>Age</div></center></td><td ><center><div style='width:140px; overflow-x: hidden;'>Stage of change</div></center></td><td><center><div style='width:140px; overflow-x: hidden;'>Symptoms and Disorders</div></center></td><td><center><div style='width:200px; overflow-x: hidden;'>Psychological Treatment</div></center></td><td><center><div style='width:120px; overflow-x: hidden;'>Evidence Level</div></center></td><td><center><div style='width:500px; overflow-x: hidden;'>Basis for Evidence</div></center></td></tr></table>";

		
while($row=mysqli_fetch_array($query)){
	$age =ucfirst( $row['Age']);
	$Stage_of_Change =ucfirst( $row['Stage_of_Change']);
	$Symptoms_and_Disorders = ucfirst($row['Symptoms_and_Disorders']);
	$Psychological_Treatment =ucfirst( $row['Psychological_Treatment']);
	$Evidence_Level = ucfirst($row['Evidence_Level']);
	$Basis_for_Evidence =ucfirst( $row['Basis_for_Evidence']);
	
	$id = ($row['id']);
	
	echo "<table  id='groupf'  class='$id'><tr ><td><div style='width:80px; overflow-x: hidden;'> $age</div></td><td><div style='width:140px; overflow-x: hidden;'>$Stage_of_Change</div></td><td><div style='width:140px; overflow-x: hidden;'>$Symptoms_and_Disorders</div></td><td><div style='width:200px; overflow-x: hidden;'>$Psychological_Treatment</div></td><td> <div style='width:120px; overflow-x: hidden;'>$Evidence_Level</div></td><td><div style='width:500px; height:80px; overflow-x: hidden;' contenteditable='false' >$Basis_for_Evidence </div></td></tr></table>";
}
echo "<br/><br/><br/><table border='1' id='groupp'  style='background-color:;'  ><tr ><td><center><div style='width:80px; overflow-x: hidden;'>Age</div></center></td><td ><center><div style='width:140px; overflow-x: hidden;'>Stage of change</div></center></td><td><center><div style='width:140px; overflow-x: hidden;'>Symptoms and Disorders</div></center></td><td><center><div style='width:200px; overflow-x: hidden;'>Psychological Treatment</div></center></td><td><center><div style='width:120px; overflow-x: hidden;'>Evidence Level</div></center></td><td><center><div style='width:500px; overflow-x: hidden;'>Basis for Evidence</div></center></td></tr></table>";
			 
			 }else echo "<span style='font-size:30px;'>No result found </span>";
	}else echo " <br/><br/><br/><br/><br/><br/><br/><span style='font-size:25px; color:green;'>You did not select </span> <span style='font-size:40px; color:orange;'>Symptoms and Disorders</span><span style='font-size:25px; color:green;'> section</span>";	
	}else echo "<br/><br/><br/><br/><br/><br/><br/><span style='font-size:25px; color:green;'> You did not select</span> <span style='font-size:40px; color:orange;'>Stage of Change </span><span style='font-size:25px; color:green;'>section</span>";		
	}else echo "<br/><br/><br/><br/><br/><br/><span style='font-size:25px; color:green;'> You did not select</span> <span style='font-size:40px; color:orange;'> Age </span><span style='font-size:25px; color:green;'>group!</span>";




//pop---


$queryd = mysqli_query($con,"select * from popout where email = '$emailss'");
$num = mysqli_num_rows($queryd);
if($num<1){
$query = mysqli_query($con,"insert into popout values('id','$emailss','$stage')");
}else 
{
//updating count
mysqli_query($con,"UPDATE popout SET count = count + 1   WHERE email ='$emailss'");
$qfecth = mysqli_query($con,"SELECT * FROM popout where email = '$emailss'");

$row=mysqli_fetch_array($qfecth);

//if 5 show pop			
if($row['count']==7){
	
echo "<script type='text/javascript'>
$('#pop').show();
</script>";

//reset to 0
mysqli_query($con,"UPDATE popout SET count = 0   WHERE email ='$emailss'");
	
	}
	

			
			
			
}

?>




<script type='text/javascript'>


//alert('$emailss');

$('#groupp').hide();


</script>