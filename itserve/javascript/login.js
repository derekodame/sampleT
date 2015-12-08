 var don = document.getElementById("don");

 var name = document.getElementById("username");
 var password = document.getElementById("password");
 name.onfocus = function(){
	 if(name.value =="Email"){
		 name.value = "";
		
		name.style.borderColor = "#fff999";
		 
		 }
	 };
	 
	 name.onblur = function(){
		 if(name.value == ""){
			 name.value = "Email";
			 name.style.borderColor = "";
			 
			 }
		 };
		 
		 
		password.onfocus = function(){
	 if(password.value =="Password"){
		 password.value = "";
  		 password.style.borderColor = "#fff999";
		 }
	 };
	 
	 password.onblur = function(){
		 if(password.value == ""){
			 password.value = "Password";
			 password.style.borderColor = "";
			 }
		 };
		 
		 
