// JavaScript Document


//admin left ---------

$('#client').hide();
$('#upload').hide();
$('#frame').hide();
$('#drop').hide();

$('#clientAmind').click(function(){
	
	$('#client').show();
	$('#upload').hide();
	$('#drop').hide();
	
	
	});
if($('#clientAmind').click()){
	
	$('#client').show();
	$('#upload').hide();
	$('#drop').hide();
	}

$('#uploadAmind').click(function(){
	
	$('#client').hide();
	$('#upload').show();
	$('#drop').hide();
		$("#showUpload").load("../functions/uploadshow.php");
	
	});
	
$('#dropdown_box').click(function(){
	
	$('#client').hide();
	$('#upload').hide();
	$('#drop').show();
		
	
	});
	
function del(d){
		//alert(d);
		
		$.post('../functions/deleteupload.php', {deletee:d},function(data){
			
				if(data !=" "){
				$("#showUpload").load("../functions/uploadshow.php");
			//	alert(data);
				
				
				}
			
				});
}
	
	
	
	/// upload------------////////////////
	
	function _(id){
	return document.getElementById(id);
	}
	
	function uploadfile(e){
	var file = _("excel").files[0];
	var namedfile = _('aa').value;
	
	var formdata = new FormData();
	formdata.append("excel", file);
	formdata.append("aa", namedfile);
	
	
	var ajax = new XMLHttpRequest();
	
	
	 ajax.onreadystatechange = function() {
    if (ajax.readyState == 4 && ajax.status == 200) {
    document.getElementById("success").innerHTML = ajax.responseText;
	$("#showUpload").load("../functions/uploadshow.php");
	
	
    }
  };
	
	
	ajax.open("POST", "../functions/excel.php",true);
	ajax.send(formdata);

//alert(namedfile);
//$("#excel").val("");

	
	_('excel').ondrop=function(){
		
		alert(2);
		};
	
	}
	

	
	/// upload end////////////////
	

	
/*	
	$('#excelb').click(function(){
		
		var ef = $('#excelf').val();
		
		
			$.post('../functions/excel.php', {excelf:ef},function(data){
			
				if(data !==""){
					$('#upload').text(data);
				alert(data);
				
						
				
			
				}
				});
		
		});
	*/
	
	
			