
$("#hii").click(function() {
	
	$("#hi").show();
	});
	
	$("#hss").click(function() {
	
	$("#hs").show();
	});
	
	$("#hssi").click(function() {
	
	$("#hsss").show();
	});

$("#hx").click(function() {
	
	$("#hii").hide();
	});
	

//for tooltip

$(document).ready(function(e) {
    $('.tooltip').mouseover(function(e){
		if($(this).attr('data-tip-type')=='text'){
			$('#tooll').html($(this).attr('data-tip-source'));
			
			}
			$('#tooll').css("display", "block");
			$('#tooll').css({'display':'block','opacity':0}).animate({opacity:1},250);
		})
		
		.mousemove(function(e){
		var tooltipWidth = $('#tooll').outerWidth();
		var tooltipHeight = $('#tooll').outerHeight();

		// width detection
		var pageWidth = $('#search_body').width();
		if ( e.pageX > pageWidth / 2 ){
			$('#tooll').css('left',( e.pageX - tooltipWidth + 20 ) + 'px');
		}else{
			$('#tooll').css('left',( e.pageX - 20 ) + 'px');
		}
		
		// height detection
		if ( e.pageY > 100 ){
			$('#tooll').css('top',( e.pageY - (tooltipHeight+20) ) + 'px' );
		}else{
			$('#tooll').css('top',( e.pageY + 10 ) + 'px' );
		}
		
		/* debug */ $('.bodywidth').html( pageWidth );
		/* debug */ $('.xpos').html(e.pageX);
		/* debug */ $('.ypos').html(e.pageY);
			
			
			})
			
		.mouseleave(function(e){
			
			$('#tooll').animate({opacity:0},250, function(){
			$('#tooll').css('display','none')
		});
		
		});
});

function feedas(d,r){
	alert(r);
	
	}

function feedad(f){
	alert("Thanks for you feed back :)");
$('#pop').hide();

var su = "http://localhost/psychApp/functions/showfeedbackclient.php";
$('#popc').load(su);
	}

///pop out ----

$('#pop').hide();
$('#popx').click(function () {
	$('#pop').hide();
	});

// search button ------

document.getElementById('done_search_s').disabled=true;
document.getElementById('done_search_s').style.backgroundColor='grey';
document.getElementById('done_search_s').style.color='white';
document.getElementById('done_search_s').style.cursor='not-allowed';

function displaye(){
	var f = $('#sel');
	var f2 = $('#sel2');
	var f3 = $('#sel3');
	var b = document.getElementById('done_search_s');
	if(f.val()!='Age' && f2.val()!='Stage of Change' && f3.val()!='Symptoms and Disorders'){
b.disabled=false;
document.getElementById('done_search_s').style.backgroundColor='green';
document.getElementById('done_search_s').style.color='white';
document.getElementById('done_search_s').style.cursor='pointer';
		}else { b.disabled=true;}
	
	}


// for id
function _(id){
	return document.getElementById(id);
	}


	
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
	top.style.backgroundColor="";
	lefttop.style.top = "0";
	lefttop.style.position ="fixed";
	lefttop.style.zIndex="5";
	lefttop.style.backgroundColor="";

	
	

	
	

}
else{
	$('#groupp').hide();
top.style.top = "";
	top.style.position ="";
	lefttop.style.top = "";
	lefttop.style.position ="";
	lefttop.style.backgroundColor="";
	lefttop.style.zIndex="-100px";
	
	
	}
}
window.addEventListener("scroll",Scroll);
	
//---



///-------------
	

$('#successsh').hide();

// search function ----

function searchh(){
	

$('#successsh').show();

var sel = $('#sel').val();
var sel2 = $('#sel2').val();
var sel3 = $('#sel3').val();

$.get("../functions/searchh.php", {sel:sel,sel2:sel2,sel3:sel3},function(data){
	
	
$('#search_result').html(data) 	;
$('#search_resulte').html(data) 	;
$('#search_resulte').show();
$('#left_p').hide();
$('#page').hide();
$('#prev').hide();
$('#nextt').hide();
$("#adminsrp").hide();
$('#successsh').hide();
$("#ii").html(" ");
});
}

function searchhe(){
	

$('#successsh').show();

var sel = $('#sel').val();
var sel2 = $('#sel2').val();
var sel3 = $('#sel3').val();

$.get("../functions/searchhhe.php", {sel:sel,sel2:sel2,sel3:sel3},function(data){
	
	

$('#search_resulte').html(data) 	;
$('#search_resulte').show();
$('#left_p').hide();
$('#page').hide();
$('#prev').hide();
$('#nextt').hide();
$("#adminsrp").hide();
$('#successsh').hide();
$("#ii").html(" ");
});
}

function searchclient(){
	

$('#successsh').show();

var cl = $('#cl').val();


$.get("../functions/searchclient.php", {cl:cl},function(data){
	
	

$('#clientsh').html(data) 	;

});
}
//--- disable

//client profile----



	
function profileupdate(){
	
	var f = $('#firstn').val();
	var l = $('#lastn').val();
	var u = $('#username').val();
	var c = $('#currentpass').val();
	var n = $('#new').val();
	if($("#checku").is(':checked')){
		 cu = "check";
		 document.getElementById('new').disabled=false;
	}else {
	  cu = "";
	}
	$.post("../functions/clientprofile.php", {f:f,l:l,u:u,c:c,cu:cu,n:n},function(data){
	
$('#p').html(data)	

if(data = "Update was succeful"){
$('#welcome').html("Welcome " + f + " "+ l);
}
	});
}


//deleting user account

function profiledelete(d){
	
	var p = $('#currentpass').val();
	$.post("../functions/deleteuser.php", {d:d,p:p},function(data){
	
		$('#p').html(data)
	if(data =="5"){
			alert("You have been removed from the database.");
		window.location="../functions/logout.php";	
	}
	
	});
}