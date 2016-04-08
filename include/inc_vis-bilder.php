<?php

session_start();

@$innloggetBruker=$_SESSION["tuxbrukernavn"];

if (!$innloggetBruker) {
    print(' ');
}

else {
    

include("./include/db-tilkobling.php");
$tabell="bilde";
$sqlSetning="SELECT * FROM $tabell;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader=mysqli_num_rows($sqlResultat);


	print("<div id='vis-alle-bilder'>");
	print("<legend>Liste over alle lagrede bilder </legend>");
	print("<table class='table table-striped table-responsive'>");
	print("<thead>");
	print("<tr>");
	print("<th>Bildenr</th>");
	print("<th>Opplastingsdato</th>");
	print("<th>Filnavn</th>");
	print("<th>Beskrivelse</th>");
	print("<th></th>");
	print("</tr>");
	print("</thead>");
	print("<tbody>");


	
	for ($v=1;$v<=$antallRader;$v++) {

	@$rad=mysqli_fetch_array($sqlResultat);
	@$bildenr=$rad["bildenr"];
	@$opplastingsdato=$rad["opplastingsdato"];
	@$filnavn=$rad["filnavn"];
	@$beskrivelse=$rad["beskrivelse"];

	
	print("<tr><td>$bildenr</td><td>$opplastingsdato</td><td>$filnavn</td> <td>$beskrivelse</td><td><img style='height: 60px;' src='./bilder/$filnavn' alt='Studentbilde-$filnavn'></td></tr>");

}
print("</tbody>");
print("</table>");
print("</div>");
mysqli_close($db);

}

?>