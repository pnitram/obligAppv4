<!DOCTYPE html>
<html lang="no">
<head>
	<title>Registrere klasse</title>
    <!-- INKLUDERER HEADER -->
    <?php include "./include/header.php"; ?>
</head>

<body>

    
    <!-- INKLUDERER OVERSKRIFT -->
        <?php include "./include/page-start.php"; ?>

    <main class="container">
        <div class="row">
                <!-- INKUDERE MENY - DENNE ER: class="col-md-3" -->
                <?php include "./include/meny.php"; ?>
        
        <!-- REGISTRER KLASSE SKJEMA -->

        <div class="col-md-4">


<?php

session_start();

@$innloggetBruker=$_SESSION["tuxbrukernavn"];

if (!$innloggetBruker) {
    print('Du må logge inn.');
}

else {
    
    print('

            
                <form class="form" role="form" method="post" action="" id="reg-klasse" name="reg-klasse" onsubmit="return validerRegistrerKlasse()">
                <fieldset>
                    <legend>Registrere ny klasse</legend>
                    <div class="form-group">
                        <label for="klassekode">Klassekode:</label>
                        <input type="text" class="form-control" id="klassekode" name="klassekode" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRK(this)" onmouseout="musUt(this)" onchange="tilStore(this)" required/>
                    </div>
                    <div class="form-group">
                        <label for="klassenavn">Klassenavn:</label>
                        <input type="text" class="form-control" id="klassenavn" name="klassenavn" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRK(this)" onmouseout="musUt(this)" required/>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-info" value="Registrer" id="fortsett" name="fortsett"/>
                      <input type="reset" class="btn btn-info" value="Nullstill" id="nullstill" name="nullstill"/>
                    </div>
                </fieldset>
                </form>


<!-- INKLUDERER PHP SKJEMA OG DB FEILMELDINGER  -->


');
 include "./include/inc_regklasse.php";
        
}


?>




<!-- SLUTT PÅ INKLUDERT PHP SKJEMA-->

<!-- JAVASCRIPT MELDINGER -->
<div id="melding"></div>

</div>

</div>
</main>

<!-- INKULDERER FOOTER -->
<?php include "./include/footer.php"; ?>


</body>
</html>
