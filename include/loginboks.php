<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 id="modalh4"><span class="glyphicon glyphicon-lock"></span> Logg inn</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="./include/inc_innlogging.php">
            <div class="form-group">
              <label for="brukernavn"><span class="glyphicon glyphicon-user"></span> Brukernavn</label>
              <input type="text" class="form-control" id="brukernavn" name="brukernavn" placeholder="Skriv inn brukernavn">
            </div>
            <div class="form-group">
              <label for="passord"><span class="glyphicon glyphicon-eye-open"></span> Passord</label>
              <input type="password" class="form-control" id="passord" name="passord" placeholder="Skriv inn passord">
            </div>
            <!--<div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>-->
              <button type="submit" name="fortsettKnapp" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Logg inn</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Avbryt</button>
          <p>Opprett bruker? <a href="./registrerskjema.php">Klikk her</a></p>
        </div>
      </div>
      
    </div>
  </div> 