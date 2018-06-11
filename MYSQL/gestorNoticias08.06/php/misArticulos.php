<?php
    session_start();
    include('../php/functions.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET'){ // comprueba si se han recibido datos con GET
        
        //$conexion = mysqli_connect ("localhost", "root", "", "ejercicios") or die ("No se puede conectar con el servidor".mysqli_error($conexion));
        $conexion = connectBD(); 
                
        //$num_item = 3;
        //$pagina = $_GET["page"];
        //$inicio = ($pagina-1)*$num_item;
        //$sql="SELECT * FROM contacto LIMIT $inicio, 3"; 

        $usuarioActual = $_SESSION['Id_usuario'];
        $sql="SELECT * FROM noticias WHERE Fid_usuario = '$usuarioActual' ";    

        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la conexion".mysqli_error($conexion));
        
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


