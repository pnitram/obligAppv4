<!DOCTYPE html>
<html lang="no">
<head>
	<title>Obligatorisk oppgave 4 - PHP</title>

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

		<div class="col-md-6">
		<h3>Applikasjon for registrering av studenter og klasser</h3>
		
		   <div id="startinfo"><div class="alert alert-info">
    <strong>Velkommen!</strong><div>Benytt navigasjon for å registrere, slette eller søke i registeret over klasser og studenter.</div>
  </div>

<?php

if (!$innloggetBruker) {
	include ("./include/inc_notInfo.php");
}

else {
	print(" ");
	
} 

?>
  </div>

  


		</div>
	</div>

</main>

<!-- INKUDERER FOOTER -->
<?php include "./include/footer.php"; ?>
</body>
</html>