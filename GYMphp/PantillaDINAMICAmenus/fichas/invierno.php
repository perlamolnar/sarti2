<div id="cuerpo">
    
    <div id="menu">
        <h2>MENU</h2>
            <?php
                $directorio = 'fichas/RecetasTEXTO/invierno'; //damos el nombre de la carpeta donde estan los archivos
                $ficheros  = scandir($directorio); //scaneamos la carpeta para leer sus archivos/ficheros y los guardamos en un array                
                foreach ($ficheros as $nombreFichero) {    //recorremos el array para ver sus elementos: expresión_array as $valor       
                    
                    if ($nombreFichero!="." && $nombreFichero!="..") {           
                        //echo "<a href=\"receta.php?nomArchivo=$nombreFichero&estacion=$estacion\">$nombreFichero</a><br>";  //ir y pintar receta a otra pagina
                        echo "<a href=\"#\" onclick=\"cargarContenido('$nombreFichero', 'invierno')\";>".substr($nombreFichero, 0, -4)."</a><br>"; //pintar receta en la misma pagina en un div
                        //usamos la substr() function para quitar el .txt al final de nombre de fichero

                        echo "<a href=\"#\" onclick=\"cargarContenido('$nombreFichero', 'invierno')\";><img src=\"img/".substr($nombreFichero, 0, -4).".jpg\"></a><br>";

                        //echo "<img src=\"img/$nombreFichero.jpg\">";  
                    }
                  
                } 
                
            ?>

    </div>

    <div id="mainBox">
        <img src="img/cocinera.png" alt="Cocinera">
        <?php              
            
                
        ?>
    </div>	
</div>