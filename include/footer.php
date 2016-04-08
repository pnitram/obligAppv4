    <footer class="footer">
      <div class="container">
        <p class="text-muted">Obligatorisk oppgave nr. 4 i webprogramering - Høgskolen i Sørøst-Norge         <span class="pull-right"><small>

        <?php

	 	if (!$innloggetBruker) { 
	 		print("");
	 		 } 

	 		 else { 
	 		 	print"Velkommen! Du er logget inn som <b>$innloggetBruker</b>";
	 		 	}
	 		 	?></small></span></p>

      </div>
    </footer>