<!DOCTYPE html>
<html>
<head>
	<title>S&Oslash;K ETTER DATA REGISTRERT I TABELL</title>
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

<form method="post" class="form" role="form" action="" id="sokeSkjema" name="sokeSkjema">
	<fieldset>
		<legend>S&oslash;k tabellene</legend>
		<div class="form-group">
		<label for="find">S&oslash;k:</label>
		<input type="text" class="form-control" id="find" name="find" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverSF(this)" onmouseout="musUt(this)" required />
		</div>

		<div class="form-group">
<input type="submit" class="btn btn-info" value="S&oslash;k n&aring;" id="fortsett" name="fortsett"/>
<a href="./find.php" class="btn btn-info">Nullstill</a>
</div>
</fieldset>
<div id="melding"></div>
</form>

</div>

<div>
');
}
?>
<!-- PHP KODE STARTER -->
<div class="col-md-5">

<?php include("./include/inc_find.php"); ?>

</div>
<!-- SLUTT PÅ PHP -->

</div>

<!-- JAVASCRIPT MELDING  -->

</div>

</main>
<?php include "./include/footer.php"; ?>
</body>
</html>