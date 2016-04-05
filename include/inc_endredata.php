<?php

@$fortsett=$_POST["fortsett"];


if ($fortsett) {
 	
include("./include/db-tilkobling.php");
$tabell=$_POST["velgTabell"];
$sqlSetning="SELECT * FROM $tabell;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader=mysqli_num_rows($sqlResultat);


if ($tabell == "klasse") {

	print("<form class='form' role='form' method='post' action='' id='endreKlasse' name='endreKlasse' onSubmit='return bekreft()'/>");
	print("<fieldset>");
	print("<legend>Klasse som skal endres</legend>");
	print("<div class='form-group'>");
	print("<label for='velgKlasse'>Velg klasse: </label>");
	print("<small><i> (klassekode - klassenavn) </i></small>");
	print("<select class='form-control' name='velgKlasse' id='velgKlasse'>");
	include("./include/listeboks-klassekode.php");
	print("</select>");
	print("</div>");
	print("<div class='form-group'>");
	print("<input type='submit' class='btn btn-info' value='Fortsett' id='fortsettKlasse' name='fortsettKlasse'/>");
	print("</div>");
	print("</fieldset>");
	print("</form>");


}

elseif ($tabell == "student") {
	print("<script>$('option[value=student]').prop('selected', true);</script>");
	print("<form class='form' role='form' method='post' action='' id='endreStudent' name='endreStudent' onSubmit='return bekreft()'/>");
	print("<fieldset>");
	print("<legend>Student som skal endres</legend>");
	print("<div class='form-group'>");
	print("<label for='velgStudent'>Velg student: </label>");
	print("<small><i> (brukernavn - navn) </i></small>");
	print("<select class='form-control' name='velgStudent' id='velgStudent'>");
	include("./include/listeboks-student.php");
	print("</select>");
	print("</div>");
	print("<div class='form-group'>");
	print("<input type='submit' class='btn btn-info' value='Fortsett' id='fortsettStudent' name='fortsettStudent'/>");
	print("</div>");
	print("</fieldset>");
	print("</form>");
}

elseif ($tabell == "bilde") {

	print("<form class='form' role='form' method='post' action='' id='endreBilde' name='endreBilde' onSubmit='return bekreft()'/>");
	print("<fieldset>");
	print("<legend>Velg bilde som skal endres</legend>");
	print("<div class='form-group'>");
  print("<table class='table table-striped table-responsive'>");
  print("<thead>");
  print("<tr>");
  print("<th></th>");
  print("<th>Bildenr</th>");
  print("<th>Opplastingsdato</th>");
  print("<th>Filnavn</th>");
  print("<th>Beskrivelse</th>");
  print("<th></th>");
  print("</tr>");
  print("</thead>");
  print("<tbody>");


	include("./include/listeboks-bilde.php");
	print("</tbody>");
	print("</table>");
	print("</div>");
	print("<div class='form-group'>");
	print("<input type='submit' class='btn btn-info' value='Fortsett' id='fortsettKlasse' name='fortsettKlasse'/>");
	print("</div>");
	print("</fieldset>");
	print("</form>");


}

}

@$fortsettKlasse=$_POST["fortsettKlasse"];
if ($fortsettKlasse) {

	$klassekode=$_POST["velgKlasse"];

	$sqlSetning="SELECT * FROM klasse WHERE klassekode='$klassekode'";
	$sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() );
	$antallRader=mysqli_num_rows($sqlResultat);

	if ($antallRader==0) {
		print("<div class='alert alert-warning'><strong>Feil!</strong>Klassekode er ikke registrert i tabell</div>");
	}

	else {

		$rad=mysqli_fetch_array($sqlResultat);
		$klassekode=$rad["klassekode"];
		$klassenavn=$rad["klassenavn"];

		print("<form class='form' role='form' method='post' action='' id='endreSteg3' name='endreSteg3' onSubmit='return bekreft()'>");
		print("<fieldset>");
		print("<legend>Endre klassedata for</legend>");
		print("<small><p><b>Klassekode: </b>$klassekode</p>");
		print("<p><b>Klassenavn: </b>$klassenavn</p></small>");
		print("<hr>");

		print("<div class='form-group'>");
		print("<label for='klassekode'>Klassekode:<span class='notbold'><i> (kan ikke endres)</i> </span> </label>");
		print("<input type='search' class='form-control' id='klassekode' name='klassekode' value='$klassekode' readonly />");
		print("</div>");

		print("<div class='form-group'>");
		print("<label for='klassenavn'>Nytt klassenavn: </label>");
		print("<input type='text' class='form-control' id='klassenavn' name='klassenavn' value='$klassenavn' onfocus='fokus(this)' onblur='mistetFokus(this)' onmouseover='musOverRK(this)' onmouseout='musUt(this)' required />");
		print("</div>");

		print("<div class='form-group'>");
		print("<input type='submit' class='btn btn-info' value='Endre' id='fortsett3' name='fortsett3'/>");
		print("<input type='button' class='btn btn-info endreKlasseSubmit' value='Nullstill' id='nullstill' name='nullstill' onclick='clearForm(this.form)'/>");
		print("</div>");

		print("</fieldset>");
		print("</form>");
	}

}
@$fortsett3=$_POST["fortsett3"];

