<?php 
error_reporting(0);
session_start();
$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['di'];
$occupation = $_SESSION['occupation'];
$fl=$first." ".$last;



$firstnameE = $_POST['firstname'];
$lastnameE = $_POST['lastname'];
$emailE = $_POST['email'];
$passwordE = $_POST['password'];
$sexE = $_POST['sex'];
$occupationE = $_POST['occupation'];
$done = $_POST['done'];
$names = $firstnameE." ".$lastnameE;



if($done){
	$query = "UPDATE itserve1 SET firstname = '$firstnameE'  WHERE email ='$emailss'";

	mysqli_query($con,$query);
	
	mysqli_query($con,"UPDATE comment SET name = '$names'  WHERE email ='$emailss'");
	mysqli_query($con,"UPDATE reply SET name = '$names'  WHERE email ='$emailss'");
	
	
	if(mysqli_query($con,$query)){
	$query = "UPDATE itserve1 SET lastname = '$lastnameE'  WHERE email ='$emailss'";

	mysqli_query($con,$query);
	
		if(mysqli_query($query)){
			$query = "UPDATE itserve1 SET password = '$passwordE'  WHERE email ='$emailss'";

	mysqli_query($con,$query);
	if(mysqli_query($con,$query)){
		$query = "UPDATE itserve1 SET occupation = '$occupationE'  WHERE email ='$emailss'";
		mysqli_query($con,$query);
		
$query = mysqli_query($con,"SELECT * FROM itserve1 WHERE email = '$emailss'");
$numrows = mysqli_num_rows($query);
if($numrows ==1){
		while($row = mysqli_fetch_assoc($query)){
		$dbemail = $row['email'];
			$dbfirstname = $row['firstname'];
			$dblastname = $row['lastname'];
			$dbpassword = $row['password'];
			$dboccupation = $row['occupation'];
			$dbsex = $row['sex'];
			$dbpicture = $row['picture'];
			$dbid = $row['id'];
			
		$_SESSION['email']= $dbemail;
			$_SESSION['lastname']= $dblastname;
			$_SESSION['firstname']= $dbfirstname;
			$_SESSION['id']= $dbid;
			$_SESSION['occupation']= $dboccupation;
			
		}}
	header ("location: ../pages/edit.php");
		}
	}
}
}

?>