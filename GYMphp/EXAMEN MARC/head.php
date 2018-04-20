<header id="head">
	<div >	
		<h1>RELATOS LITERARIOS</h1>
	</div>

<form class="" action="index.php" method ="post"> 
	<ul id="nav">
		<!-- menu para todo el mundo -->
		<li><button class="navbarbut" value="index" name="seccio" type="submit">Home</button></li>
		<li><button class="navbarbut" value="galeria" name="seccio" type="submit">Galeria</button></li>
		<li><button class="navbarbut" value="series" name="seccio" type="submit">Series</button></li>
		<li><button class="navbarbut" value="libros" name="seccio" type="submit">Libros</button></li>

		<?php
		
 		if($_SESSION['cfg']['TIPO']=="none"){
 		?>
		<li><button class="" value="login" name="seccio" type="submit">LOGIN</button></li>
		<li class="fecha">		
			<?php
			// Prints the day, date, month, year, time, AM or PM
			echo date("l jS \of F Y h:i:s A");
			?>
		</li>
		<?php
		}
		//menu para USER o ADMIN
		elseif($_SESSION['cfg']['TIPO']=="user" || $_SESSION['cfg']['TIPO']=="admin" ){
		?>
		<li><button class="navbarbut" value="listaRecetas" name="seccio" type="submit">Lista Relatos</button></li>
		<li><button class="navbarbut" value="logout" name="seccio" type="submit">LOGOUT</button></li>
		<li class="username">
			<?php
			//   if (isset($_SESSION["username"])) {
			//   echo  $_SESSION["tipo"];
			//   echo  $_SESSION["username"];}

			if ($username != "") {
			echo  $username." ";
			echo  $TIPO;
			}
			?>
		</li>
			
		<?php
		//menu para SOLO ADMIN
		}elseif($_SESSION['cfg']['TIPO']=="admin"){
		?>
		<li><a class="navbarbut" value="upload" name="seccio" type="submit">Subir Ficheros</a></li>		
		<?php
		}

		?>	
	</ul>
</form>
