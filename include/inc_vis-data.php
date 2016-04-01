<?php

@$fortsett=$_POST["fortsett"];

if ($fortsett) {
 	
include("./include/db-tilkobling.php");
$tabell=$_POST["VelgTabell"];
$sqlSetning="SELECT * FROM $tabell;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader=mysqli_num_rows($sqlResultat);


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

else {
	print("<div id='visdataliste'>");
	print("<legend>Liste over registrerte studenter</legend>");
	print("<table class='table table-striped table-responsive'>");
	print("<thead>");
	print("<tr>");
	print("<th>Brukernavn</th>");
	print("<th>Fornavn</th>");
	print("<th>Etternavn</th>");
	print("<th>Klassekode</th>");
	print("</tr>");
	print("</thead>");
	print("<tbody>");

		for ($r=1;$r<=$antallRader;$r++) {

	$rad=mysqli_fetch_array($sqlResultat);
	$brukernavn=$rad["brukernavn"];
	$fornavn=$rad["fornavn"];
	$etternavn=$rad["etternavn"];
	$klassekode=$rad["klassekode"];
	
	print("<tr><td>$brukernavn</td> <td>$fornavn</td> <td>$etternavn</td> <td>$klassekode</td></tr>");
	

}
print("</tbody>");
print("</table>");
print("</div>");
print("<script>$('option[value=student]').prop('selected', true);</script>");
mysqli_close($db);

}
}

?>