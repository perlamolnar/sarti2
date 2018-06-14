<?php
	session_start();
    include('../php/functions.php');
 
	$test = 1;
	if ($_SERVER['REQUEST_METHOD'] === 'GET'){ // comprueba si se han recibido datos con GET
		
		// abre conexión con la base de datos 
		//$conexion = mysqli_connect ("localhost", "root", "", "gestornoticias") or die ("No se puede conectar con el servidor".mysqli_error($conexion));
        $conexion = connectBD(); 
	    $sql = "SELECT DISTINCT FechaCreacion as FechaArticulo FROM noticias WHERE Activ='on' ORDER BY FechaCreacion";
	    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la connexion".mysqli_error($conexion));
		
		if ($consulta){
            $error = "Registros leídos correctamente";                      
            $datos = array();
            while($fila=mysqli_fetch_assoc($consulta)){                 
                $datos [] = $fila;
            }                    
        }
        
        else {
            $error = "Error: " .$sql.  "<br>" . $mysqli->error;
            $datos = "La query no ha funcionado";
        }
        
        /* Cierra la conexión con la base de datos*/
		mysqli_close($conexion);    
		
		echo json_encode([ // codifica datos para enviar de vuelta con json
				"consulta" => $datos,
				"error" => $error,
				"resultado" => "Conexión con la base de datos correcta"

			]);
	}
	else {
		echo json_encode([ // codifica datos para enviar de vuelta con json	en caso de conexión fallida	
				"consulta" => "Datos no correctos",
				"error" => "Error al codificar json_encode",
				"resultado" => "Datos no corrrectos"
			]);
	}
?>