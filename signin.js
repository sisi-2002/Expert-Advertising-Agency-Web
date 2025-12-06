function checkpassword(){
	v1 = document.getElementById("PW1").value;
	v2 = document.getElementById("PW2").value;
	
	if(v1!= v2){
		alert("Passwords mis matched");
		return false;
	}
	else{
		alert("Passwords are matched...!");
		return true;
    }		
	
}

function enalbleButten(){
	
	if(document.getElementById("checkbox").checked){
		document.getElementById("submitbtn").disabled = false;

	}
else{
	document.getElementById("submitbtn").disabled = true;
}
}