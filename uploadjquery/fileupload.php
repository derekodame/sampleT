<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<script type="text/javascript">

function _(el){
	return document.getElementById(el);
	}

function uploadFile(){
	
	var file = _("file1").files[0];
	//alert(file.name);
	var formdata = new FormData();
	formdata.append("file1", file);
	
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.upload.addEventListener("load", completeHandler, false);
	ajax.upload.addEventListener("error", errorHandler, false);
	ajax.upload.addEventListener("abort", abortHandler, false);
	
	ajax.open("POST", "file_upload_parser.php");
	ajax.send(formdata);
	}
	
	function progressHandler(event){
		_("loaded_n_total").innderHTML = "Uploaded " + event.loaded+" bypte of  "+ event.total;
		var percent = (event.loaded/eent.total)*100;
		_("progressBar").value = Math.round(percent);
		_("status").innerHTML= Math.round(percent)+"% uploaded... please waite.";
		
		}
		
		function completeHandler(event){
		_("status").innerHTML= event.target.responseText;
		_("progressBar").value = 0;
		
		
		}
		function errorHandler(event){
		_("status").innerHTML= "failed";

		}


		function abortHandler(event){
		_("status").innerHTML= "aborted";

		}
</script>


</head>

<body>


<form id ="upload_form"  enctype="application/x-www-form-urlencoded"  method="post">
<input type="file" name = "file1" id="file1"><br/>
<input type="button" value="Upload File" onClick="uploadFile();"
>
<progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
<h3 id="status"></h3>
<p id="loaded_n_total"></p>
</form>
</body>
</html>