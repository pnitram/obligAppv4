<?php

@$fortsett=$_POST["fortsett"];

if ($fortsett) {
 	
include("./include/db-tilkobling.php");
$tabell=$_POST["VelgTabell"];
$sqlSetning="SELECT * FROM $tabell;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader=mysqli_num_rows($sqlResultat);

// SPØRRING 2 FOR Å FÅ FILNAVN

$sqlSetning2="SELECT * FROM bilde;";
$sqlResultat2=mysqli_query($db,$sqlSetning2) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader2=mysqli_num_rows($sqlResultat2);


if ($tabell == "klasse") {
	print("<div id='visdataliste'>");
	print("<legend>Liste over registrerte klasser</legend>");
	print("<table class='table table-striped table-responsive'>");
	print("<thead>");
	print("<tr>");
	print("<th>Klassekode</th>");
	print("<th>Klassenavn</th>");
	print("</tr>");
	print("</thead>");
	print("<tbody>");


	
	for ($v=1;$v<=$antallRader;$v++) {

	@$rad=mysqli_fetch_array($sqlResultat);
	@$klassekode=$rad["klassekode"];
	@$klassenavn=$rad["klassenavn"];
	
	print("<tr><td>$klassekode</td> <td>$klassenavn</td></tr>");

}
print("</tbody>");
print("</table>");
print("</div>");
mysqli_close($db);
}

elseif ($tabell=="student") {
	print("<div id='visdataliste'>");
	print("<legend>Liste over registrerte studenter</legend>");
	print("<table class='table table-striped table-responsive'>");
	print("<thead>");
	print("<tr>");
	print("<th>Brukernavn</th>");
	print("<th>Fornavn</th>");
	print("<th>Etternavn</th>");
	print("<th>Klassekode</th>");
	print("<th>Frist</th>");
	print("<th>Bildenr</th>");
	print("<th></th>");
	print("</tr>");
	print("</thead>");
	print("<tbody>");

		for ($r=1;$r<=$antallRader;$r++) {

	$rad=mysqli_fetch_array($sqlResultat);
	$brukernavn=$rad["brukernavn"];
	$fornavn=$rad["fornavn"];
	$etternavn=$rad["etternavn"];
	$klassekode=$rad["klassekode"];
	$frist=$rad["frist"];
	$bildenr=$rad["bildenr"];

	$rad2=mysqli_fetch_array($sqlResultat2);
	$filnavn=$rad2["filnavn"];




	
	print("<tr><td>$brukernavn</td> <td>$fornavn</td> <td>$etternavn</td> <td>$klassekode</td><td>$frist</td><td>$bildenr</td><td><img style='height: 60px;' src='./bilder/$filnavn' alt='Studentbilde-$filnavn'></td></tr>");
	

}
print("</tbody>");
print("</table>");
print("</div>");
print("<script>$('option[value=student]').prop('selected', true);</script>");
mysqli_close($db);

}

elseif ($tabell=="bilde") {
	print("<script>$('option[value=bilde]').prop('selected', true);</script>");
	include "./include/inc_vis-bilder.php";
	/*print("<meta http-equiv='refresh' content='0; url=./vis-bilder.php'>");*/
}
}

?>