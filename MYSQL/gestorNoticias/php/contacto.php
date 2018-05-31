<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET'){ // comprueba si se han recibido datos con GET
	
		$conexion = mysqli_connect ("localhost", "root", "", "ejercicios") or die ("No se puede conectar con el servidor".mysqli_error($conexion));
        
        // $sql1="SELECT COUNT(Id) FROM contacto"; // contar total_items
        // $consulta1 = mysqli_query($conexion, $sql1 )or die ("Fallo en la consulta".mysqli_error($conexion));
        
        // while($fila1=mysqli_fetch_assoc($consulta1)){         
        //     foreach ($fila1 as $key => $value1) {  //en $value guardamos el resultado de COUNT(id_producto)
        //         //echo "<td>$value1<br></td>";            
        //     }       
        // }
                
        // $num_item = 5;
        // $total_itmes = $value1; //consulta sql  contar total_items
        // echo $total_itmes;
        // $pagina = 1;
        // $total_paginas = ceil($total_itmes/$num_item);
        // echo $total_paginas;  
        //$inicio = $pagina*$num_item;      //ceil() — Redondear fracciones hacia arriba

        //$sql="SELECT * FROM contacto WHERE Id > $inicio LIMIT 5";
        $sql="SELECT * FROM contacto";

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


