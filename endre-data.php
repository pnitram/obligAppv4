<!DOCTYPE html>
<html lang="no">
<head>
	<title>Endre registrert data</title>
	<meta charset="utf-8">
		<!-- INKLUDERER HEADER -->

	<?php include "./include/header.php"; ?>
</head>
<body>

<!-- VIS DATA REGISTRERT I TABELL -->

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
			<form class="form" role="form" method="post" action="" id="endre-data" name="endre-data" onSubmit="return bekreft()">
			<fieldset>
			<legend>Endre registrert data</legend>

				<div class="form-group">
					<label for="velgTabell">Velg tabell:</label>
					<select class="form-control" name="velgTabell" id="velgTabell">');
					include("./include/listeboks-tabell.php");

					print('

					<br>

					</select>
				</div>

		<div class="form-group">
			<input type="submit" class="btn btn-info" value="Fortsett" id="fortsett" name="fortsett"/>
			

			<a href="./endre-data.php" class="btn btn-info">Tilbake</a>
		</div>
		</fieldset>
		</form>
		</div>

		');

}
?>

<div class="col-md-5">
<!-- INKLUDERER PHP SKJEMA OG DB FEILMELDINGER  -->

<?php include "./include/inc_endredata.php"; ?>
<!-- JAVASCRIPT MELDINGER -->
<div id="melding"></div>

<!-- SLUTT PÅ PHP -->
</div>

</div>

</main>

<!-- INKUDERER FOOTER -->
<?php include "./include/footer.php"; ?>
</body>
</html>