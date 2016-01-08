// JavaScript Document
$("#adminsr").load("../functions/group.php");
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
			//clear
			$('#age').val("");
		 $('#stage').val("");
		$('#symptoms').val("");
		 $('#psychological').val("");
		  $('#evidence').val("");
		 $('#basis').val("");
		 		//hide
		$('#ages').hide();
		 $('#stages').hide();
		$('#symptomss').hide();
		 $('#psychologicals').hide();
		  $('#evidences').hide();
		 $('#basiss').hide();
		 
		 $("#adminsrp").hide()
		  $("#adminsr").show()
		$("#adminsr").html( $("#adminsr").load("../functions/group.php"));
			
				});
}


function searche(id,value){
	var val = $(value).val();
	$.get('../functions/admines.php', {val:val,id:id},function(data){
$(value+"s").html(data);
$(value+"s").show();

	
			});
	}
	
function results(val1,val2){
	var val12 = $(val1).text();
	var val22 = $(val2).val(val12);
	$(val1).hide();
	
	}
	
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
	$.get('../functions/pagination.php', {v:v},function(data){
	$("#adminsrp").html( data);


	
			});
	
}

	
	