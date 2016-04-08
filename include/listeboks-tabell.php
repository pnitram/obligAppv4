<?php



session_start();

@$innloggetBruker=$_SESSION["tuxbrukernavn"];

if (!$innloggetBruker) {
    print(' ');
}

else {
    


include("./include/db-tilkobling.php");

 	$tabellListe = array();
  	$sqlSetning="SHOW TABLES WHERE `Tables_in_oblig4` NOT LIKE 'bruker';";
  	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() ); 

  while($rad = mysqli_fetch_array($sqlResultat))
  {
    $tabellnavn=$rad["0"];
    print("<option value='$tabellnavn'>$tabellnavn</option>");

  }
}

?>

