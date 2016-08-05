
//all help



$('#dropp').hide();
$('#uploade').hide();
$('#searchee').hide();

$("#feedid").load("../functions/showfeedback.php");

$("#sdc").load("../functions/admindb.php");

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


////menu for admin ****

$('#upe').click(function (){
	
$('#adupdate').show();

$('#upclient').hide();
$('#feedbackanswers').hide();
$('#newupdate').hide();
$('#feedadm').hide();
$('#deletedate').hide();
	});
	
$('#deleteacc').click(function (){
	
$('#deletedate').show();
$('#adupdate').hide();
$('#upclient').hide();
$('#feedbackanswers').hide();
$('#newupdate').hide();
$('#feedadm').hide();
	});	

$('#ade').click(function (){
	$('#deletedate').hide();
$('#adupdate').hide();
$('#feedbackanswers').hide();
$('#upclient').hide();
$('#feedadm').hide();

$('#newupdate').show();
var su = "http://localhost/psychApp/functions/admindb.php";
$('#newupdate').load(su);

	});
	
	
function admindelete(a){
	
	
	var p = prompt("Please input your current password", "");
    
    

	$.post("../functions/admindelete.php", {a:a,p:p},function(data){
		
		
		
	
		
	if(data == "invalid input"){
		alert(data);
		}else if(data == "account deleted"){
		window.location="../functions/logout.php";
		alert(data);
		}
	
	});
}	


//feedback *****


function feed(){
		var q = $('#q').val();
		
		
//alert(q);
		
		$.post('../functions/feedback.php', {q:q},function(data){
			
				
				$("#feeds").html(data);
				$("#feedid").load("../functions/showfeedback.php");
		
		  
	});
}

//feedback show questions on client side

function showclient(u,id){
		
		
//alert(q);
		
		$.post('../functions/showclient.php', {u:u,id:id},function(data){
			
				
				//alert(data);
				
		
		  
	});
}


//feedback show questions on client side delete

function deleps(d){
		var v = $('#hidden').text();
		$('.'+d).hide('slow');
		
		$.post('../functions/deleteadmine.php', {deletee:d},function(data){
			
	
	
	
	
			
				});
		
}


//range feedback

function range(id,e,identity){
	$('#'+id).hide("");
var cn = document.getElementsByName(identity);
for (var i = 0, length = cn.length; i < length; i++) {
    if (cn[i].checked) {
       var ac=(cn[i].value);

var an = $('#cn'+id).val();
	
	

	
	
	$.post('../functions/feedadmin.php', {id:id,e:e,ac:ac,an:an},function(data){
			
	//alert(data);
	
	
	
			
				});
        break;
    }
}
	
	
	
	}


$('#ce').click(function (){
	
$('#adupdate').hide();

$('#upclient').show();
$('#feedadm').hide();
$('#feedbackanswers').hide();
$('#newupdate').hide();
$('#deletedate').hide();
	});
	
	
$('#fe').click(function (){
	$('#adupdate').hide();

$('#upclient').hide();
$('#feedadm').show();
$('#feedbackanswers').hide();
$('#newupdate').hide();
$('#deletedate').hide();

	});
$('#fea').click(function (){
	$('#adupdate').hide();

$('#upclient').hide();
$('#feedadm').hide();
$('#feedbackanswers').show();

$('#newupdate').hide();
$('#deletedate').hide();
	});
	
	

//load page 1
function loadp(sp){ 


$.get('../functions/pagination.php', {v:1,sp:sp},function(data){
$("#adminsrp").html( data);

});
}


//small search result show in admine

$('#Ages').hide();
$('#Evidence_Levels').hide();
$('#Psychological_Treatments').hide();
$('#Symptoms_and_Disorderss').hide();
$('#Stage_of_Changes').hide();

//insert data to database



//add admins
function add_admin(){
		var f = $('#fe').val();
		var l = $('#le').val();
		var e = $('#ee').val();
		var p = $('#pe').val();
		var c = $('#ce').val();
		var i = $('#ie').val();
		
//alert(f);
		
		$.post('../functions/add_admins.php', {f:f,l:l,e:e,p:p,c:c,i:i},function(data){
			
				
				$("#add_adminse").html(data);
				$("#sdc").load("../functions/admindb.php");
				
		
		  
	});
}

//radio activate/ deactivate client

function act(r,id){

if(r==1){
	var rr = "Active";
	}else var rr = "Deactive";
	
	var s = $('#acc'+id).text(rr);
		
	
	$.post('../functions/actordeact.php', {id:id,r:r},function(data){
			});
	}
	
	
//check if addmin
function checkaddmin(i,f,l,e,p,ade){
	//alert(ade);
	
	var t = $('#adde'+i).text();
	
	
		if(t=="Admin"){
	var rr = "Client";
	}else var rr = "Admin";
	
	
	
	$('#adde'+i).text(rr);
	
		$.post('../functions/checkaddmin.php', {i:i,f:f,l:l,e:e,p:p},function(data){
			
				
				alert(data);
				
		
		  
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
	
	
	$.get('../functions/pagination.php?sp=de', {v:v},function(data){
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
	
	
	$.get('../functions/pagination.php?lang=de', {v:v},function(data){
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


