<header id="head">

	<div >
	<h1>BACKOFFICE</h1>
	</div>

	<ul id="nav">	
		<li><a class="active" href="index.php">Home</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="galeria.php">Galeria</a></li>
		<li><a href="contacto.php">Contacto</a></li>
		
		<?php
		
			if ( $USER !="" && ($TIPO == "admin" || $TIPO == "user")) {
				echo "<li><a href=\"subirFotos.php\">Subir Fotos</a></li>";
			}
		?>

		<?php
			if ( $USER !="" && $TIPO == "admin" ) {
				echo "<li><a href=\"subirRecetas.php\">Subir Producto</a></li>";					
				echo "<li><a href=\"#\">Produción</a></li>";
			}
		?>
										
				
		<li><a href="logout.php">Logout</a></li>			
		
		<li class="username">
			<?php
			// if (isset($_SESSION["username"])) {
			// echo  $_SESSION["tipo"];
			// echo  $_SESSION["username"];

			if ($USER != "") {
			echo  $USER." ";
			echo  $TIPO;
			}
			?>
		</li>
		<li class="fecha">		
			<?php
			// Prints the day, date, month, year, time, AM or PM
			echo date("l jS \of F Y h:i:s A");
			?>
		</li>		
	</ul>
			
</header>	

