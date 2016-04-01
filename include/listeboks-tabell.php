<?php

include("./include/db-tilkobling.php");

 	$tabellListe = array();
  	$sqlSetning="SHOW TABLES;";
  	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() ); 

  while($rad = mysqli_fetch_array($sqlResultat))
  {
    $tabellnavn=$rad["0"];
    print("<option value='$tabellnavn'>$tabellnavn</option>");

  }

?>

