<?php 




function dropbox($con,$a,$s,$d,$g,$hh,$jj='j'){
	
	$queryd = mysqli_query($con,"select * from dropbox where Age = '$a'");
		
		$num = mysqli_num_rows($queryd);
		
		if($num<1){
			$queryd = mysqli_query($con,"insert into dropbox values('id','$a','1','1','1','1','1')");
			
		}
		
		///---------
		
		$queryd = mysqli_query($con,"select * from dropbox where Stage_of_Change = '$s'");
		
		$num = mysqli_num_rows($queryd);
		
		if($num<1){
			$queryd = mysqli_query($con,"insert into dropbox values('id','1','$s','1','1','1','1')");
			
		}
		
		///---------
		
		$queryd = mysqli_query($con,"select * from dropbox where Symptoms_and_Disorders = '$d'");
		
		$num = mysqli_num_rows($queryd);
		
		if($num<1){
			$queryd = mysqli_query($con,"insert into dropbox values('id','1','1','$d','1','1','1')");
			
		}

///---------
		
		$queryd = mysqli_query($con,"select * from dropbox where Psychological_Treatment = '$g'");
		
		$num = mysqli_num_rows($queryd);
		
		if($num<1){
			$queryd = mysqli_query($con,"insert into dropbox values('id','1','1','1','$g','1','1')");
			
		}
	
	
		///---------
		
		$queryd = mysqli_query($con,"select * from dropbox where Evidence_Level = '$hh'");
		
		$num = mysqli_num_rows($queryd);
		
		if($num<1){
			$queryd = mysqli_query($con,"insert into dropbox values('id','1','1','1','1','$hh','1')");
			
		}
		///---------
		
		$queryd = mysqli_query($con,"select * from dropbox where Basis_for_Evidence = '$jj'");
		
		$num = mysqli_num_rows($queryd);
		
		if($num<1){
			$queryd = mysqli_query($con,"insert into dropbox values('id','1','1','1','1','1','$jj')");
			
		}
	}
	
function dropshow($con,$su){
	
	
$query = mysqli_query($con,"select $su from dropbox");

while($row= mysqli_fetch_array($query)){
	
	$a= $row[$su];
	
	
	if($a==1 OR $a=="****" OR $a==""){
		echo "<option id='ex' style='display:none;'>$a</option>";
		}else echo  "<option title='$a'  >$a</option>";
	
	
	}

	}

	



?>