
        <form class="form" role="form" method="post" action="./include/inc_innlogging.php" id="noscriptlogin" name="noscriptlogin">
                <fieldset>
                    <legend>Logg inn</legend>
                    <div class="form-group">
                        <label for="brukernavn">Brukernavn:</label>
                        <input type="text" class="form-control" id="brukernavn2" name="brukernavn" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverLR(this)" onmouseout="musUt(this)" required/>
                    </div>
                    <div class="form-group">
                        <label for="passord">Passord:</label>
                        <input type="password" class="form-control" id="passord2" name="passord" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverLR(this)" onmouseout="musUt(this)" required/>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-info" value="Logg inn" id="fortsett" name="fortsettKnapp"/>
                      <input type="reset" class="btn btn-info" value="Nullstill" id="nullstill" name="nullstill"/>
                    </div>
                </fieldset>
                </form>
 