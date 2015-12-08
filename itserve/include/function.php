<?php 
mysql_connect("localhost", "root", ""); 
mysql_select_db("itserve");
?>
<?php 
include_once("./class.php");//belonging to a class called mysql



$row =mysqli_fetch_array($itserve->select_where("itserve1","email","jennifer@hotmail.com"));

echo  $row['firstname'];
echo "<hr>";
echo  $row['lastname'];



?>