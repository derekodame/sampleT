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
		
/// scroll ----
	
function Scroll(){
var top = document.getElementById('search_top');
var ypos = window.pageYOffset;
if(ypos > 100) {
	//top.style.opacity = "0";
	
	top.style.top = "0";
	top.style.position ="fixed";
	top.style.zIndex="5";

}
else{
top.style.top = "";
	top.style.position ="";
	}
}
	window.addEventListener("scroll",Scroll);
	
	