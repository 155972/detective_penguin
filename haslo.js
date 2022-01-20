	function haslo()
{
	var h1 = document.getElementById("password").value;
	var h2 = document.getElementById("password2").value;
	if(h2!==h1)
	{
		document.getElementById("password2").style.backgroundColor="#ffa0a0";
		document.getElementById("password").innerHTML="Hasła nie są identyczne!";
		document.querySelector(".btn").disabled=true;
		document.querySelector("p").innerHTML="Hasła nie są identyczne!";
	}
	else
	{
		document.getElementById("password2").style.backgroundColor="#FFF";
		document.getElementById("password").innerHTML="";
		document.querySelector(".btn").disabled=false;
		document.querySelector("p").innerHTML="";
	}
}