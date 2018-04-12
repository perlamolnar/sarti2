<header id="head<?=$estacion?>">

	<div >
	<h1>RECETAS DE <?=$estacion?></h1>
	</div>

	
	<ul id="nav">
		<li><a class="active" href="index.php?estacion=primavera">Home</a></li>
		<li><a href="index.php?estacion=primavera">Primavera</a></li>
		<li><a href="index.php?estacion=verano">Verano</a></li>
		<li><a href="index.php?estacion=otono">Otoño</a></li>
		<li><a href="index.php?estacion=invierno">Inviero</a></li>
		<li class="fecha">
			<?php
			// Prints the day, date, month, year, time, AM or PM
			echo date("l jS \of F Y h:i:s A");
			?>	
		</li>
	</ul>


</header>	

