<?php 
//error_reporting(E_ALL^E_NOTICE);
error_reporting(0);

session_start();
$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];
$occupation =$_SESSION['occupation'];
$fl = $first." ".$last;


include("connection.php");


if($emailss){
	
	}
else
header ("location: ../pages/regloginphp.php");

class DB{ 
	//header html
	
		
	//footer html
	function footer(){
		
		include("footer.php");
		
		}



	//for first and lastname
	function names($table,$emailss){
		include("connection.php");
	
	$query = mysqli_query($con,"SELECT * FROM $table WHERE email = '$emailss'");
	while($row = mysqli_fetch_array($query)){
	echo ucfirst($row['firstname'])." ".ucfirst($row['lastname']);

		
		}
	
     }
	 //for email
	function email($table,$emailss){
			include("connection.php");
	$query = mysqli_query($con,"SELECT * FROM $table WHERE email = '$emailss'");
	while($row = mysqli_fetch_array($query)){
	echo $row['email'];
		}
	}
	 
	 //for occupation
	 
	function occup($table,$emailss){
			include("connection.php");
	$query = mysqli_query($con,"SELECT * FROM $table WHERE email = '$emailss'");
	while($row = mysqli_fetch_array($query)){
	
	if( $row['occupation'] ==''){
		echo "Not Given";
		
		}else
		echo ucfirst($row['occupation']);
		}
	} 
	
	//about
	
	function about($table,$emailss){
	
		include("connection.php");
	$query = mysqli_query($con,"SELECT * FROM $table WHERE email = '$emailss'");
	while($row = mysqli_fetch_array($query)){
	
		if( $row['about'] == ''){
		echo "Not Given Yet";
		
		}
		else
		echo  ucfirst(($row['about']));
		
		}
	}
	//for sex
	
	function sex($table,$emailss){
			include("connection.php");
	$query = mysqli_query($con,"SELECT * FROM $table WHERE email = '$emailss'");
	while($row = mysqli_fetch_array($query)){
	if( $row['sex'] ==''){
		echo "Not Given";
		
		}
		else
		echo $row['sex'];
		}
	} 
	
	//for registration
	
	function reg($table,$emailss){
			include("connection.php");
	$query = mysqli_query($con,"SELECT * FROM $table WHERE email = '$emailss'");
	while($row = mysqli_fetch_array($query)){
	echo $row['date'];
		}
	} 
	
	//for pass
	
	function pass($table,$emailss){
			include("connection.php");
	$query = mysqli_query($con,"SELECT * FROM $table WHERE email = '$emailss'");
	while($row = mysqli_fetch_array($query)){
	echo $row['password'];
		}
	} 
	
	//firstname
	
	
		function firstname($table,$emailss){
				include("connection.php");
	$query = mysqli_query($con,"SELECT * FROM $table WHERE email = '$emailss'");
	while($row = mysqli_fetch_array($query)){
	
		if( $row['firstname'] ==''){
		echo "Not Give";
		
		}
		echo ucfirst($row['firstname']);
		}
	} 
	
	//lastame
	
		function lastname($table,$emailss){
				include("connection.php");
	$query = mysqli_query($con,"SELECT * FROM $table WHERE email = '$emailss'");
	while($row = mysqli_fetch_array($query)){
	
		if( $row['lastname'] ==''){
		echo "Not Give";
		
		}
		echo ucfirst($row['lastname']);
		}
	}
	 
	
	//image upload
	
	function image(){
include("picture.php");
		}
	
	
	//image for home
	
	function imagehome(){
include("homepic.php");
		}
	
	
	//update
	function delate(){
			include("connection.php");
	mysqli_query($con,"DELETE * FROM comment WHERE email = '$emailss'");

	}
	
	//message inbox
	function inbox($table,$emailss,$emailsss){
			include("connection.php");
		
					
$pages_query = mysqli_query($con,"SELECT COUNT(*) From $table");
$per_page = 5;


$pages = ceil(mysql_result($pages_query,0)/$per_page);
$page = (isset($_GET['page'])) ? (int)$_GET['page']:1;
$start = ($page - 1)* $per_page;

	
	$query = mysqli_query($con,"SELECT * FROM $table WHERE otheremail='$emailss' ORDER by date ASC  LIMIT $start, $per_page ");

	while($row = mysqli_fetch_array($query)){
		$namemsg = $row['name'];
		$datemsg = $row['date'];
		$emialmsg = $row['otheremail'];
		//if(($email1==$email2)){
		
	 echo "<span style=\"font-size:12px; \">From</span> "
	 ."<span style=\"border-bottom: 1px dotted white;\">"
      .$namemsg.
	 "</span>"."<br/>"
	."<div class=\"cccc\" style=\" font-size:12px; \">" . ucfirst($row['msg'])."</div>".
	 
	 
	"<span style=\"color:black; font-size:10px; float:right;\"><em>$datemsg</em></span><div class=\"downmsg\"><br/></div>";
		//	}
		
	

		
		
	 		}
	
		
	if(($page)<$pages-1){

	$page=$page +1;
	$n= '<a href=otherprofile.php?email='.$emailss.'&'.'page='.$page.'>'.'<span style=\'color:#666; font-size:12px; float:right;\'>'.">>>".'</span>'.'</a>';
	echo $n;
	}
	else{
	echo	$n="";
	echo "<span style='color:#666; font-size:12px; float:right;'>End of messages</span>";
	}
	
	}
	
	
	
	
	//for message inboxno
	
	function next_back(){
		echo "www";
	

		}
	
	
	
	
	function nameee($emailsss){
			include("connection.php");
		
	$query = mysqli_query($con,"SELECT * FROM itserve1 WHERE email='$emailsss'");
	while($roww = mysql_fetch_array($query)){
		echo $roww['firstname'];
		
		}
	}
	
	
	function showprofile($email){
	//include("profileeephp.php");
		
		}
		
//for color section

function color($emailss,$sessioncolor){
		include("connection.php");
			$query=mysqli_query($con,"SELECT * FROM pannel where email = '$emailss'");
$row=mysqli_fetch_array($query);
	$bg = $row['bgcolor'];
	
	$sessioncolor = $_POST['sessioncolor'];

if($sessioncolor){
	$query=mysqli_query($con,"SELECT * FROM pannel WHERE email ='$emailss'");
	$num =mysqli_num_rows($query);
	if($num == 1){
	mysqli_query($con,"UPDATE pannel SET email ='$emailss', bgcolor = '$sessioncolor'  WHERE email ='$emailss'");

	//header("location: connection.php");
	
		}
	
	}
	else
	if($bg ==""){
		echo "Session_Color";
		}
		else
		
		echo $bg;
	
	}

	
}
$db = new DB();


//echo $db->names("itserve1","jennifer@hotmail.com");
	





?>