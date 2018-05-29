<?php

//$test = 1;
	$ID = $_POST['Id_imagen'];
	$Titulo = $_POST['Titulo'];
	$Activ = $_POST['Activ'];	
	if ($Activ!= "on") {
		$Activ="off";
	}
  
if ($_POST){ // comprueba si se han recibido datos con POST
		
    //subida de archivos
    if ($_FILES) {
        $files = array();        
        $uploadDir="../img/"; 		
		//direccion a donde hacemos el upload del imagen	
		
		$nombreFoto= $Titulo.".jpg"; //damos el mismo nombre que el nombre del producto
        $nombreCompleto= $uploadDir. $nombreFoto;
        //echo $nombreCompleto;

        foreach($_FILES as $file){	
        //move_upload_file hace subir el archivo 
        //si ha ido bien el upload:	
        //echo $file;
		//echo $file['error'];

            if (move_uploaded_file($file['tmp_name'], $nombreCompleto))
            {//para la respuesta del Json:
                $files[]=$uploadDir.$file['name'];
                echo $file;
            }			
            else {
                $files[]="No se ha subido archivo.";
            }

        }//fin de foreach

        $Foto = $file['name'];    //??????
    }
    else {	
        //echo "NO HAY FILES";
        $nombreFoto = $_POST['Foto1'];	//mantener nombre de foto actual		
    }

    

    $conexion = mysqli_connect ('localhost', 'root', '', 'ejercicios') or die ("No se puede conectar con el servidor".mysqli_error($conexion));  
	//se puede hacer un include(conexion.php) preparado con los datos de conection. 
	
    $sql="UPDATE galeria SET Titulo='$Titulo', Activ='$Activ', Foto='$nombreFoto' WHERE Id_imagen=$ID";
    echo $sql;

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

        if ($consulta) {
            echo "ok";
        } else {
            echo "error";
        }

    mysqli_close($conexion);

    }//fin del "if ($_POST)"

else {
    echo "NO HAY _POST";
}  
 

	
    // //subida de archivos
    // if ($_FILES) {
    //     $files = array();        
    //     $uploadDir="../img/"; 		
	// 	//direccion a donde hacemos el upload del imagen	
		
	// 	$nombreFoto= $Titulo.".jpg"; //damos el mismo nombre que el nombre del producto
    //     $nombreCompleto= $uploadDir. $nombreFoto;
    //     //echo $nombreCompleto;

    //     foreach($_FILES as $file){	
    //     //move_upload_file hace subir el archivo 
    //     //si ha ido bien el upload:	
    //     //echo $file;
	// 	//echo $file['error'];

    //         if (move_uploaded_file($file['tmp_name'], $nombreCompleto))
    //         {//para la respuesta del Json:
    //             $files[]=$uploadDir.$file['name'];
    //             echo $file;
    //         }			
    //         else {
    //             $files[]="No se ha subido archivo.";
    //         }

    //     }//fin de foreach

       
    // }
    //     echo $nombreCompleto;







  
	// $test = 1;
	// if ($_POST){ // comprueba si se han recibido datos con POST
		
	// 	//subida de archivos
	// 	if ($_FILES) {
	// 		$files = array();
	// 		$uploadDir="../../img/blog/"; 		
	// 		//direccion a donde hacemos el upload del imagen	
	
	// 	foreach($_FILES as $file){	
	// 	//move_upload_file hace subir el archivo 
	// 	//si ha ido bien el upload:	
	// 	//echo $file['error'];
	
	// 		if (move_uploaded_file($file['tmp_name'], "$uploadDir".basename($file['name'])))
	// 		{//para la respuesta del Json:
	// 			$files[]=$uploadDir.$file['name'];
	// 		}			
	// 		else {
	// 			$files[]="No se ha subido archivo.";
	// 			}

	// 	}//fin de foreach

	// 	$Foto = $file['name'];
	// 	}
	// 	else {	
	// 		//echo "NO HAY FILES";
	// 		$Foto = $_POST['Foto1'];
			
	// 	}
	
	// 	//crear sentencia SQL para modificar los datos de cliente
	// 	$idArticulo = $_POST['idArticulo'];
	// 	$Titulo = $_POST['Titulo'];
	// 	$Descripcion = $_POST['Descripcion'];
	// 	$Articulo = $_POST['Articulo'];	
	
	// 	$sql = "UPDATE blog SET Titulo= '$Titulo', Descripcion='$Descripcion', Articulo='$Articulo', Foto='$Foto'   WHERE idArticulo = '$idArticulo';";
				
	// 	// abre conexión con la base de datos crm
	// 	$mysqli = new mysqli('localhost','root','','fede');
	// 	mysqli_set_charset($mysqli,'utf8');
	// 	if ($mysqli->connect_error) {
	// 		// comprobar que no hay errores en la conexión 
	// 		die("Connection failed: " . $mysqli->connect_error);
	// 		$error = 1;
	// 	}
	// 	else {
	// 		/* Asignar a la variable $sql la sentencia SQL para agregar el registro*/			
	// 		// echo $sql;
	// 		/* Ejecutar el SQL en la database y guardar el resultado en la variable $query */
	// 		 if ( $mysqli->query($sql)=== TRUE) {
	// 			 $error = 0;
	// 		 } else {
	// 			 $error = 1;
	// 		 }

	// 	}
	// 	/* Cierra la conexión con la base de datos*/
	// 	$mysqli->close();
	// 	echo json_encode([ // codifica datos para enviar de vuelta con json
	// 			"campos" => "Usuario actualizado correctamente",
	// 			"error" => $error,
	// 			"valores" => "Datos usuario",
	// 			"sql" => $sql

	// 		]);
	// }
	// else {
	// 	echo json_encode([ // codifica datos para enviar de vuelta con json	en caso de conexión fallida	
	// 			"campos" => "Datos no correctos",
	// 			"error" => 2,
	// 			"valores" => "Datos no corrrectos",
	// 			"sql" => $sql
	// 		]);
	// }  


    ?>