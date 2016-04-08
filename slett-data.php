<!DOCTYPE html>
<html lang="no">
<head>
	<title>Slett data registrert i tabell</title>
		<?php include "./include/header.php"; ?>
</head>
<body>


<!-- INKLUDERER OVERSKRIFT -->
<?php include "./include/page-start.php"; ?>

	<main class="container">

		<div class="row">

	<!-- INKLUDERER HOVEDMENY -->

		<?php include "./include/meny.php"; ?>

		<div class="col-md-4">

				            <?php

            session_start();

@$innloggetBruker=$_SESSION["tuxbrukernavn"];

if (!$innloggetBruker) {
    print('Du må logge inn.');
}

else {
    
    print('

<form method="post" class="form" role="form" action="" id="slett-data" name="slett-data" />
	<fieldset>
		<legend>Slett registrert data</legend>
		<div class="form-group">
			<label for="velgTabell">Velg tabell:</label>
			<select class="form-control" name="velgTabell" id="velgTabell">
			');

			include("./include/listeboks-tabell.php");

			print('
			</select>
			</div>
		<div class="form-group">	
		<input type="submit" class="btn btn-info" value="Fortsett" id="fortsett" name="fortsett"/>
			<a href="./slett-data.php" class="btn btn-info">Tilbake</a>
		</div>
		</fieldset>
</form>
</div>

');
}
?>

<div class="col-md-5">
<!-- INKLUDERER PHP SKJEMA OG DB FEILMELDINGER  -->
<?php include("./include/inc_slettdata.php"); ?> <br>

<!-- SLUTT PÅ PHP -->

<!-- JAVASCRIPT MELDINGER -->
<div id="melding"></div>
</div>
</div>
</main>
<!-- INKUDERER FOOTER -->
<?php include "./include/footer.php"; ?>
</body>
</html>