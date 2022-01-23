function haslo() {
	var pass1 = document.getElementById("password");
	var pass2 = document.getElementById("password2");
	if(pass2.value !== pass1.value)
	{
		if(!(pass1 === document.activeElement || pass2 === document.activeElement) && (pass1.value !== "" && pass2.value !== "")){
			pass2.style.backgroundColor="#ffa0a0";
			pass1.innerHTML="Hasła nie są identyczne!";
			document.querySelector(".btn").disabled=true;
			document.querySelector("p").innerHTML="Hasła nie są identyczne!";
		}
	}
	else
	{
		pass2.style.backgroundColor="#FFF";
		pass1.innerHTML="";
		document.querySelector(".btn").disabled=false;
		document.querySelector("p").innerHTML="";
	}
}

function hg() {
	ID=window.location.hash;
	ID=ID.slice(1,ID.length);
	console.log(ID);
	let pos=document.getElementById(ID);
	pos.classList.add("light");
	
	pos.addEventListener("mouseenter", function(event) { event.target.classList.remove("light")});
}