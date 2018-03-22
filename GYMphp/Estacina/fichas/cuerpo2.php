<div id="cuerpo">
	<?php
	    include("cuerpo".$estacion.".html");
	
        $directorio = 'fichas/RecetasTEXTO'; //damos el nombre de la carpeta donde estan los archivos
        $ficheros  = scandir($directorio);


        foreach ($ficheros as $nombreFichero) {           
            
            if ($nombreFichero!="." && $nombreFichero!="..") {          //echo utf8_encode($line)."<br>";
                //echo $nombreFichero."<br>";

                $newRececta=file($directorio."/".$nombreFichero);

                foreach($newRececta as $line){
            
            
                echo ($line)."<br>";
        }
         



            }
        }       




    ?>




</div>