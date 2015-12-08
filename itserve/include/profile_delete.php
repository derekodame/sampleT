    <?php 
	error_reporting(E_ALL^E_NOTICE);
include"connection.php";
session_start();
$emailss = $_SESSION['email'];
$email=$_GET['email'];



$query = mysqli_query($con,"SELECT * FROM comment	 WHERE email='$emailss' ORDER BY id DESC");
while($row=mysqli_fetch_array($query)){
	$n= $row['name'];
	$c= ucfirst($row['comment']);
	$d= $row['date'];
	$dbid= $row['id'];
	$like = $row['likee'];	
	


	echo "<div id=\"c$dbid\" class=\"cccc\">$c</div>
	<span style=\"color:rgba(0,153,204,.8); font-size:12px; cursor:pointer; float:right;\" id=\"$dbid\" onclick=\"deletee($dbid);\">Delete</span>
	<em style=\"color:#666; font-size:12px; float:left;\"  >People who liked it ($like) </em><br/><div class=\"down\"></div><br/>
";

	/* $ff = "<br/><span class=\"cccc\">$c</span><br/>
	
	<em >Posted on $d </em><a href=../include/delete.php?id=$dbid onclick=\"return confirm('$last, are you sure you want to remove your IT Tip')\">
	<span style=\"color:red; cursor:pointer;\" id=\"$dbid\"  onclick=\"deletee($dbid);\">delete</span></div><br/>";
	
	echo $ff;
	*/

	

	}
?>