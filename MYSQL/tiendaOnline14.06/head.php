<header id="head">
	
	<div id="logo">
		<img  src="img/logo.png" alt="Logo">	
		<h1 class='headtitle'>EL MUNDO DE RELOJES</h1>	
	</div>	

<form class="" action="index.php" method ="post"> 
	<ul id="nav">
		<!-- menu para todo el mundo -->
		<li><button class="" value="home" name="seccio" type="submit">Home</button></li>
		<li><button class="" value="productos" name="seccio" type="submit">Productos</button></li>
		<li><button class="" value="tiendas" name="seccio" type="submit">Tiendas</button></li>			
			
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
		} //fin session NONE
		
		
		//menu para SOLO ADMIN
		if($_SESSION['tipo']=="Admin"){
		?>
		
		<li><button class="" value="usuario" name="seccio" type="submit">Usuarios</button></li>
		
		<li class="username">
			<?php				
			$username = $_SESSION['user'];
			if ($username != "none") {
			//echo  $username." ";			
			$tipo=($_SESSION['tipo']);
			//echo $tipo;
			}
			?>
		</li>

		<?php
		}
		
		//menu para Editor		
		if($_SESSION['tipo']=="Editor"){
		?>
			
		
		<li class="username">
			<?php
			$username = $_SESSION['user'];
			if ($username != "none") {
			//echo  $username." ";			
			$tipo=($_SESSION['tipo']);
			//echo $tipo;
			}
			?>
		</li>
			
		<?php
		
		}

		//menu para COLABORADOR, EDIRTOR, ADMIN
		if($_SESSION['tipo']=="Colaborador" || $_SESSION['tipo']=="Admin" || $_SESSION['tipo']=="Editor"){
		?>
		<li><button class="" value="BOnoticias" name="seccio" type="submit">Tratar Noticias</button></li>		
		<li><button class="" value="logout" name="seccio" type="submit">LOGOUT</button></li>
		<li class="username">
			<?php				
			$username = $_SESSION['user'];
			if ($username != "none") {
			echo  $username." ";			
			$tipo=($_SESSION['tipo']);
			echo $tipo." ";
			$Id_usuario=($_SESSION['Id_usuario']);
			echo "ID: $Id_usuario";
			}
			?>
		</li>
		<?php
		}


		?>	
	</ul>
</form>
