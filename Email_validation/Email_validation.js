function isEmailValide(){
	var email = document.getElementsByName("email")[0].value;
	
	var at_index = email.indexOf("@");
	var dot_index = email.lastIndexOf(".");
	
	if(at_index <1 || dot_index > email.length-3 || dot_index - at_index <3)     // false conditions..
		return(false);
	return(true);	
}