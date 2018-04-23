  
    <h2>LISTA RECETAS</h2> 
    <div class="estaciones">
        <div class="estacion">    
        <h3>PRIMAVERA</h3> 
        <?php                                               
            $directorio = 'publicContent/primavera'; //damos el nombre de la carpeta donde estan los archivos
            $ficheros  = scandir($directorio); //scaneamos la carpeta para leer sus archivos/ficheros y los guardamos en un array
            foreach ($ficheros as $nombreFichero) {    //recorremos el array para ver sus elementos: expresión_array as $valor       
                
                if ($nombreFichero!="." && $nombreFichero!="..") {           
                    echo substr($nombreFichero, 0, -4)."<br>"; //pintar lista de recetas en la misma pagina
                    //echo "<img src=\"../img/".substr($nombreFichero, 0, -4).".jpg\"></a><br>";
                }
            }
        ?>
        </div>

        <div class="estacion">
        <h3>VERANO</h3> 
        <?php                                               
            $directorio = 'publicContent/verano'; //damos el nombre de la carpeta donde estan los archivos
            $ficheros  = scandir($directorio); //scaneamos la carpeta para leer sus archivos/ficheros y los guardamos en un array
            foreach ($ficheros as $nombreFichero) {    //recorremos el array para ver sus elementos: expresión_array as $valor       
                
                if ($nombreFichero!="." && $nombreFichero!="..") {           
                    echo substr($nombreFichero, 0, -4)."<br>"; //pintar lista de recetas en la misma pagina
                    //echo "<img src=\"img/".substr($nombreFichero, 0, -4).".jpg\"></a><br>";
                }
            }
        ?>
        </div>

        <div class="estacion">
        <h3>OTOÑO</h3> 
        <?php                                               
            $directorio = 'publicContent/otono'; //damos el nombre de la carpeta donde estan los archivos
            $ficheros  = scandir($directorio); //scaneamos la carpeta para leer sus archivos/ficheros y los guardamos en un array
            foreach ($ficheros as $nombreFichero) {    //recorremos el array para ver sus elementos: expresión_array as $valor       
                
                if ($nombreFichero!="." && $nombreFichero!="..") {           
                    echo substr($nombreFichero, 0, -4)."<br>"; //pintar lista de recetas en la misma pagina
                    //echo "<img src=\"img/".substr($nombreFichero, 0, -4).".jpg\"></a><br>";
                }
            }
        ?>
        </div>

        <div class="estacion">
        <h3>INVIERNO</h3> 
        <?php                                               
            $directorio = 'publicContent/invierno'; //damos el nombre de la carpeta donde estan los archivos
            $ficheros  = scandir($directorio); //scaneamos la carpeta para leer sus archivos/ficheros y los guardamos en un array
            foreach ($ficheros as $nombreFichero) {    //recorremos el array para ver sus elementos: expresión_array as $valor       
                
                if ($nombreFichero!="." && $nombreFichero!="..") {           
                    echo substr($nombreFichero, 0, -4)."<br>"; //pintar lista de recetas en la misma pagina
                    //echo "<img src=\"img/".substr($nombreFichero, 0, -4).".jpg\"></a><br>";
                }
            }
            
        ?>
        </div>

    </div>
    