<header id="head">
	
	<div id="logo">
		<img  src="img/logo.png" alt="Logo">	
		<h1>TITULO DE LA WEB</h1>	
	</div>	

<form class="" action="index.php" method ="post"> 
	<ul id="nav">
		<!-- menu para todo el mundo -->
		<li><button class="" value="home" name="seccio" type="submit">Home</button></li>
		<li><button class="" value="pelis" name="seccio" type="submit">Pelis</button></li>
		<li><button class="" value="series" name="seccio" type="submit">Series</button></li>
		<li><button class="" value="libros" name="seccio" type="submit">Libros</button></li>
		<li class="fecha">		
			<?php
			// Prints the day, date, month, year, time, AM or PM
			echo date("l jS \of F Y h:i:s A");
			//echo $_SESSION['tipo'];
			?>
		</li>

		<?php		
 		if($_SESSION['tipo']=="none"){
 		?>
		<li><button value="login" name="seccio" type="submit">LOGIN</button></li>
		
		<?php		
		}//menu para SOLO ADMIN
		elseif($_SESSION['tipo']=="admin"){
		?>
		<li><button class="" value="galeria" name="seccio" type="submit">Galeria</button></li>
		<li><button class="" value="upload" name="seccio" type="submit">Subir Ficheros</button></li>		
		<li><button class="" value="listaRecetas" name="seccio" type="submit">Lista Relatos</button></li>	
		<li><button class="" value="subirRecetas" name="seccio" type="submit">Subir Recetas</button></li>
		<li><button class="" value="subirProductos" name="seccio" type="submit">Subir Productos</button></li>	
		<li><button class="" value="logout" name="seccio" type="submit">LOGOUT</button></li>
		<li class="username">
			<?php				
			$username = $_SESSION['user'];
			if ($username != "none") {
			echo  $username." ";			
			$tipo=($_SESSION['tipo']);
			echo $tipo;
			}
			?>
		</li>

		<?php
		}
		//menu para USER		
		elseif($_SESSION['tipo']=="user"){
		?>
		<li><button class="" value="listaRecetas" name="seccio" type="submit">Lista Relatos</button></li>		
		<li><button class="" value="logout" name="seccio" type="submit">LOGOUT</button></li>
		<li class="username">
			<?php
			$username = $_SESSION['user'];
			if ($username != "none") {
			echo  $username." ";			
			$tipo=($_SESSION['tipo']);
			echo $tipo;
			}
			?>
		</li>
			
		<?php
		
		}

		?>	
	</ul>
</form>
