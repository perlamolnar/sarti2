<div id="cuerpo">
	<?php
	    //include("cuerpo".$estacion.".html");
	
        $directorio = 'fichas/RecetasTEXTO/'.$estacion; //damos el nombre de la carpeta donde estan los archivos text
        $ficheros  = scandir($directorio);

        foreach ($ficheros as $nombreFichero) {           
            
            if ($nombreFichero!="." && $nombreFichero!="..") {          
                //echo utf8_encode($line)."<br>";
                //echo $nombreFichero."<br>";

                $newRececta=file($directorio."/".$nombreFichero); //en la file()function ponemos la ruta al fichero
                
                foreach($newRececta as $line){ 
                echo ($line)."<br>";
                } 
            }
        } 
    ?>
</div>