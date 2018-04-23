    
<h2>GALÉRIA CON TODAS LAS FOTOS DE WEB</h2> 
<div class="container">

    <?php                      
        $directorio = 'img/'; //damos el nombre de la carpeta donde estan los archivos
        $ficheros  = scandir($directorio); //scaneamos la carpeta para leer sus archivos/ficheros y los guardamos en un array
        foreach ($ficheros as $nombreFichero) {    //recorremos el array para ver sus elementos: expresión_array as $valor       
            
            if ($nombreFichero!="." && $nombreFichero!="..") {           
                ?>
                <div class="line">
                
                    <div class"fotoYtitulo">                        
                    <?php 
                    
                    echo "<img class=\"galeria\" src=\"img/".substr($nombreFichero, 0, -4).".jpg\">";

                    echo "<br>".substr($nombreFichero, 0, -4); //pintar receta en la misma pagina en un div
                    //usamos la substr() function para quitar el .txt al final de nombre de fichero

                        
                    ?>
                    </div> 
                </div>
                <?php  
            }                  
        } 
    
    ?>
</div>
         
