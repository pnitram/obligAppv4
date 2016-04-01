function fokus(element) {
    element.style.background = "yellow";
}

function mistetFokus(element) {
	element.style.background ="white";
}

function musOverRK(element) {
	document.getElementById("melding").style.color="black";
	if (element == document.getElementById('klassekode')){
		document.getElementById("melding").innerHTML="<div class='alert alert-warning'>Kun STORE BOKSTAVER og siste tegn ett siffer.</div>";
	}
	if (element == document.getElementById('klassenavn')){
		document.getElementById("melding").innerHTML="<div class='alert alert-warning'>Klassenavn må fylles ut.</div>";
	}
}

function musOverRS(element) {
	document.getElementById("melding").style.color="black";
	if (element == document.getElementById('brukernavn')){
		document.getElementById("melding").innerHTML="<div class='alert alert-warning'>Brukernavn må fylles ut.</div>";
	}
	if (element == document.getElementById('fornavn')){
		document.getElementById("melding").innerHTML="<div class='alert alert-warning'>Fornavn må fylles ut.</div>";
	}
	if (element == document.getElementById('etternavn')){
		document.getElementById("melding").innerHTML="<div class='alert alert-warning'>Etternavn må fylles ut.</div>";
	}
		if (element == document.getElementById('klassekode')){
		document.getElementById("melding").innerHTML="<div class='alert alert-warning'>Kun STORE BOKSTAVER og siste tegn ett siffer.</div>";
	}
}

function musOverKL(element) {
	document.getElementById("melding").style.color="black";
	if (element == document.getElementById('search')){
		document.getElementById("melding").innerHTML="<div class='alert alert-warning'>Kun STORE BOKSTAVER og siste tegn ett siffer.</div>";
	}
}

function musUt(element){
	document.getElementById("melding").innerHTML="";
}

function tilStore(element){
	element.value=element.value.toUpperCase();
}

function fjernMelding()
{
  document.getElementById("melding").innerHTML="";   
}

function bekreftSlett() {
	return confirm("Er du sikker?");
}