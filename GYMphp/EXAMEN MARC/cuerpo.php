<?php

		if(isset($_POST['seccio'])){
            


			if($_POST['seccio']=="home"){
				include("cuerpo/home.php");
			}
			if($_POST['seccio']=="pelis"){
				$dir="obras/pelis";
				include("cuerpo/obras.php");
			}
			elseif ($_POST['seccio']=="galeria") {
				$dir="obras/series";
				include("galeria.php");
			}
			elseif ($_POST['seccio']=="upload") {
				include("cuerpo/upload.php");
			}
			elseif ($_POST['seccio']=="login") {

				include("login.php");
			}
			// elseif ($_POST['seccio']=="unlogin") {
			// 	session_destroy();
			// 	include("cuerpo/home.php");
			// }
			elseif ($_POST['seccio']=="libros") {
				$dir="obras/libros";
				include("cuerpo/obras.php");
			}
		}else{
				include("home.php");
			}
?>