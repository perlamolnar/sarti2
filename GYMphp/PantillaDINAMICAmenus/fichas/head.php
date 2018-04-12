<header id="head<?=$estacion?>">

	<div >
	<h1>RECETAS DE <?=$estacion?></h1>
	</div>

	
	<ul id="nav">
		<li><a class="active" href="index.php">Estacion Actual</a></li>
		<li><a href="primavera.php">Primavera</a></li>
		<li><a href="verano.php">Verano</a></li>
		<li><a href="otono.php">Otoño</a></li>
		<li><a href="invierno.php">Inviero</a></li>
		<li class="fecha">
		<?php
			// Prints the day, date, month, year, time, AM or PM
			echo date("l jS \of F Y h:i:s A");
			?>	
		</li>
	</ul>


</header>	

