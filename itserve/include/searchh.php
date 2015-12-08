  <?php 
	  error_reporting(E_ALL^E_NOTICE);
	 include("connection.php");
	  $k = mysqli_real_escape_string($con,trim($_GET['sv']));
	 
	  $terms = explode(" ", $k);
	  
	  
	  $query = "SELECT *
				FROM comment
				JOIN pannel ON comment.email = pannel.email
				WHERE  ";
	  
	  foreach($terms as $each){
		  
		 $i++;
		 
		 if(  $i==1)
			$query .= "comment.comment LIKE '%$each%' OR comment.email LIKE '%$each%' OR comment.name LIKE '%$each%' OR comment.date LIKE '%$each%' ";
			 
			 else
			 
			$query .= "OR comment.comment LIKE '%$each%' ";
			
	  }
		
			 	
//	mysql_connect("mysql.serversfree.com", "u331886198_as", "stecks0298");
     //   mysql_select_db("u331886198_as");		 

			 
			 $query = mysqli_query($con,$query);
			 $numrows = mysqli_num_rows($query);
			 
		
			 if(($k != "")){
			 if(($numrows > 0)) { 
			echo "<center><span style=\"color:green; margin-bottom:3px;\">Members' comment<em>(s)</em><br/></span></center>";
				 while($row = mysqli_fetch_assoc($query)){
					$id = $row['id'];
					
					$comment = $row['comment'];
					$date = $row['date'];
					$name = $row['name'];
					$e = $row['email'];
					$bg = $row['bgcolor'];
				
				
				


	
	$quew=mysqli_query($con,"SELECT * FROM itserve1 where email = '$e'");
	$rww=mysqli_fetch_array($quew);
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

	echo "<a style=\"margin-bottom:15px;\" href=\"otherprofile.php?email=$e\" title=\"Click to see $name's Profile\" > $dbimggg <span class=\"cn\" style=\"color:$bg\" >$name</span></a>";
					// ucfirst($comment)." - ".ucfirst($name)."<br/>"."<br/>";
					echo "<br/><div class=\"\"  >$comment </div><em>Posted on $date </em> <br/><div class=\"sline\" ></div><br/>";
					}
			
		
				 }
				 else echo "No result found for" ." "."<em style=\"text-decoration:;\">".ucfirst($k)."</em>"." on members' comment"
				 ."<br/>Search through google for <a target=\"new\" href=\"http://www.google.com/#q=$k\">"."<em style=\"text-decoration:underline; color:orange;\">".ucfirst($k)."</a>"."</em>
				  <br/>OR <br/>Search through bing for <a target=\"new\" href=\"http://www.bing.com/search?q=$k\">"."<em style=\"text-decoration:underline; color:orange;\">".ucfirst($k)."</a>"."</em>"
				  ."<br/>OR <br/>Search through facebook for <a target=\"new\" href=\"https://www.facebook.com/search/more/?q=$k\">"."<em style=\"text-decoration:underline; color:orange;\">".ucfirst($k)."</a>"."</em>";
			 }//else echo "No result found for" ."<em>"." "."Empty"."</em>"." comments";
		 
		  
	  mysqli_close($con);
	  
	  
	  ?>
	  
<script type="text/javascript">
function replaceString(sourceString, patternToFind, strReplacement) {
	var result = sourceString.replace(patternToFind,strReplacement);
	document.getElementById('search_downn').innerHTML = result;
}

var reg = /fuck/gi
var regg = /shit/gi;
var smile = /:\)/gi;


function doReplacement() {
replaceString(document.getElementById('search_downn').innerHTML,reg,"<span style='color:red;' >"+" <em >' <span style=''> ***</span> '</em> "+"</span>");
replaceString(document.getElementById('search_downn').innerHTML,regg,"<span style='color:red;'>"+" <em>' <span style=''>***</span> '</em> "+"</span>");
replaceString(document.getElementById('search_downn').innerHTML,smile,"<span style='display:inline-block;'>"+" <img src='../photos/smilee.png' width='15px' height='15px' /> "+"</span>");

}

doReplacement();


//for other

function replaceString(sourceString, patternToFind, strReplacement) {
	var result = sourceString.replace(patternToFind,strReplacement);
	document.getElementById('op').innerHTML = result;
}

var reg = /fuck/gi
var regg = /shit/gi;
var smile = /:\)/gi;


function doReplacement() {
replaceString(document.getElementById('op').innerHTML,reg,"<span style='color:red;' >"+" <em >' <span style=''> ***</span> '</em> "+"</span>");
replaceString(document.getElementById('op').innerHTML,regg,"<span style='color:red;'>"+" <em>' <span style=''>***</span> '</em> "+"</span>");
replaceString(document.getElementById('op').innerHTML,smile,"<span style='display:inline-block;'>"+" <img src='../photos/smilee.png' width='15px' height='15px' /> "+"</span>");

}

doReplacement();
</script>


