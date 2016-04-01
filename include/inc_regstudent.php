<?php
error_reporting(E_ALL);
@$fortsett=$_POST["fortsett"];
    
    @$brukernavn=$_POST["brukernavn"];
    @$fornavn=$_POST["fornavn"];
    @$etternavn=$_POST["etternavn"];
	@$klassekode=$_POST["klassekode"];
    @$frist=$_POST["frist"];
    @$bildenr=$_POST["bildenr"];
    /*@$klassekode=strtoupper($klassekode);*/


if ($fortsett) {
if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode || !$frist) {
	print("Feltene er ikke fyllt ut.<br>");
}

else {

        include("./include/valider-klassekode.php");
        $lovligKlassekode=validerklassekode($klassekode);

            if (!$lovligKlassekode) {
                print("Klassekoden er ikke korrekt fyllt ut");
                    }

            else { 
                include("./include/db-tilkobling.php");
                $sqlSetning="INSERT INTO student VALUES('$brukernavn','$fornavn', '$etternavn', '$klassekode', '$frist', '$bildenr');";
                print("$sqlSetning");

                if (!mysqli_query($db,$sqlSetning)) {

                    print ("<div class='alert alert-danger alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button><strong>Beklager! </strong>På grunn av en feil var det ikke mulig å registrere data i databasen: $database </div>");
                        mysqli_close($db);  }                         
                else {
                    print("<div class='alert alert-success alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button><strong>Suksess! :)</strong> Følgende data ble registrert:<br><br> Brukernavn: <strong>$brukernavn</strong> <br> Fornavn: <strong>$fornavn </strong> <br> Etternavn: <strong>$etternavn </strong> <br> Klassekode: <strong>$klassekode </strong> <br> Innleveringsfrist: <strong>$frist</strong><br>Bildenummer: <strong>$bildenr</strong> </div>");
                    mysqli_close($db);
                            }

                    

    }
}

}
?>