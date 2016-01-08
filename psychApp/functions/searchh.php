<?php 
include"error.php";
require("connection.php");

session_start();
$emailss = $_SESSION['email'];

 $k = mysqli_real_escape_string($con,trim($_GET['sv']));
$select =  mysqli_real_escape_string($con,trim($_GET['sel']));
 switch ($select) {
	   case "Age":
        $sel = "Age";
        break;
    case "Stage of Change":
        $sel = "Stage_of_Change";
        break;
    case "Symptoms & Disorders":
         $sel = "Symptoms_and_Disorders";
        break;
    case "Psychological Treatment":
        $sel = "Psychological_Treatment";
        break;
	 case "Evidence Level":
        $sel = "Evidence_Level";
        break;
	 case "Basis for Evidence":
        $sel = "Basis_for_Evidence";
        break;
    
    
    default:
        $sel = $select;
}
 
 
 
 $kk = $_GET['sv'];
	 
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
			 
echo "<table border='1' id='groupd'  style='background-color:grey;'  ><tr ><td><div style='width:80px; overflow-x: hidden;'>age</div></td><td ><center><div style='width:140px; overflow-x: hidden;'>stage of change</div></center></td><td><center><div style='width:140px; overflow-x: hidden;'>Symptoms and Disorders</div></center></td><td><center><div style='width:200px; overflow-x: hidden;'>Psychological Treatment</div></center></td><td><center><div style='width:120px; overflow-x: hidden;'>Evidence Level</div></center></td><td><center><div style='width:500px; overflow-x: hidden;'>Basis for Evidence</div></center></td></tr></table>";
			
while($row=mysqli_fetch_array($query)){
	$age =ucfirst( $row['Age']);
	$Stage_of_Change =ucfirst( $row['Stage_of_Change']);
	$Symptoms_and_Disorders = ucfirst($row['Symptoms_and_Disorders']);
	$Psychological_Treatment =ucfirst( $row['Psychological_Treatment']);
	$Evidence_Level = ucfirst($row['Evidence_Level']);
	$Basis_for_Evidence =ucfirst( $row['Basis_for_Evidence']);
	
	$id = ($row['id']);
	
	echo "<table border='1' id='groupf'><tr ><td><div style='width:80px; overflow-x: hidden;'>$age</div></td><td><div style='width:140px; overflow-x: hidden;'>$Stage_of_Change</div></td><td><div style='width:140px; overflow-x: hidden;'>$Symptoms_and_Disorders</div></td><td><div style='width:200px; overflow-x: hidden;'>$Psychological_Treatment</div></td><td> <div style='width:120px; overflow-x: hidden;'>$Evidence_Level</div></td><td><div style='width:500px; height:80px; overflow-x: hidden;' contenteditable='false' >$Basis_for_Evidence </div></td></tr></table>";
}
echo "<br/><br/><br/><table border='1' id='groupp'  style='background-color:;'  ><tr ><td><div style='width:80px; overflow-x: hidden;'>age</div></td><td ><center><div style='width:140px; overflow-x: hidden;'>stage of change</div></center></td><td><center><div style='width:140px; overflow-x: hidden;'>Symptoms and Disorders</div></center></td><td><center><div style='width:200px; overflow-x: hidden;'>Psychological Treatment</div></center></td><td><center><div style='width:120px; overflow-x: hidden;'>Evidence Level</div></center></td><td><center><div style='width:500px; overflow-x: hidden;'>Basis for Evidence</div></center></td></tr></table>";
			 
			 }else echo "<span style='font-size:30px;'>No result found for <span style='color:orange;'>$k</span> on <span style='color:green;'>$select</span></span>";
			 }else echo "Type whatever you are serching for in the search field";



?>
<script type="text/javascript">

$('#groupp').hide();
/*function replaceString(sourceString, patternToFind, strReplacement) {
	var result = sourceString.replace(patternToFind,strReplacement);
	document.getElementById('search_result').innerHTML = result;
}

var reg = /<?php //echo $k;?>/gi



function doReplacement() {
replaceString(document.getElementById('search_result').innerHTML,reg,"<span style='color:red;' >"+" <em >' <span style=''> "+"<?php //echo $k; ?>"+"</span> '</em> "+"</span>");


}

doReplacement();*/

</script>