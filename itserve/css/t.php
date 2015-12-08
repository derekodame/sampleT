<?php 
error_reporting(E_ALL^E_NOTICE);
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
echo $error_UP[$error];
echo "<hr/>";
echo "<pre>";
print_r($_FILES['file']);
echo "</pre>";
echo "<hr/>";

$tmp= $_FILES['file']['tmp_name'];

$target = basename($_FILES['file']['name']);
$text = $_POST['text'].".jpg";
$whatever = "whatever.jpeg";

//if($_FILES['file']['type']=="image/jpeg" && "video/mp4"){
if(move_uploaded_file($tmp,$tmp)){
	
	
	
	echo "file good";
	
	
	
	}
	else
	echo $error_UP[$error];
//}//else
//echo "not a picture";
?>
<p>
<?php 
echo "<img src=\"dd.jpg\" width=\"200\" height=\"200\" >";
echo "<video controls autoplay poster=\"Hydrangeas.jpg\" >
<source src=\"ddd.mp4\" width=\"200\" height=\"200\" type=\"video/mp4\">
</video>"
?></p>

<form name="form1" method="post" enctype="multipart/form-data"  action="">
  <label for="textfield"></label>
  <input type="hidden" name="hide" value="1000000"><br/>
   <input type="text" name="text" id="textfield">
  <input type="file" name="file" id="textfield">
  <input type="submit" name="button" id="button" value="Submit">
</form>
<p>&nbsp;</p>


</body>
</html>