// JavaScript Document
//sign in -----------
function signin(){
	var ee = $("#iemail").val();
	var piy = $("#ipassword").val();
	var c;
	if($("#check").is(':checked')){
		 c = "check";
	}else {
	  c = "";
	}
	
	
$.post('functions/login.php', {ee:ee,piy:piy,c:c},function(data){
	$("#ss").html(data);
	
	if(data =="."){
		window.location = "main/main.php";
		}else if(data =="..") {
			
			window.location = "main/admine.php";
			}
	
	});

}

//register ----------

function register(){
	
	var f = $("#first").val();
	var l = $("#last").val();
	var e = $("#email").val();
	var p = $("#password").val();
	var pc = $("#conpass").val();


$.post('functions/register.php', {f:f,l:l,e:e,p:p,pc:pc},function(data){
	$("#regs").html(data);
	
	if(data =="."){
		window.location = "main/main.php";
		}
	
	});

}

$('#reg').hide();

$('#regn').click(function (){
	$('#reg').show();
	$('#login').hide();
	});

$('#sin').click(function (){
	$('#reg').hide();
	$('#login').show();
	});
	
