<?php

@session_start();

@$innloggetBruker=$_SESSION["tuxbrukernavn"];

if (!$innloggetBruker) {
    print(' ');
}

else {
  

include("./include/db-tilkobling.php");


  	$sqlSetning="SELECT * FROM bilde;";
  	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() ); 
  	$antallRader=mysqli_num_rows($sqlResultat);


  	for ($r=1;$r<=$antallRader;$r++) {

  		$rad = mysqli_fetch_array($sqlResultat);
        $bildenr=$rad["bildenr"];
        $opplastingsdato=$rad["opplastingsdato"];
        $filnavn=$rad["filnavn"];
        $beskrivelse=$rad["beskrivelse"];

    print("<option value='$bildenr' name='velgBildenr'>$bildenr - $filnavn</option> <br>");


  	}
    print("<script>$('select option:contains($bildenrPreSelected)').prop('selected',true);</script>");
}
?>