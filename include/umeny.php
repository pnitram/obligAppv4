<nav class="col-md-3 sidenav">
<h5><strong>Brukerfunksjoner</strong></h5>

	<ul class="nav nav-pills nav-stacked"><br>

	<li>

<!-- Innloggingsknapp med javascript -->		
	<script>
document.write('<button style="width: 70%" class="btn btn-info btn-block" role="button" id="loginKnapp">Logg inn</button>');
</script>

<noscript>
	<a style="width: 70%" class="btn btn-info btn-block" role="button" href="./loginskjema.php">Logg inn</a>
	</noscript>

</li>
<li>

<!-- Innloggingsknapp med javascript -->
<script>
document.write('<button style="width: 70%" class="btn btn-info btn-block" role="button" id="registrerKnapp">Opprett bruker</button>');
</script>

<!-- Innloggingsknapp uten javascript -->
<noscript>
	<a style="width: 70%" class="btn btn-info btn-block" role="button" href="./registrerskjema.php">Opprett bruker</a>
	</noscript>

</li>
	

	</ul>

</nav>
<?php include("./include/loginboks.php") ?>