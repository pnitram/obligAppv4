


function fjernMelding()
{
	document.getElementById("melding").innerHTML="";
}


function validerRegistrerStudent()
{
  var brukernavn=document.getElementById("brukernavn").value;
  var fornavn=document.getElementById("fornavn").value;
  var etternavn=document.getElementById("etternavn").value;
  var klassekode=document.getElementById("klassekode").value;

  var feilmelding="";

  if (!brukernavn)
    {
        feilmelding=feilmelding + "Brukernavn er ikke korrekt fylt ut. <br />";
    }
  if (!fornavn)
    {
        feilmelding=feilmelding + "Fornavn er ikke fylt ut. <br />";
    }
  if (!etternavn)
    {
        feilmelding=feilmelding + "Etternavn er ikke fylt ut. <br />";
    }
   if (!klassekode)
    {
        feilmelding=feilmelding + "Klassekode er ikke fylt ut. <br />";
    }

  if (brukernavn && fornavn && etternavn && klassekode)
    {
        return true;
    }
  else
    {
        document.getElementById("melding").style.color="red";	
        document.getElementById("melding").innerHTML=feilmelding;	
        return false;
    }	
} 

function validerRegistrerKlasse()
{
  var klassekode=document.getElementById("klassekode").value;
  var klassenavn=document.getElementById("klassenavn").value;

  var feilmelding="";

  if (!klassekode)
    {
        feilmelding=feilmelding + "Klassekode er ikke korrekt fylt ut. <br />";
    }
  if (!klassenavn)
    {
        feilmelding=feilmelding + "Klassenavn er ikke korrekt fylt ut. <br />";
    }

  if (klassekode && klassenavn)
    {
        return true;
    }
  else
    {
        document.getElementById("melding").style.color="red";	
        document.getElementById("melding").innerHTML=feilmelding;	
        return false;
    }	
} 