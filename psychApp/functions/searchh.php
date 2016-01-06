<?php 


 error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");

session_start();
$emailss = $_SESSION['email'];

 $k = mysqli_real_escape_string($con,trim($_GET['sv']));
 
 $kk = $_GET['sv'];
	 
$terms = explode(" ", $k);



$query = "select * from groupp where ";

 foreach($terms as $each){
	 
		  
		 $i++;
		 
		 if(  $i==1)
			$query .= "Stage_of_Change LIKE '%$each%' OR Symptoms_and_Disorders LIKE '%$each%' OR Psychological_Treatment LIKE '%$each%' OR Evidence_Level LIKE '%$each%' OR Basis_for_Evidence LIKE '%$each%' ";
			 
			 else
			 
			$query .= " OR Stage_of_Change LIKE '%$each%' OR Symptoms_and_Disorders LIKE '%$each%' OR Psychological_Treatment LIKE '%$each%' OR Evidence_Level LIKE '%$each%' OR Basis_for_Evidence LIKE '%$each%' ";
			
	  }
	 
	  $query = mysqli_query($con,$query);
	$numrows = mysqli_num_rows($query);
			 
	if(($k != "")){
			 if(($numrows > 0)) { 
			 
echo "<table border='1' id='groudp'  style='background-color:grey;'  ><tr ><td><div style='width:80px; overflow-x: hidden;'>age</div></td><td ><center><div style='width:140px; overflow-x: hidden;'>stage of change</div></center></td><td><center><div style='width:140px; overflow-x: hidden;'>Symptoms and Disorders</div></center></td><td><center><div style='width:200px; overflow-x: hidden;'>Psychological Treatment</div></center></td><td><center><div style='width:120px; overflow-x: hidden;'>Evidence Level</div></center></td><td><center><div style='width:400px; overflow-x: hidden;'>Basis for Evidence</div></center></td></tr></table>";
			
while($row=mysqli_fetch_array($query)){
	$age =ucfirst( $row['Age']);
	$Stage_of_Change =ucfirst( $row['Stage_of_Change']);
	$Symptoms_and_Disorders = ucfirst($row['Symptoms_and_Disorders']);
	$Psychological_Treatment =ucfirst( $row['Psychological_Treatment']);
	$Evidence_Level = ucfirst($row['Evidence_Level']);
	$Basis_for_Evidence =ucfirst( $row['Basis_for_Evidence']);
	
	$id = ($row['id']);
	
	echo "<table border='1' id='groupf'><tr ><td><div style='width:80px; overflow-x: hidden;'>$age</div></td><td><div style='width:140px; overflow-x: hidden;'>$Stage_of_Change</div></td><td><div style='width:140px; overflow-x: hidden;'>$Symptoms_and_Disorders</div></td><td><div style='width:200px; overflow-x: hidden;'>$Psychological_Treatment</div></td><td> <div style='width:120px; overflow-x: hidden;'>$Evidence_Level</div></td><td><div style='width:400px; height:80px; overflow-x: hidden;' contenteditable='true' >$Basis_for_Evidence </div></td></tr></table>";
}
			 
			 }else echo "no result found for $k";
			 }else echo "Type whatever you are serching for in the search field";



?>

