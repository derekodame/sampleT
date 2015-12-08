<?php 

include("like.php");

if(isset($_POST['article_id'],$idd) ){
	
	
	echo like_count($_POST['article_id']);
	}






?>