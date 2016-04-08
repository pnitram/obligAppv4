<?php

@session_start();

@$innloggetBruker=$_SESSION["tuxbrukernavn"];

if (!$innloggetBruker) {
    print(' ');
}

else {
    

@$fortsett=$_POST["fortsett"];


if ($fortsett) {

	$sokestreng = $_POST["find"];
	include("./include/db-tilkobling.php");
	print("<legend class='justerLegend'>S&oslash;k etter: <strong>$sokestreng</strong></legend>");

/* SØK I KLASSETABELL */

	$sqlSetning="SELECT * FROM klasse WHERE klassekode LIKE '%$sokestreng%' OR klassenavn LIKE '%$sokestreng%';";
	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
	$antallRader=mysqli_num_rows($sqlResultat);

	if ($antallRader==0) {
		print("<div class='well well-lg'>");
		print("<h4>Treff i klasse tabellen:</h4><hr>");
		print("<p class='text-center'><i>Ingen treff</i></p>");
		print("</div>");
	}
	else {
		print("<div class='well well-lg'>");
		print("<h4>Treff i klasse tabellen:</h4><hr>");
		print("<ul>");


		for ($r=1; $r<=$antallRader;$r++) { 
			$rad=mysqli_fetch_array($sqlResultat);
			$klassekode=$rad["klassekode"];
			$klassenavn=$rad["klassenavn"];

			$tekst="$klassekode - $klassenavn";

			$tekstlengde=strlen($tekst);
			$sokestrenglengde=strlen($sokestreng);
			$startpos=stripos($tekst,$sokestreng);
			$hode=substr($tekst,0,$startpos);
			$hale=substr($tekst,$startpos+$sokestrenglengde,$tekstlengde-$startpos-$sokestrenglengde);

			print("<li><p>$hode<strong>$sokestreng</strong>$hale</p></li>");


		}
		print("</ul></div>");
	}

/* SØK I STUDENT TABELL */

	$sqlSetning="SELECT * FROM student WHERE brukernavn LIKE '%$sokestreng%' OR fornavn LIKE '%$sokestreng%' OR etternavn LIKE '%$sokestreng%' OR klassekode LIKE '%$sokestreng%';";
	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
	$antallRader=mysqli_num_rows($sqlResultat);

	if ($antallRader==0) {
		print("<div class='well well-lg'>");
		print("<h4>Student tabellen:</h4><hr>");
		print("<p class='text-center'><i>Ingen treff</i></p>");
		print("</div>");
	}
	else {
		print("<div class='well well-lg'>");
		print("<h4>Treff i student tabellen:</h4><hr>");
		print("<ul>");


		for ($r=1; $r<=$antallRader;$r++) { 
			$rad=mysqli_fetch_array($sqlResultat);
			$brukernavn=$rad["brukernavn"];
			$fornavn=$rad["fornavn"];
			$etternavn=$rad["etternavn"];
			$klassekode=$rad["klassekode"];

			$tekst="$brukernavn - $fornavn $etternavn - $klassekode";

			$tekstlengde=strlen($tekst);
			$sokestrenglengde=strlen($sokestreng);
			$startpos=stripos($tekst,$sokestreng);
			$hode=substr($tekst,0,$startpos);
			$hale=substr($tekst,$startpos+$sokestrenglengde,$tekstlengde-$startpos-$sokestrenglengde);

			print("<li><p>$hode<strong>$sokestreng</strong>$hale</p></li>");


		}
		print("</ul></div>");
	}



	$sqlSetning="SELECT * FROM bilde WHERE bildenr LIKE '%$sokestreng%' OR opplastingsdato LIKE '%$sokestreng%' OR filnavn LIKE '%$sokestreng%' OR beskrivelse LIKE '%$sokestreng%';";
	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
	$antallRader=mysqli_num_rows($sqlResultat);

	if ($antallRader==0) {
		print("<div class='well well-lg'>");
		print("<h4>Bilde tabellen:</h4><hr>");
		print("<p class='text-center'><i>Ingen treff</i></p>");
		print("</div>");
	}
	else {
		print("<div class='well well-lg'>");
		print("<h4>Treff i bilde tabellen:</h4><hr>");
		print("<ul>");


		for ($r=1; $r<=$antallRader;$r++) { 
			$rad=mysqli_fetch_array($sqlResultat);
			$bildenr=$rad["bildenr"];
			$opplastingsdato=$rad["opplastingsdato"];
			$filnavn=$rad["filnavn"];
			$beskrivelse=$rad["beskrivelse"];

			$tekst="$bildenr - $opplastingsdato - $filnavn - $beskrivelse";

			$tekstlengde=strlen($tekst);
			$sokestrenglengde=strlen($sokestreng);
			$startpos=stripos($tekst,$sokestreng);
			$hode=substr($tekst,0,$startpos);
			$hale=substr($tekst,$startpos+$sokestrenglengde,$tekstlengde-$startpos-$sokestrenglengde);

			print("<li><p>$hode<strong>$sokestreng</strong>$hale</p></li>");


		}
		print("</ul></div>");
	}




}

}

?>