<?php

//---- MED VALIDERING -----

@$fortsett=$_POST["fortsett"];
    @$klassekode=$_POST["klassekode"];
    @$klassenavn=$_POST["klassenavn"];
    /*@$klassekode=strtoupper($klassekode);*/

if ($fortsett) {
if (!$klassekode || !$klassenavn) {
    print("Begge felt må være fyllt ut.<br>");
}

else {
        include("./include/valider-klassekode.php");

        $lovligKlassekode=validerKlassekode($klassekode);


            if (!$lovligKlassekode) {
                print("<div class='alert alert-danger'><strong>Feil!</strong> Klassekoden er ikke korrekt fyllt ut.</div>");
                    }

            else {

                            include("./include/db-tilkobling.php");
                            $sqlSetning="INSERT INTO klasse VALUES('$klassekode','$klassenavn');";
                            if (!mysqli_query($db,$sqlSetning)) {

                             print ("<div class='alert alert-danger alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button><strong>Beklager! </strong>På grunn av en feil var det ikke mulig å registrere data i databasen: $database </div>");
                          }                         
                            else {
                                print("<div class='alert alert-success alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span></button><strong>Suksess! :)</strong> Følgende data ble registrert:<br><br> Klassekode: <strong>$klassekode</strong> <br> Klassenavn: <strong>$klassenavn </strong></div>");
                            }
                           

                    }





}
}

?>