<!DOCTYPE html>
<html lang="no">
<head>
	<title>Last opp bilde</title>

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

		<!-- OPPLASNING SKJEMA -->

		
            <div class="col-md-4">

            <?php

            @session_start();

@$innloggetBruker=$_SESSION["tuxbrukernavn"];

if (!$innloggetBruker) {
    print('Du må logge inn.');
}

else {
    
    print('
                <form class="form" role="form" method="post" enctype="multipart/form-data" action="" id="upload-skjema" name="upload-skjema">
                <fieldset>
                    <legend>Last opp bilde</legend>
                    <div class="form-group">
                        <label class="control-label" id="filOpp" for="upload" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRB(this)" onmouseout="musUt(this)" >Bilde:</label>
                        <input type="file" class="form-control file file-loading" id="fil" name="fil" data-allowed-file-extensions=\'["png", "jpg", "gif"]\' required />
                    </div>

                    <script>
                    	$("#fil").fileinput({
                    	showUpload: false,
                    	language: \'nb\'
                    	});
                    </script>

                    <!--<div class="form-group">
                        <label for="bildenr">Bilde nummer:</label>
                        <input type="text" class="form-control" id="bildenr" name="bildenr" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRK(this)" onmouseout="musUt(this)" required/>
                    </div>-->

                    <div class="form-group">
                        <label for="beskrivelse">Beskrivelse:</label>
                        <input type="text" class="form-control" id="beskrivelse" name="beskrivelse" maxlength="150" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRB(this)" onmouseout="musUt(this)" required/>
                    </div>

                    <div class="form-group">
		              <input type="submit" class="btn btn-info" value="Last opp" id="fortsett" name="fortsett"/>
		              <input type="reset" class="btn btn-info" value="Nullstill" id="nullstill" name="nullstill"/>
                    </div>
                </fieldset>
                </form>

                

                ');
            }
            ?>

            <?php include "./include/inc_upload.php"; ?>

<!-- JAVASCRIPT MELDINGER -->
<div id="melding"></div>

</div>

</div>
</main>
<!-- INKUDERER FOOTER -->
<?php include "./include/footer.php"; ?>
</body>
</html>