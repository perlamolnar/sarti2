<?php
		
	if (isset($_GET['codigoERROR'])){
		$numeroERROR = $_GET['codigoERROR'];
		echo $numeroERROR;
	}
	else {
		$numeroERROR=0;
	}
		if(isset($_POST['seccio']) ){         //si vienes de la navigacion menu   


			if($_POST['seccio']=="home"){
				include("inCuerpo/home.php");
			}
			if($_POST['seccio']=="pelis"){
				$dir="publicContent/pelis";
				$dir2="img/pelis";
				include("inCuerpo/publicarContent.php");
			}
			elseif ($_POST['seccio']=="series") {
				$dir="publicContent/series";
				$dir2="img/series";
				include("inCuerpo/publicarContent.php");
			}
			elseif ($_POST['seccio']=="libros") {
				$dir="publicContent/libros";
				$dir2="img/libros";
				include("inCuerpo/publicarContent.php");
			}
			elseif ($_POST['seccio']=="upload"|| $_POST['seccio']=="uploading") {
				$subsec=$_POST['seccio'];
				include("inCuerpo/upload.php");
			}
			elseif ($_POST['seccio']=="eliminar"|| $_POST['seccio']=="borrar") {
				include("inCuerpo/eliminar.php");				
			}
			elseif ($_POST['seccio']=="contacto" || $_POST['seccio']=="validarContacto") {				
				include("inCuerpo/contacto.php");
		   	} 		
			elseif ($_POST['seccio']=="login") {				
			 	include("inCuerpo/login.php");
			} 
			elseif ($_POST['seccio']=="logout") {				
				include("inCuerpo/logout.php");
		   }

		}else{	// si NO vienes de la nav menu - eg. si vienes de un formulario
			if(isset($_POST['NuevaReceta'])){  // si vienes de form Subir Archivo
				//$Error = $_GET['codigoERROR'];
				include("inCuerpo/subirRecetas.php");

			}elseif (isset($_POST['validarContacto'])){  // si vienes de form contacto				
				include("inCuerpo/contacto.php");
			}
			elseif (isset($_POST['borrar'])){  // si vienes de form eliminar				
				include("inCuerpo/eliminar.php");
			}
			else{
				if (isset($_POST['login'])){  //comprobo si llega algo de login form		   
	
						//checkUser($_POST['username'],$_POST['password']);
						$username=$_POST['username'];
						$password=$_POST['password'];            
						if (checkUser($username,$password)){
							header("Location:index.php");
						}
						else {
							include("inCuerpo/login.php");
						}
					
				}else{
					include("inCuerpo/home.php");
				}
				
			}
				
			}
?>
