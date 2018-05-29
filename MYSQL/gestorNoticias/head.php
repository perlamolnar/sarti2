<header id="head">
	
	<div id="logo">
		<img  src="img/logo.png" alt="Logo">	
		<h1>MUNDO DE LECTORES</h1>	
	</div>	

<form class="" action="index.php" method ="post"> 
	<ul id="nav">
		<!-- menu para todo el mundo -->
		<li><button class="" value="home" name="seccio" type="submit">Home</button></li>
		<li><button class="" value="noticias" name="seccio" type="submit">Noticias</button></li>			
		<li><button class="" value="registrar" name="seccio" type="submit">Registrar</button></li>
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
		<li><button class="" value="registrar" name="seccio" type="submit">Registrar</button></li>
		<li><button value="login" name="seccio" type="submit">LOGIN</button></li>
		
		<?php

		}//menu para SOLO ADMIN
		elseif($_SESSION['tipo']=="admin"){
		?>
		
		<li><button class="" value="BOnoticia" name="seccio" type="submit">Tratar Noticias</button></li>
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
		//menu para Editor		
		elseif($_SESSION['tipo']=="editor"){
		?>
			
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
		elseif($_SESSION['tipo']=="colaborador"){
		?>
		<li><button class="" value="noticias" name="seccio" type="submit">Noticias</button></li>
		<li><button class="" value="subirnoticia" name="seccio" type="submit">Subir Noticia</button></li>	

		<!-- <li><button class="" value="clientes" name="seccio" type="submit">Clientes</button></li>
		<li><button class="" value="productos" name="seccio" type="submit">Productos</button></li>
		<li><button class="" value="estadisticas" name="seccio" type="submit">Estadisticas</button></li>
		<li><button class="" value="subirproducto" name="seccio" type="submit">Subir Producto</button></li>	
		<li><button class="" value="products" name="seccio" type="submit">Products</button></li>
		<li><button class="" value="BOgaleria" name="seccio" type="submit">BO Galeria</button></li>	
		<li><button class="" value="galeria" name="seccio" type="submit">Galeria</button></li>

		-->
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
