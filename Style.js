function checkApplication() {
	var email = document.getElementById('regisName').value;
	var pass= document.getElementById('regisPass').value;
	var repass = document.getElementById('regisRepass').value;
	var name = document.getElementById('regisName').value;
	var phone = document.getElementById('regisPhone').value;
	var address = document.getElementById('regisAddress').value;
	if (email==''|| pass==''|| repass=='' || name==''|| phone==''||address=='') 
	{
		alert("You must enter all the fills");
	}
	else if (pass!=repass)
	{
		alert("Your password must be matched with re-password")
	}
}
function SignInFirst(){

	alert("You must sign in before purchasing");

}
