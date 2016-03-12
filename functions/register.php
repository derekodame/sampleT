<?php 
include"error.php";
include"connection.php";

session_start();

$id = $_SESSION['id'];
$emailss = $_SESSION['email'];
$lasts	= $_SESSION['lastname'];
$firsts = $_SESSION['firstname'];

echo $emailss;

//for date settings
$date = time();

$day = date('d', $date);
$month = date ('m', $date);
$year = date('Y', $date);
$first_day = mktime(0,0,0,$month, $day, $year);
$day_of_week = date('D', $first_day);
$first_day = mktime(0,0,0,$month, $day, $year);
$title= date('F', $first_day);

//echo "$month/$day/$year <br/>";
//echo " $day_of_week $title,$year <br/>";




$first =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['f'])));
$last = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['l'])));
$email =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['e'])));
$password = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['p'])));
$cpassword = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['pc'])));
//$done = $_POST['regdone'];
$datee = "  $title $day,$year";

//if email exist direct


	if($first){
		if($last){
			if($email){
				if((strlen($email) >= 7) && (strstr($email, "@")) && (strstr($email, "."))){
					if($password){
						if(strlen($password)>=4){
							if($password===$cpassword){
								
								$hpass = md5($password);

//inserting data to database
$query = mysqli_query($con,"SELECT * FROM client WHERE email = '$email'");
$numrows = mysqli_num_rows($query);
if($numrows==0){
$query = mysqli_query($con,"INSERT INTO client VALUES('','$first', '$last','123$last','$email','$hpass','$datee','0')");

echo ".";

//working with sessions

$_SESSION['email']=$email;

$_SESSION['lastname']= $lastname;
$_SESSION['firstname']= $firstname;


//getting user data
$query = mysqli_query($con,"SELECT * FROM client WHERE email = '$email'");
$numrows = mysqli_num_rows($query);
if($numrows ==1){
		while($row = mysqli_fetch_assoc($query)){
			$id = $row['id'];
		$dbemail = $row['email'];
			$dbfirstname = $row['firstname'];
			$dblastname = $row['lastname'];
			$dbpassword = $row['password'];
			$dboccupation = $row['date'];
			
			//working with sessions
			$_SESSION['id']= $id;
			$_SESSION['email']= $dbemail;
			$_SESSION['lastname']= $dblastname;
			$_SESSION['firstname']= $dbfirstname;
			
		
			}
				
		}
		 

		
		
	} else echo "User already exist";


		}else echo "Password do not match";
		}else echo "Password is too short";
		}else echo "Input password";
		}else echo "Email format not valid";
		}else echo "input email";
		}else echo "input lastname";
		}else echo  "input firstname";
		
		