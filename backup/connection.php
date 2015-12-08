<?php

error_reporting(E_ALL^E_NOTICE);
//make you changes in this directory...
include("editconnect.php");

//nothing should be changed here...
$con = mysqli_connect(host, user, pass,dbname); 
//$cons = new mysqli_connect(host, user, pass,dbname); 

//mysql_select_db(dbname);
?>