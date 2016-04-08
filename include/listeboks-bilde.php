<?php


@session_start();

@$innloggetBruker=$_SESSION["tuxbrukernavn"];

if (!$innloggetBruker) {
    print(' ');
}

else {

include("./include/db-tilkobling.php");


  	$sqlSetning="SELECT * FROM $tabell;";
  	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() ); 
  	$antallRader=mysqli_num_rows($sqlResultat);


  	for ($r=1;$r<=$antallRader;$r++) {

  		$rad = mysqli_fetch_array($sqlResultat);
        $bildenr=$rad["bildenr"];
        $opplastingsdato=$rad["opplastingsdato"];
        $filnavn=$rad["filnavn"];
        $beskrivelse=$rad["beskrivelse"];

print("<tr><td><input type='radio' name='velgBildeRadio' value='$bildenr'></td><td>$bildenr</td><td>$beskrivelse</td><td><img style='height: 40px;' src='./bilder/$filnavn' alt='Studentbilde-$filnavn'></td></tr>");

/*print("<tr><td><input type='radio' name='velgBildeRadio' value='$bildenr'></td><td>$bildenr</td><td>$beskrivelse</td><td><img style='height: 40px;' src='https://home.hbv.no/phptemp/882555/bilder/$filnavn' alt='Studentbilde-$filnavn'></td></tr>");*/

  	}
  }
?>