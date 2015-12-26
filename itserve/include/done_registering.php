<?php
//error_reporting(E_ALL ^ E_NOTICE);
require("../include/connection.php");
error_reporting(0);
session_start();

$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['di'];
$occupation = $_SESSION['occupation'];
$fl=$first." ".$last;


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$occupation = $_POST['occupation'];
$sex = $_POST['sex'];
$age = $_POST['age'];



if($_POST['done']){
	if($firstname){
		if($lastname){
			if($email){
				if((strlen($email) >= 7) && (strstr($email, "@")) && (strstr($email, "."))){
					if($password){
						if(strlen($password)>=4){
							if($occupation){
								if($sex){
									
$query = mysqli_query($con,"SELECT * FROM itserve1 WHERE email = '$email'");
 $numrows = mysql_num_rows($query);
	 if ($numrows == 0 ){
	$date = date("F d, Y");
	$code = md5(rand()); 
							 
$query = mysqli_query($con,"INSERT INTO itserve1 VALUES('','$firstname', '$lastname','$email','$password','$occupation','$sex', '$age','$date','$code','','','','')");
		/*$webmaster = "Your Itserve <attrams.shop@gmail.com>";
		$header = "From: $webmaster";
		$site = "http://itserve.bugs3.com \n";
		$message = "Thanks for being part of us.\n ";
		$message .= "$site/activate.php?id=$is \n";
			
		 mail($email,$webmaster,$message,$header); 
		header("location: ./completeregistration.php");*/

$_SESSION['email']=$email;

$_SESSION['lastname']= $lastname;
$_SESSION['firstname']= $firstname;
$_SESSION['id']= $id;
$_SESSION['occupation']= $occupation;


$query = mysqli_query($con,"SELECT * FROM itserve1 WHERE email = '$email'");
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
$p = $_GET['email'];
if( $p ){
	header("location: ./otherprofile.php?email=$p");
	}else
header("location: ./homee.php");

				echo "You can now login";

			
			}
										 else
										 $ss = "Email Already taken";
									 
									
									mysql_close();
									}
									else
									$ss ="Select Sex";
								}
								else
								$ss = "Input Occupation";
							}
							else
							$ss = "Password lenght must be more than four characters";
						}	
						else
						$ss = "Input Password";
				}
				else 
				$ss = "Invalid Email";
				}
				else 
				$ss = "Input Email";
			}
			else
			$ss = "Input Last Name";
		}
		else
		$ss = "Input First Name";
}
else {
$p = $_GET['email'];
$pp = mysqli_query($con,"SELECT * FROM itserve1 WHERE email = '$p'");
$rp = mysqli_fetch_array($pp);
$pe = $rp['firstname']." ".$rp['lastname']."'s";

if( $p ){
	echo "Register to see $pe profile";
	}else{
echo "Register for free and let's Tip ";
	}
}
?>		

