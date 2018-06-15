<?php
    session_start();
    include('../php/functions.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET'){ // comprueba si se han recibido datos con GET
        
        // $Nombre = $_GET['Nombre'];
        // echo "$Nombre";
        // echo "<br>";

        //$conexion = mysqli_connect ("localhost", "root", "perla", "tiendaonline") or die ("No se puede conectar con el servidor".mysqli_error($conexion));
        $conexion = connectBD();            
          

        $sql="SELECT t.NombreTienda, t.Ciudad, t.Direccion, t.Telefono, p.Nombre, e.CantidadDisponible FROM productos p 
                INNER JOIN existencias e
                ON e.Fid_producto = p.Id_producto
                INNER JOIN tiendas t 
                on t.Id_tienda=e.Fid_tienda
                WHERE e.CantidadDisponible > 0
                ORDER BY e.Fid_tienda";    

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


