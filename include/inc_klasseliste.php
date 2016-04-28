<?php

@session_start();

@$innloggetBruker=$_SESSION["tuxbrukernavn"];

if (!$innloggetBruker) {
    print(' ');
}

else {
    

@$fortsett=$_POST["fortsett"];

if ($fortsett) {
 	
include("./include/db-tilkobling.php");
$klasse=$_POST["VelgTabell"];
$sqlSetning="SELECT * FROM student WHERE klassekode='$klasse';";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader=mysqli_num_rows($sqlResultat);

$sqlSetning3="SELECT klassenavn FROM klasse WHERE klassekode='$klasse' ;";
$sqlResultat3=mysqli_query($db,$sqlSetning3) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader3=mysqli_num_rows($sqlResultat3);

	$rad3=mysqli_fetch_array($sqlResultat3);
	$klassenavn3=$rad3["klassenavn"];


// SPØRRING 2 FOR Å FÅ FILNAVN

	print("<div id='visdataliste'>");
	print("<legend>$klasse - $klassenavn3</legend>");
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

	$sqlSetning2="SELECT filnavn FROM bilde WHERE bildenr='$bildenr' ;";
$sqlResultat2=mysqli_query($db,$sqlSetning2) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader2=mysqli_num_rows($sqlResultat2);

	$rad2=mysqli_fetch_array($sqlResultat2);
	$filnavn2=$rad2["filnavn"];



	
	print("<tr><td>$brukernavn</td> <td>$fornavn</td> <td>$etternavn</td> <td>$klassekode</td><td>$frist</td><td>$bildenr</td><td><img style='height: 60px;' src='./bilder/$filnavn2' alt='Studentbilde-$filnavn2'></td></tr>");

	/*print("<tr><td>$brukernavn</td> <td>$fornavn</td> <td>$etternavn</td> <td>$klassekode</td><td>$frist</td><td>$bildenr</td><td><img style='height: 60px;' src='https://home.hbv.no/phptemp/882555/bilder/$filnavn2' alt='Studentbilde-$filnavn2'></td></tr>");*/

	
	

}
print("</tbody>");
print("</table>");
print("</div>");
print("<script>$('option[value=$klasse]').prop('selected', true);</script>");
mysqli_close($db);


}
}

?>