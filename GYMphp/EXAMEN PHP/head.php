<header id="head">

	<div >	
		<h1>RELATOS LITERARIOS</h1>
	</div>

<ul id="nav">
		<!-- todo el mundo puede ver	 -->
		<li><a class="active" href="index.php">Home</a></li>		
		
		<?php

			
			//puede ver el usuario y el admin
			if ( $USER !="" && ($TIPO == "admin" || $TIPO == "user")) {
				echo "<li><a href=\"logout.php\">Logout</a></li>";				
				echo "<li><a href=\"index.php?pagina=galeria\">Galeria</a><li>"; 
				echo "<li><a href=\"index.php?pagina=listaRecetas\">Lista Recetas</a></li>";				
			}
		?>

		<?php
			//solo puede ver y usar el admin
			if ( $USER !="" && $TIPO == "admin" ) {
				echo "<li><a href=\"index.php?pagina=listaRecetas\">Lista Recetas</a></li>";				
				echo "<li><a href=\"subirRecetas.php\">Subir Recetas</a></li>";
				echo "<li><a href=\"subirProductos.php\">Subir Productos</a></li>";
				
			}
		?>
				
		
		<li class="username">
			<?php
			//  if (isset($_SESSION["username"])) {
			//  echo  $_SESSION["tipo"];
			//  echo  $_SESSION["username"];}

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

