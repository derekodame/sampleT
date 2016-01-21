<?PHP 
include"error.php";
include("connection.php");


$id = $_POST['id'];
$v = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['val'])));

$n = $_POST['n'];

$query = mysqli_query($con,"UPDATE groupp SET $n = '$v'  WHERE id ='$id'");

?>