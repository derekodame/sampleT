<?php 
error_reporting(E_ALL^E_NOTICE);
include("ClassDatabase.php");

//include"connection.php";






function previously_liked($article_id,$iddd){

$article_id = (int)$article_id;	
	return mysqli_query($con,"SELECT COUNT(id) FROM liketb WHERE user_id = '$iddd' AND liked ='$article_id'")->num_rows? false:true;
	}

function like_count($article_id){
$article_id= (int)$article_id;
return mysqli_query($con,"SELECT likee FROM comment WHERE id = $article_id")->num_rows;	
return mysqli_query($con,"SELECT likeee FROM itserve1 WHERE id = $iddd")->num_rows;;	

//return mysql_result(mysql_query("SELECT likeee FROM itserve1 WHERE id = $iddd"),0,'likeee');	
	}

function like_countt($iddd){
$iddd= $iddd;

//$l = $q->num_rows;
return mysqli_query($con,"SELECT likeee FROM itserve1 WHERE id = $iddd")->num_rows;	
	}
	
function add_like($article_id,$iddd){
$article_id =(int)$article_id;
mysqli_query($con,"UPDATE comment SET likee = likee + 1 WHERE id = $article_id");

mysqli_query($con,"INSERT INTO liketb VALUES('','$iddd','$article_id')");	
	}


function sub_like($article_id,$iddd){
$article_id =(int)$article_id;


mysqli_query($con,"UPDATE comment SET likee = likee - 1 WHERE id = $article_id");

mysqli_query($con,"DELETE FROM liketb WHERE user_id='$iddd' AND liked='$article_id'");
	}
/*echo add_like(152,$idd);
echo $idd;
echo previously_liked(1,$idd);

if(previously_liked(1,$idd)=== true){
	echo "you've already";
	}
*/	
?>