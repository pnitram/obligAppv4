<!DOCTYPE html>
<html lang="no">
<head>
	<title>Vis registrert data</title>

		<!-- INKLUDERER HEADER -->

	<?php include "./include/header.php"; ?>

</head>
<body>
    <!-- INKLUDERER OVERSKRIFT -->
        <?php include "./include/page-start.php"; ?>
	<main class="container">

		<div class="row">

	<!-- INKLUDERER HOVEDMENY -->

		<?php include "./include/meny.php"; ?>

<!-- VIS DATA REGISTRERT I TABELL -->
<div class="col-md-4">

            <?php

            @session_start();

@$innloggetBruker=$_SESSION["tuxbrukernavn"];

if (!$innloggetBruker) {
    print('Du må logge inn.');
}

else {
    
    print('

<form class="form" role="form" method="post" action="" id="les-data" name="les-data">
<fieldset>
<legend>Vis registrert data</legend>
<div class="form-group">
<label for="VelgTabell">Velg tabell:</label>
<select class="form-control" id="VelgTabell" name="VelgTabell" required/>
<option value="bilde">bilde</option>
<option value="klasse">klasse</option>
<option value="student">student</option>
</select>
</div>
<div class="form-group">
<input type="submit" class="btn btn-info" value="Vis" id="fortsett" name="fortsett"/>
<a href="./vis-data-registrert.php" type="button" class="btn btn-info">Tilbake</a>
</div>
</fieldset>
</form>
</div>
');
}
?>



<div class="col-md-9 pull-down">

<!-- INKLUDERER PHP SKJEMA OG DB FEILMELDINGER  -->
<?php include "./include/inc_vis-data.php"; ?>



</div>


<!-- SLUTT PÅ INKLUDERT PHP SKJEMA-->


<!-- JAVASCRIPT MELDINGER -->
<div id="melding"></div>

</div>

</main>

<!-- INKULDERER FOOTER -->
<?php include "./include/footer.php"; ?>


</body>
</html>



