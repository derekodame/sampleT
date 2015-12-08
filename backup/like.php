<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>





<button id="like" onclick="like(); " value='1'   >


butoon
</button>

<span id="likee"   >


butoon
</span>
<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
<script type="text/javascript">


function like(){
	
	//var me = document.getElementById('m').value; 
	var ne = document.getElementById('like').value;
	//var ne =1;
	
		$.post('backup.php', {li:ne},function(data){
			
				//$('#likee').text(data);
				$('#likee').load("test.php");
				if(data==1){
					$('#like').text('Liked');
					
					}else $('#like').text('unLike');
				
				
				
			
			});
			}
</script>
</body>
</html>