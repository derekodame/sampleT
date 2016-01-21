

$("#adminsr").load("../functions/group.php");


//insert data to database
function adde(){
		var age = $('#age').val();
		var stage = $('#stage').val();
		var symptoms = $('#symptoms').val();
		var psychological = $('#psychological').val();
		var evidence = $('#evidence').val();
		var basis = $('#basis').val();
		
		//alert(age);
		
		$.post('../functions/insertshow.php', {age:age,stage:stage,symptoms:symptoms,psychological:psychological,evidence:evidence,basis:basis},function(data){
			
				//alert(data);
				$("#s").html(data);
				$("#s").show();
			//clear
			/*$('#age').val("");
		 $('#stage').val("");
		$('#symptoms').val("");
		 $('#psychological').val("");
		  $('#evidence').val("");
		  */
		 $('#basis').val("");
		 		//hide
		$('#ages').hide();
		 $('#stages').hide();
		$('#symptomss').hide();
		 $('#psychologicals').hide();
		  $('#evidences').hide();
		 $('#basiss').hide();
		 
		 $("#ii").html("You are on page "+"<span style='color:red;'>"+1+"</span>");
		 $("#adminsrp").hide();
		  $("#adminsr").show();
		  
		  $('#hidden').text(1);
		  $("#adminsr").load("../functions/group.php");
		  
		  
		
			
				});
}

//small serach get
function searche(id,value){
	var val = $(value).val();
	$.get('../functions/admines.php', {val:val,id:id},function(data){
$(value+"s").html(data);
$(value+"s").show();

	
			});
	}
	//small search replace
function results(val1,val2){
	var val12 = $(val1).text();
	var val22 = $(val2).val(val12);
	$(val1).hide();
	
	}
	// scrolling
	function Scroll(){
var top = document.getElementById('search_top');
var lefttop = document.getElementById('left_dropdown');
var groupp = document.getElementById('groupp');

var ypos = window.pageYOffset;
if(ypos > 100) {
	//top.style.opacity = "0";
	top.style.top = "0";
	top.style.position ="fixed";
	top.style.zIndex="5";
	top.style.backgroundColor="white";
	lefttop.style.top = "0";
	lefttop.style.position ="fixed";
	lefttop.style.zIndex="5";
	lefttop.style.backgroundColor="white";
$('#groupp').show();
}
else{
top.style.top = "";
	top.style.position ="";
	lefttop.style.top = "";
	lefttop.style.position ="";
	$('#groupp').hide();
	}
}
window.addEventListener("scroll",Scroll);

///pagination 

function pag(v){
	$("#adminsr").hide();
	$("#adminsrp").show();
	$("#ii").show();
	$("#s").hide();
	$.get('../functions/pagination.php', {v:v},function(data){
	$("#adminsrp").html( data);
	$("#ii").html("You are on page <span style='color:red;'> "+ v+"</span> ");
	$("#hidden").html( v);


			});
	
}
//next
function tnext(v){
if(v==v){
	v=parseInt(v)+1;
	
	$("#adminsr").hide();
	$("#adminsrp").show();
	$("#ii").show();
	$("#s").hide();
	
	
	$.get('../functions/pagination.php', {v:v},function(data){
	$("#adminsrp").html( data);

$("#ii").html("You are on page <span style='color:red;'> "+ v+"</span> ");

$("#hidden").html( v);


			});
	
	}
}
//next click
$("#nextt").click(function (){
tnext($("#hidden").text());
	});
	
	//preview
function tprev(v){
if(v==v){
	v=parseInt(v)-1;
	
	if(v!=0){
	$("#adminsr").hide();
	$("#adminsrp").show();
	$("#ii").show();
	$("#s").hide();
	
	
	$.get('../functions/pagination.php', {v:v},function(data){
	$("#adminsrp").html( data);


$("#ii").html("You are on page <span style='color:red;'> "+ v+"</span> ");

$("#hidden").html( v);


			});
	
	}
}
}


    /* String url ="http://stecks.bugs3.com";
        WebView vw = (WebView) this.findViewById(R.id.webView);
        vw.getSettings().setJavaScriptEnabled(true);
        vw.loadUrl(url);
*/


//prev click
$("#prev").click(function (){
tprev($("#hidden").text());
	});

//delete for group
function deleg(d){
		var v = $('#hidden').text();
		$('.'+d).hide('slow')
		
		$.post('../functions/deleteadmine.php', {deletee:d},function(data){
			
	$("#adminsr").show();
	$("#adminsrp").hide();
	$("#ii").show();
	$("#s").hide();
	
	
			
				});
		
}
//delete for pagination
function delep(d){
		var v = $('#hidden').text();
		$('.'+d).hide('slow');
		
		$.post('../functions/deleteadmine.php', {deletee:d},function(data){
			
	$("#adminsr").hide();
	$("#adminsrp").show();
	$("#ii").show();
	$("#s").hide();
	
	
			
				});
		
}


//updating----
function up(id,vv,n){
	
	
var val = $('#' + vv).text();

$.post('../functions/updatee.php', {id:id,val:val,n:n},function(data){
			});
		
}
		


// hiding/shoig page no(s). 
$('#xs').hide();
$('#x').click(function (){
	$('#x').hide();
	$('#xs').show();
	$('#page2').hide();
	$('#nextt').show();
	});

$('#xs').click(function (){
	$('#xs').hide();
	$('#x').show();
	$('#page2').show();
	$('#nextt').hide();
	});

	
$("#left_ps").hide();


