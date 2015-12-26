// JavaScript Document



$('#age').click(function(){
	var v = $('#age').text();
	$('#search').val(v);
	});

$('#SympDisorder').click(function(){
	var v = $('#SympDisorder').text();
	$('#search').val(v);
	});

$('#stage_of_change').click(function(){
	var  v = $('#stage_of_change').text();
	$('#search').val(v);
	});
	
//logout keytype----------

$(document).keyup(function(ee){
	    if(ee){keycode = ee.keyCode}else keycode =event.keyCode; //or below
	 // ee? keycode = ee.keyCode : keycode =event.keyCode;
	  //console.log(keycode);
	   if(keycode == 27){
		window.location="../functions/logout.php";	  
		}
		});
		
	
	