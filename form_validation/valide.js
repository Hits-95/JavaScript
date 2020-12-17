function isValide(){
    var username = document.getElementsByTagName("input")[0].value;
	var pass = document.getElementsByTagName("input")[1].value;
	
	if(username.length == 0){
		alert("User-Name shoud not empty ...");
		return(false);
	}
	else if(pass.length == 0){
		alert("Pass-Word shoud not empty ...");
		return(false);
	}
	else if(username == "hits")
			if(pass == "online")
				return(true);
			else{
				alert("Invalide Pass-Word user ...");
				return(false);
			}
	else 
		alert("Invalide User-Name user ...");
	
}