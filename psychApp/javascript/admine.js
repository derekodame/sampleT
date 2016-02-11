

$('#dropp').hide();
$('#uploade').hide();
$('#searchee').hide();

$('#insertm').click(function (){
	
	$('#dropp').show();
	$('#uploade').hide();
	$('#searchee').hide();
	});

$('#uploadee').click(function (){
	
	$('#uploade').show();
	$('#dropp').hide();
	$('#searchee').hide();
	});

$('#searched').click(function (){
	$('#searchee').show();
	$('#uploade').hide();
$('#dropp').hide();
	});


//load page 1
function loadp(){ $.get('../functions/pagination.php', {v:1},function(data){
$("#adminsrp").html( data);
$("#ii").html(" "+"<span style='color:red;'>Page "+1+"</span>");});}


//small search result show in admine

$('#Ages').hide();
$('#Evidence_Levels').hide();
$('#Psychological_Treatments').hide();
$('#Symptoms_and_Disorderss').hide();
$('#Stage_of_Changes').hide();

//insert data to database
function adde(){
		var age = $('#Age').val();
		var stage = $('#Stage_of_Change').val();
		var symptoms = $('#Symptoms_and_Disorders').val();
		var psychological = $('#Psychological_Treatment').val();
		var evidence = $('#Evidence_Level').val();
		var basis = $('#Basis_for_Evidence').val();
		
//alert(age);
		
		$.post('../functions/insertshow.php', {age:age,stage:stage,symptoms:symptoms,psychological:psychological,evidence:evidence,basis:basis},function(data){
			
				
				$("#s").html(data);
				$("#s").show();
			//clear
			/*$('#age').val("");
		 $('#stage').val("");
		$('#symptoms').val("");
		 $('#psychological').val("");
		  $('#evidence').val("");
		  */
		 $('#Basis_for_Evidence').val("");
		 		//hide
		$('#ages').hide();
		 $('#stages').hide();
		$('#symptomss').hide();
		 $('#psychologicals').hide();
		  $('#evidences').hide();
		 $('#basiss').hide();
		 
		 $("#ii").html(" "+"<span style='color:red;'>Page "+1+"</span>");
		 $("#adminsrp").show();
		
		  
		  $('#hidden').text(1);
		  
		  
		  $.get('../functions/pagination.php', {v:1},function(data){
	$("#adminsrp").html( data);

$('#search_resulte').hide();

$('#left_p').show();
$('#page').show();
$('#prev').show();
$('#nextt').show();
$("#adminsrp").show();
$("#search_resulte").hide();

			});
		  
	});
}

//small serach get
function searche(id,value){
	//alert(value);
	var val = $(value).val();
	$.get('../functions/admines.php', {val:val,id:id},function(data){
$(value+'s').html(data);


	if($(value).val()==""){
	$(value+"s").hide();
	}else {$(value+"s").show();}
	
	});
	}
	
	
$('#admin,#adminsr,#adminsrp,#page,#page2').click(function (){
	
	$('#Ages').hide();
$('#Evidence_Levels').hide();
$('#Psychological_Treatments').hide();
$('#Symptoms_and_Disorderss').hide();
$('#Stage_of_Changes').hide();

	});

//small search replace
function results(val1,val2){
	var val12 = $('#' + val1).text();
	var val22 = $('#'+val2).val(val12);
	$('#'+val2+'s').hide();
	
	
	
	}
	// scrolling
	

///pagination 

function pag(v){
	$("#adminsr").hide();
	$("#adminsrp").show();
	$("#ii").show();
	$("#s").hide();
	
	
	  var vbg  = document.getElementById(2);
        vbg.className = 'sele';
	
	 
	
	$.get('../functions/pagination.php', {v:v},function(data){
	$("#adminsrp").html( data);
	$("#ii").html(" <span style='color:red;'>Page "+ v+"</span> ");
	$("#hidden").html( v);

$('#search_resulte').hide();
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
$('#search_resulte').hide();
$("#ii").html("<span style='color:red;'> Page"+ v+"</span> ");

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
$('#search_resulte').hide();

$("#ii").html("  <span style='color:red;'>Page "+ v+"</span> ");

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


//delete for pagination
function delep(d){
		var v = $('#hidden').text();
		$('.'+d).hide('slow');
		
		$.post('../functions/deleteadmine.php', {deletee:d},function(data){
			
	
	$("#adminsrp").show();
	$("#ii").show();
	$("#s").hide();
	
	
			
				});
		
}
//deleting for search
function deles(d){
		var v = $('#hidden').text();
		$('.'+d).hide('slow');
		
		$.post('../functions/deleteadmine.php', {deletee:d},function(data){
			
$('#search_resulte').show();
//$('#search_resulte').load('../functions/searchh.php');
$('#left_p').hide();
$('#page').hide();
$('#prev').hide();
$('#nextt').hide();
$("#adminsrp").hide();
$('#successsh').hide();
$("#ii").html(" ");
	
			
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


