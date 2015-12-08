<?php 
error_reporting(E_ALL^E_NOTICE);
include("connection.php");
$error_UP = array(
UPLOAD_ERR_OK =>"NO ERRORS.",
UPLOAD_ERR_INI_SIZE=>"lARGER THAN UPLADE_MAX_FILESIZE",
UPLOAD_ERR_FORM_SIZE=>"LARGER THAN FORM MAX_FILE_SIZE.",
UPLOAD_ERR_PARTIAL=>"PARTIAL UPLOAD.",
UPLOAD_ERR_NO_FILE=>"NO FILE.",
UPLOAD_ERR_NO_TMP_DIR=>"NO TEMPORARY DIRECTORY.",
UPLOAD_ERR_CONT_WRITE=>"CAN'T WRITE TO DISK.",
UPLOAD_ERR_EXTENSION=>"FILE UPLOAD STOPPED BY EXTENSION"
);
?>
<?php 
$error = $_FILES['file']['error'];
//echo $error_UP[$error];
//echo "<hr/>";
//echo "<pre>";
//print_r($_FILES['file']);
//echo "</pre>";
//echo "<hr/>";

$tmp= $_FILES['up']['tmp_name'];
$target = basename($_FILES['up']['name']);
$done = $_POST['cdone'];
$timee = "../images/Desert.jpg";
//$_FILES['up']['type']=="image/jpeg" 

	
//$query = mysql_query("INSERT INTO comment VALUES('id','$fl','$emailss','$comment','$date','0','picname')");	
	if($_FILES['up']['type']=="image/jpeg")
	{
		
		move_uploaded_file($tmp,"../images/".$tmp);
	}else
	$err ="File type not supported.";
	
	
	
	
	
?>





</body>
</html>