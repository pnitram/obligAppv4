<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

@$fortsett=$_POST["fortsett"];

if ($fortsett) {
$beskrivelse=$_POST["beskrivelse"];
$filnavn=$_FILES["fil"]["name"];
$filtype=$_FILES["fil"]["type"];
$filstorrelse=$_FILES["fil"]["size"];
$tmpnavn=$_FILES["fil"]["tmp_name"];
$uploadDate=date("d-m-Y");

include ("./include/db-tilkobling.php");
$sqlSetning="SELECT * FROM bilde WHERE filnavn='$filnavn';";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig å hente fra db");
$antallRader=mysqli_num_rows($sqlResultat);

if (!$beskrivelse || !$filnavn) {
	print ("<div class='alert alert-danger alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button><strong>Beklager! </strong>Alle felt må fylles ut.</div>");


}
else {
	if ($filtype != "image/gif" && $filtype != "image/jpeg" && $filtype != "image/png") {
		print ("<div class='alert alert-danger alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button><strong>Beklager! </strong>Kun tilatt å laste opp bilder av type: jpg, png eller gif.</div>");

	}

	elseif ($filstorrelse > 10000000) {
		print ("<div class='alert alert-danger alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button><strong>Beklager! </strong>Filstørrelsen må være på under 10 MB</div>");
	}

	elseif ($antallRader !=0) {

			
			print ("<div class='alert alert-danger alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button><strong>Beklager! </strong>På grunn av en feil var det ikke mulig å laste opp bilde.<br><br><strong>Bilde/filnavnet finnes fra før.</strong></div>");

		}
	


	else {
		include ("./include/db-tilkobling.php");
			$nyttnavn="/var/www/html/MySchoolProjects/obligAppv4/bilder/" .$filnavn;
			move_uploaded_file($tmpnavn, $nyttnavn) or die("kunne ikke opprette bilde");

			$sqlSetning="INSERT INTO bilde (opplastingsdato,filnavn,beskrivelse) VALUES ('$uploadDate', '$filnavn', '$beskrivelse');";
			if (mysqli_query($db,$sqlSetning)) {
				$siste_bilde_nr = mysqli_insert_id($db);
				$test=sprintf("%03s\n", $siste_bilde_nr);
				
	
				print("<div class='alert alert-success alert-dismissible fade in' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span></button>
					<strong>Suksess! :)</strong><br> Bilde ble lastet opp med bildenr: <strong>" . $test . "</strong></div>");

			}
			else {
                    print ("<div class='alert alert-danger alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button><strong>Beklager! </strong>På grunn av en feil var det ikke mulig å laste opp bilde til $database</div>");
			}
	}

}

}

?>