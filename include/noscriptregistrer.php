        <form class="form" role="form" method="post" action="" id="noscriptlogin" name="noscriptlogin">
                <fieldset>
                    <legend>Opprett bruker</legend>
                    <div class="form-group">
                        <label for="brukernavn">Brukernavn:</label>
                        <input type="text" class="form-control" id="brukernavn2" name="brukernavn" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverLR(this)" onmouseout="musUt(this)" required/>
                    </div>
                    <div class="form-group">
                        <label for="passord">Passord:</label>
                        <input type="password" class="form-control" id="passord2" name="passord" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverLR(this)" onmouseout="musUt(this)" required/>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-info" value="Registrer" id="fortsett" name="fortsettKnapp"/>
                      <input type="reset" class="btn btn-info" value="Nullstill" id="nullstill" name="nullstill"/>
                    </div>
                </fieldset>
                </form>

                <?php 


$fortsett=$_POST["fortsettKnapp"];

if ($fortsett) {

include("./include/db-tilkobling.php");

$brukernavn=strtolower($_POST["brukernavn"]);
$passord=$_POST["passord"];

if (!$brukernavn || !$passord) {
    print("Du må fylle ut feilt");
}

else {
    $sqlSetning="SELECT * FROM bruker WHERE brukernavn ='$brukernavn';";
    $sqlResultat=mysqli_query($db,$sqlSetning) or die("Ikke mulig å hente fra $db");

    if (mysqli_num_rows($sqlResultat)!=0) {
        print("finnes fra før");

        print("<div class='alert alert-danger alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span></button>
                    <strong>Feil! </strong><br>Brukernavn er allerede registrert</div>");
    }

    $kryptertPassord=md5($passord); //32tegn
    $sqlSetning="INSERT INTO bruker VALUES ('$brukernavn','$kryptertPassord');";
    mysqli_query($db,$sqlSetning) or die("Ikke mulig å registrere i $db");

    print("<div class='alert alert-success alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span></button>
                    <strong>Suksess! :)</strong><br>Bruker opprettet</div>");
}
}

                ?>