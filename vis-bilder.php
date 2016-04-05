<!DOCTYPE html>
<html lang="no">
<head>
	<title>Vis bilder</title>

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

<!-- VIS ALLE BILDER -->

<div class="col-md-7">

<!-- INKLUDERER PHP OG DB FEILMELDINGER  -->
<?php include "./include/inc_vis-bilder.php"; ?>

</div>


<!-- SLUTT PÅ INKLUDERT PHP -->


</div>

</main>

<!-- INKULDERER FOOTER -->
<?php include "./include/footer.php"; ?>


</body>
</html>