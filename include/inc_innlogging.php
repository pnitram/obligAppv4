<?php

include("../include/sjekk.php");

$brukernavn=$_POST["brukernavn"];
$passord=$_POST["passord"];

if (!sjekkBrukernavnPassord($brukernavn,$passord)) {
	print("Feil brukernavn/passord");
	print("<meta http-equiv='refresh' content='2;URL=../index.php'>");
}
else  {
	
	@session_start();
	$_SESSION["tuxbrukernavn"]=$brukernavn;

	print("<meta http-equiv='refresh' content='0;URL=../index.php'>");

}


?>