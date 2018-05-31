<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET'){ // comprueba si se han recibido datos con GET
	
		$conexion = mysqli_connect ("localhost", "root", "perla", "ejercicios") or die ("No se puede conectar con el servidor".mysqli_error($conexion));
        
   
                
         $num_item = 5;
         $pagina = $_GET["page"];
         $inicio = ($pagina-1)*$num_item;      //ceil() — Redondear fracciones hacia arriba

        $sql="SELECT * FROM contacto  LIMIT $inicio, 5";
    

        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));
        
        if ($consulta){
            $error = "Registros leídos correctamente";                      
            $datos = array();
            while($fila=mysqli_fetch_assoc($consulta)){                 
                $datos [] = $fila;   
                     
            }

            // for ($i=1; $i <= $total_paginas ; $i++) {          
                // echo "<button id='paginaActual' value='$i' href=\"#\">$i</button>";
                // echo $i;
            // }           
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