if ($fortsett3){

	$klassekode=$_POST["klassekode"];
	$klassenavn=$_POST["klassenavn"];

	if (!$klassekode || !$klassenavn) {

		print("<div class='alert alert-warning'><strong>Felt må fylles ut!</strong></div>");
	}

	else {

		$sqlSetning="UPDATE klasse SET klassenavn='$klassenavn' WHERE klassekode='$klassekode';";
		mysqli_query($db, $sqlSetning) or die ("Ikke mulig å endre i $database: " .mysqli_error() );

		print("<div class='alert alert-success alert-dismissible fade in flyttAlert' role='alert'>
               <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
               <span aria-hidden='true'>&times;</span></button><strong>Suksess! :)</strong><br><br><p>Data er endret i klasse med klassekode <strong>$klassekode</strong> </p></div>");
		
	}


}
/////////////////////////////////////////////////////////////////////////////////////////////
@$fortsettStudent=$_POST["fortsettStudent"];
if ($fortsettStudent) {

	$brukernavn=$_POST["velgStudent"];

	$sqlSetning="SELECT * FROM student WHERE brukernavn='$brukernavn'";
	$sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() );
	$antallRader=mysqli_num_rows($sqlResultat);

	if ($antallRader==0) {
		print("<div class='alert alert-warning'><strong>Student er ikke registrert i tabell</strong></div>");
	}

	else {

		$rad=mysqli_fetch_array($sqlResultat);
		$brukernavn=$rad["brukernavn"];
		$fornavn=$rad["fornavn"];
		$etternavn=$rad["etternavn"];
		$klassekode=$rad["klassekode"];
		$klassekodePreSelected=$klassekode;

		print("<script>$('option[value=student]').prop('selected', true);</script>");
		print("<form class='form' role='form' method='post' action='' id='endreSteg4' name='endreSteg4' onSubmit='return bekreft()'/>");
		print("<fieldset>");
		print("<legend>Endre studentdata for</legend>");
		print("<small><p><b>Brukernavn: </b>$brukernavn<br><b>Navn:</b> $fornavn $etternavn <br><b>Klassekode:</b> $klassekode </p></small>");
		print("<hr>");

		print("<div class='form-group'>");
		print("<label for='brukernavn'>Brukernavn:<span class='notbold'><i> (kan ikke endres)</i> </span> </label>");
		print("<input type='search' class='form-control' id='brukernavn' name='brukernavn' value='$brukernavn' readonly />");
		print("</div>");

		print("<div class='form-group'>");
		print("<label for='fornavn'>Fornavn:</label>");
		print("<input type='text' class='form-control' id='fornavn' name='fornavn' value='$fornavn' onfocus='fokus(this)' onblur='mistetFokus(this)' onmouseover='musOverRS(this)' onmouseout='musUt(this)' required/>");
		print("</div>");

		print("<div class='form-group'>");
		print("<label for='etternavn'>Etternavn:</label>");
		print("<input type='text' class='form-control' id='etternavn' name='etternavn' value='$etternavn' onfocus='fokus(this)' onblur='mistetFokus(this)' onmouseover='musOverRS(this)' onmouseout='musUt(this)'  required/>");
		print("</div>");

		print("<div class='form-group'>");
		print("<label for='klassekode'>Klassekode:<span class='notbold'><i> (klassekode - klassenavn)</i> </span> </label>");
		print("<select class='form-control' name='klassekode'>");
		include("./include/listeboks-klassekode-reg.php");
		print("</select>");
		print("</div>");

		print("<div class='form-group'>");	
		print("<input type='submit' class='btn btn-info' value='Endre' id='fortsett4' name='fortsett4'/>");
		print("<input type='button' class='btn btn-info endreKlasseSubmit' value='Nullstill' id='nullstill' name='nullstill' onclick='clearForm(this.form)' />");
		print("</div>");

		print("</fieldset>");
		print("</form>");

	}

}
@$fortsett4=$_POST["fortsett4"];

if ($fortsett4){

	$brukernavn=$_POST["brukernavn"];
	$fornavn=$_POST["fornavn"];
	$etternavn=$_POST["etternavn"];
	$klassekode=$_POST["klassekode"];

	if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode) {

		print("<div class='alert alert-warning'><strong>Alle felt må fylles ut!</strong></div>");
	}

	else {

		$sqlSetning="UPDATE student SET fornavn='$fornavn', etternavn='$etternavn', klassekode='$klassekode' WHERE brukernavn='$brukernavn';";
		mysqli_query($db, $sqlSetning) or die ("Ikke mulig å endre i $database: " .mysqli_error() );
		print("<div class='alert alert-success alert-dismissible fade in flyttAlert' role='alert'>
               <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
               <span aria-hidden='true'>&times;</span></button><strong>Suksess! :)</strong><br><br><p>Data er endre på student med brukernavn <strong>$brukernavn</strong></p></div>");
		mysqli_close($db);
	}


}



?>