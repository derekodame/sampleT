// JavaScript Document

function _(id){
	return document.getElementById(id);
	}

$('#age').click(function(){
	var v = $('#age').text();
	
	});

$('#SympDisorder').click(function(){
	var v = $('#SympDisorder').text();
	
	});

$('#stage_of_change').click(function(){
	var  v = $('#stage_of_change').text();
	
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
var lefttop = document.getElementById('left_dropdown');
var groupp = document.getElementById('groupp');


var ypos = window.pageYOffset;
if(ypos > 100) {
	//top.style.opacity = "0";
	
	$('#groupp').show();
	
	top.style.top = "0";
	top.style.position ="fixed";
	top.style.zIndex="5";
	top.style.backgroundColor="white";
	lefttop.style.top = "0";
	lefttop.style.position ="fixed";
	lefttop.style.zIndex="5";
	lefttop.style.backgroundColor="white";

	
	

	
	

}
else{
	$('#groupp').hide();
top.style.top = "";
	top.style.position ="";
	lefttop.style.top = "";
	lefttop.style.position ="";
	
	
	
	}
}
window.addEventListener("scroll",Scroll);
	
///-------------
	

$('#successsh').hide();

function searchh(){
$('#successsh').show();

var sel = $('#sel').val();
var sel2 = $('#sel2').val();
var sel3 = $('#sel3').val();

$.get("../functions/searchh.php", {sel:sel,sel2:sel2,sel3:sel3},function(data){
	
	
$('#search_result').html(data) 	;

$('#successsh').hide();
});
}


//--- disable
