  <?php 
	  error_reporting(E_ALL^E_NOTICE);
	 include("connection.php");
	  $k = mysql_real_escape_string(trim($_GET['sv']));
	 
	  $terms = explode(" ", $k);
	  
	  
	  $query = "SELECT *
				FROM itserve1
				JOIN pannel ON itserve1.email = pannel.email
				WHERE  ";
	  
	  foreach($terms as $each){
		  
		 $i++;
		 
		 if($i == 1)
			$query .= "itserve1.firstname LIKE '%$each%' OR itserve1.email LIKE '%$each%' OR itserve1.lastname LIKE '%$each%' ";
			 
			 else
			 
			$query .= "OR itserve1.email LIKE '%$each%' ";
			
	  }
		
			 
			 $query = mysql_query($query);
			 $numrows = mysql_num_rows($query);
			 
		
			 if(($k != "")){
			 if(($numrows > 0)) { 
			 echo "<center><span style=\"color:green; margin-bottom:3px;\">People on IT serve<br/></span></center>";
				 while($row = mysql_fetch_assoc($query)){
					$id = $row['id'];
					
					$first = $row['firstname'];
					$date = $row['date'];
					$last = $row['lastname'];
					$e = $row['email'];
					$bg = $row['bgcolor'];
				
				
				


	
	$quew=mysql_query("SELECT * FROM itserve1 where email = '$e'");
	$rww=mysql_fetch_array($quew);
	$dbpicutrehide = $rww['picturehide'];
	$picn = $rww['firstname'];
	$pic = $rww['picture'];
	$eew = $rww['email'];
		if($dbpicutrehide == 1){
		$dbimggg = "<img  class=\"homep\"  width=\"20px\" height=\"20px\" src=\"../images/$pic\">";
		}
		else
		$dbimggg = "<img  class=\"\" style=\"height:20px; width:20px; 	background-size:auto;\"  src='../photos/no-photo.png' />";
	


	





	
				
				
					$dbimg = "<span><img   class=\"homep\"   width=\"25px\" height=\"25px\" src=./profileshowpicture.php?email=$e></span>";

	echo "<a style=\"margin-bottom:15px;\" href=\"otherprofile.php?email=$e\" title=\"Click to see $first $last's Profile\" > $dbimggg <span class=\"cn\" style=\"color:$bg\" >$first $last</span></a><br/><div class=\"sline\"></div><br/>";
	
					}
			
		echo "<br/> Number of result";
				 }
				 else echo "No result found for"." " ."<em style=\"text-decoration:underline;\">".ucfirst($k)."</em>"." of people on IT serve";
			 }else echo "No result found for" ."<em>"." "."Empty"."</em>"." names";
		 
		  
	  mysql_close();
	  
	  
	  ?>
	  
<script type="text/javascript">
function replaceString(sourceString, patternToFind, strReplacement) {
	var result = sourceString.replace(patternToFind,strReplacement);
	document.getElementById('sss').innerHTML = result;
}

var reg = /fuck/gi
var regg = /shit/gi;

function doReplacement() {
replaceString(document.getElementById('sss').innerHTML,reg,"<span style='color:red;' >"+" <em >' <span style='text-decoration:line-through;'> (f**k)</span> '</em> "+"</span>");
replaceString(document.getElementById('sss').innerHTML,regg,"<span style='color:red;'>"+" <em>' <span style='text-decoration:line-through;'>(sh*t)</span> '</em> "+"</span>");
}

doReplacement();

</script>
<script src="../javascript/jquery-1.8.3.min.js"></script>
<script src="../javascript/picture_edit.js"></script>
