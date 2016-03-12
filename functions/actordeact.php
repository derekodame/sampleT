<?PHP 
include"error.php";
include("connection.php");


$id = $_POST['id'];


$r = $_POST['r'];

$query = mysqli_query($con,"UPDATE client SET act = '$r'  WHERE id ='$id'");

?>