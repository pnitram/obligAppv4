<!DOCTYPE html>
<html>
<head lang="no">
	<title>Registrere student</title>
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


<!-- REGISTRERE STUDENT SKJEMA -->
<div class="col-md-4">

<form role="form" method="post" action="" id="reg-student" name="reg-student" onsubmit="return validerRegistrerStudent()">
<fieldset>
<legend>Registrere ny student</legend>

<div class="form-group">
    <label for="brukernavn">Brukernavn:</label>
    <input type="text" class="form-control" id="brukernavn" name="brukernavn" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRS(this)" onmouseout="musUt(this)" required/>
</div>
<div class="form-group">
    <label for="fornavn">Fornavn:</label>
    <input type="text" class="form-control" id="fornavn" name="fornavn" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRS(this)" onmouseout="musUt(this)" required/>
</div>
<div class="form-group">
    <label for="etternavn">Etternavn:</label>
    <input type="text" class="form-control" id="etternavn" name="etternavn" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRS(this)" onmouseout="musUt(this)" required/>
</div>
<div class="form-group">
    <label for="klassekode">Klassekode:</label>
    <select name='klassekode' class="form-control" id='klassekode'>
    <?php include("./include/listeboks-klassekode-reg.php"); ?></select>
</div>

<div class="form-group">
    <label for="frist">Neste innleveringsfrist:</label>
    <div class='input-group date' id='datetimepicker1'>
    <input type="text" class="form-control" id="frist" name="frist" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRS(this)" onmouseout="musUt(this)" required/>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
</div>

<div class="form-group">
    <label for="bildenr">Bildenummer:</label>
    <input type="text" class="form-control" id="bildenr" name="bildenr" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRS(this)" onmouseout="musUt(this)" />
    <small>For å registrere ny student må du først laste opp et bilde <a href="./last-opp-bilde.php">her</a>.
</div>

<div class="form-group">
    <input type="submit" class="btn btn-info" value="Registrer" id="fortsett" name="fortsett"/>
    <input type="reset" class="btn btn-info" value="Nullstill" id="nullstill" name="nullstill"/>
 </div>
</fieldset>
</form>

<!-- PHP SKJEMA STARTER HER -->
 <?php include "./include/inc_regstudent.php"; ?>
<!-- SLUTT PÅ PHP -->


<!-- JAVASCRIPT MELDING  -->
<div id="melding"></div>

</div>
</div>
</main>

<!-- INKULDERER FOOTER -->
<?php include "./include/footer.php"; ?>

</body>
</html>