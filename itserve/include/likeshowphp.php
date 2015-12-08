<?php 
//include("ClassDatabase.php");
include("like.php");
//include("connection.php");
if(isset($_POST['article_id'],$idd) ){
	
	
	
	$article_id =$_POST['article_id'];
	if(previously_liked($article_id,$idd)=== false){
	//sub_like($article_id,$idd);
	sub_like($article_id,$idd);
		//echo "Already Liked";
		
		}else
			add_like($article_id,$idd);
				
		
	}

echo ' ';
	

?>