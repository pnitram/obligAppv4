<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

@$fortsett=$_POST["fortsett"];

if ($fortsett) {
$bildenr=$_POST["bildenr"];
$beskrivelse=$_POST["beskrivelse"];
$filnavn=$_FILES["fil"]["name"];
$filtype=$_FILES["fil"]["type"];
$filstorrelse=$_FILES["fil"]["size"];
$tmpnavn=$_FILES["fil"]["tmp_name"];
$uploadDate=date("d-m-Y");

if (!$bildenr || !$beskrivelse || !$filnavn) {
	print("Alle felt på fylles ut");
}
else {
	if ($filtype != "image/gif" && $filtype != "image/jpeg" && $filtype != "image/png") {
		print("Kun tilatt å laste opp bilder");
	}

	elseif ($filstorrelse > 10000000) {
		print("Filstørrelsen må være under 10 MB");
	}

	else {
		include ("./include/db-tilkobling.php");

		$sqlSetning="SELECT * FROM bilde WHERE bildenr='$bildenr';";
		$sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig å hente fra db");
		$antallRader=mysqli_num_rows($sqlResultat);

		if ($antallRader !=0) {
			print("Finnes fra før");
		}

		else {
			$nyttnavn="/var/www/html/MySchoolProjects/obligAppv4/bilder/" .$filnavn;
			move_uploaded_file($tmpnavn, $nyttnavn) or die("kunne ikke opprette bilde");

			$sqlSetning="INSERT INTO bilde (bildenr,opplastingsdato,filnavn,beskrivelse) VALUES ('$bildenr', '$uploadDate', '$filnavn', '$beskrivelse');";
			mysqli_query($db,$sqlSetning) or die ("ikke mulig å registrere i db");
			print("bilde er nå registrert");

		}
	}

}

}

?>