<header id="head<?=$estacion?>">

	<div >
	<h1>RECETAS DE <?=$estacion?></h1>
	</div>

	
	<ul id="nav">
		<li><a class="active" href="#home">Home</a></li>
		<li><a href="#news">News</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="#about">About</a></li>
		<li class="fecha">
		<?php
			// Prints the day, date, month, year, time, AM or PM
			echo date("l jS \of F Y h:i:s A");
			?>	
		</li>
	</ul>


</header>	

