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
			if($_POST['seccio']=="noticias"){
				include("inCuerpo/noticias.php");
			}
			if($_POST['seccio']=="registrar"){
				include("inCuerpo/registrar.php");
			}
			if($_POST['seccio']=="BOnoticias"){
				include("inCuerpo/BOnoticias.php");
			}
			if($_POST['seccio']=="contactos"){
				include("inCuerpo/contacto.php");
			}
			if($_POST['seccio']=="products"){
				include("inCuerpo/products.php");
			}
			if($_POST['seccio']=="galeria"){
				include("inCuerpo/galeria.php");
			}
			if($_POST['seccio']=="BOgaleria"){
				include("inCuerpo/BOgaleria.php");
			}
			if($_POST['seccio']=="agua"){
				$dir="publicContent/agua";
				$dir2="img/agua";
				include("inCuerpo/publicarContent.php");
			}
			elseif ($_POST['seccio']=="aire") {
				$dir="publicContent/aire";
				$dir2="img/aire";
				include("inCuerpo/publicarContent.php");
			}
			
			elseif ($_POST['seccio']=="upload"|| $_POST['seccio']=="uploading") {
				$subsec=$_POST['seccio'];
				include("inCuerpo/upload.php");
			}			
			elseif ($_POST['seccio']=="uploadExperiencias"|| $_POST['seccio']=="uploadingExperiencias") {
				$subsec=$_POST['seccio'];
				include("inCuerpo/uploadExperiencias.php");
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
