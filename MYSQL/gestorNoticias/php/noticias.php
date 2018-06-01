<?php
		 
// Operaciones con la BD en función de los datos recibidos
 
	$test = 1;
	if ($_SERVER['REQUEST_METHOD'] === 'GET'){ // comprueba si se han recibido datos con GET
		
	//crear sentencia SQL para insertar  los campos en la tabla:
		//$sql = "SELECT * FROM blog WHERE Activo = 'on';";
		$sql = "SELECT * FROM noticias";

		// abre conexión con la base de datos crm
		$mysqli = new mysqli('localhost','root','perla','gestornoticias');
		mysqli_set_charset($mysqli,'utf8');
		if ($mysqli->connect_error) {
			// comprobar que no hay errores en la conexión 
			die("Connection failed: " . $mysqli->connect_error);
			$error = "Conexión fallida";
		}
		else {
			/* Asignar a la variable $sql la sentencia SQL para agregar el registro*/
			
			// echo $sql;
			/* Ejecutar el SQL en la database y guardar el resultado en la variable $query */
			$query=$mysqli->query($sql);
			 if ( $query) {
				 $error = "Registros leídos correctamente";
				 // crea un array con toda la información obtenida con el SQL a la db
				 $datos = array();
				while ( $dato = $query -> fetch_assoc()) {
					$datos [] = $dato;
				 }				 
				 
			 } else {
				 $error = "Error: " .$sql.  "<br>" . $mysqli->error;
				 $datos = "La query no ha funcionado";
			 }

		}
		/* Cierra la conexión con la base de datos*/
		$mysqli->close();
		echo json_encode([ // codifica datos para enviar de vuelta con json
				"query" => $datos,
				"error" => $error,
				"resultado" => "Conexión con la base de datos correcta"

			]);
	}
	else {
		echo json_encode([ // codifica datos para enviar de vuelta con json	en caso de conexión fallida	
				"query" => "Datos no correctos",
				"error" => "Error al codificar json_encode",
				"resultado" => "Datos no corrrectos"
			]);
	}
?>