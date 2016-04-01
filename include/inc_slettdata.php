<?php

@$fortsett=$_POST["fortsett"];


if ($fortsett) {
 	
include("./include/db-tilkobling.php");
$tabell=$_POST["velgTabell"];
$sqlSetning="SELECT * FROM $tabell;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader=mysqli_num_rows($sqlResultat);


if ($tabell == "klasse") {

	print("<form class='form' role='form' method='post' action='' id='endreKlasse' name='endreKlasse' onSubmit='return bekreftSlett()'>");
	print("<fieldset>");
	print("<legend>Slett klasse</legend>");

	print("<div class='form-group'>");
	print("<label for='velgKlasse'>Velg klasse som skal slettes: </label>");
	print("<select class='form-control' name='velgKlasse' id='velgKlasse'>");
	include("./include/listeboks-klassekode.php");
	print("</select>");
	print("</div>");

	print("<div class='form-group'>");
	print("<input type='submit' class='btn btn-info' value='Slett klasse' id='fortsettKlasse' name='fortsettKlasse'/>");
	print("</div>");
	print("</fieldset>");
	print("</form>");


}

else {

	print("<script>$('option[value=student]').prop('selected', true);</script>");
	print("<form method='post' action='' id='endreStudent' name='endreStudent' onSubmit='return bekreftSlett()'/>");
	print("<fieldset>");
	print("<legend>Slett student</legend>");

	print("<div class='form-group'>");
	print("<label for='velgStudent'>Velg student som skal slettes: </label>");
	print("<select class='form-control' name='velgStudent' id='velgStudent'>");
	include("./include/listeboks-student.php");
	print("</select>");
	print("</div>");

	print("<div class='form-group'>");
	print("<input type='submit' class='btn btn-info' value='Slett student' id='fortsettStudent' name='fortsettStudent'/>");
	print("</div>");
	print("</fieldset>");
	print("</form>");
;
}

}

@$fortsettKlasse=$_POST["fortsettKlasse"];
if ($fortsettKlasse) {

	$klassekode=$_POST["velgKlasse"];

	$sqlSetning="DELETE FROM klasse WHERE klassekode='$klassekode'";

    if (!mysqli_query($db,$sqlSetning)) {

    print ("<div class='alert alert-danger alert-dismissible fade in flyttAlert' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Beklager! </strong><p><br>Ikke mulig å slette klassen med klassekode <strong>$klassekode</strong>.<br><br> På grunn av regelen om referanseintegritet så er det ikke mulig å slette en klasse som inneholder studenter.</p></div>");
    mysqli_close($db);
		}
	else {

	print("<div class='alert alert-success alert-dismissible fade in flyttAlert' role='alert'>
               <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
               <span aria-hidden='true'>&times;</span></button><strong>Suksess! :)</strong><br><br><p>Data ble slettet!</p></div>");
	mysqli_close($db);
		}
	


}
/////////////////////////////////////////////////////////////////////////////////////////////
@$fortsettStudent=$_POST["fortsettStudent"];
if ($fortsettStudent) {

	$brukernavn=$_POST["velgStudent"];

	$sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn'";

	if (!mysqli_query($db,$sqlSetning)) {

    print ("<div class='alert alert-danger alert-dismissible fade in flyttAlert' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Beklager! </strong><p><br>Ikke mulig å slette student med brukernavn <strong>$brukernavn</strong>.</p></div>");
    mysqli_close($db);
		}
	else {

	print("<div class='alert alert-success alert-dismissible fade in flyttAlert' role='alert'>
               <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
               <span aria-hidden='true'>&times;</span></button><strong>Suksess! :)</strong><br><br><p>Data ble slettet!</p></div>");
	mysqli_close($db);
		}
		
}



?>