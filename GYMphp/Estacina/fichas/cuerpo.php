<div id="cuerpo">
    
    <div id="menu">
        <h2>MENU</h2>
        <?php
        $directorio = 'fichas/RecetasTEXTO/'.$estacion; //damos el nombre de la carpeta donde estan los archivos
        $ficheros  = scandir($directorio);
        foreach ($ficheros as $nombreFichero) {          
            
            if ($nombreFichero!="." && $nombreFichero!="..") {           echo $nombreFichero."<br>";
            }
        }    
    ?>


    </div>

    <div id="mainBox">
        <?php
                include("cuerpo".$estacion.".html");
            
                $directorio = 'fichas/RecetasTEXTO/'.$estacion; //damos el nombre de la carpeta donde estan los archivos text
                $ficheros  = scandir($directorio);

                foreach ($ficheros as $nombreFichero) {           
                    
                    if ($nombreFichero!="." && $nombreFichero!="..") {          
                        //echo utf8_encode($line)."<br>";
                        //echo $nombreFichero."<br>";

                        $newRececta=file($directorio."/".$nombreFichero); //en la file()function ponemos la ruta al fichero
                        
                        foreach($newRececta as $line){
                        //echo (<img src="img/invierno1.jpg">);
                        echo ($line)."<br>";
                        } 
                    }
                } 
            ?>
    </div>	
</div>