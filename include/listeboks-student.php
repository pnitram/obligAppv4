<?php

include("./include/db-tilkobling.php");


  	$sqlSetning="SELECT * FROM $tabell;";
  	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() ); 
  	$antallRader=mysqli_num_rows($sqlResultat);

  	for ($r=1;$r<=$antallRader;$r++) {

  		$rad = mysqli_fetch_array($sqlResultat);
  		$brukernavn=$rad["0"];
  		$fornavn=$rad["1"];
      $etternavn=$rad["2"];
      $klassekode=$rad["3"];
  	
		print("<option value='$brukernavn' name='brukernavn'>$brukernavn - $fornavn $etternavn</option> <br>");
  	}
?>