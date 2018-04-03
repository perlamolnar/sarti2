<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <?php
        
        //recuperamos el nombre de receta i estacion que viene del  $.post de cargaContenido funcion
        $receta=$_POST["nomArchivo"];
        //echo ($receta."<br>");
        $estacion=$_POST["estacion"];  
        //echo ($estacion."<br>");      
        
            $directorio = 'fichas/RecetasTEXTO/'.$estacion; //damos el nombre de la carpeta donde estan los archivos text
            //$ficheros  = scandir($directorio);    
                               

                    $newRececta=file($directorio."/".$receta); //en la file()function ponemos la ruta al fichero
                    
                    foreach($newRececta as $line){             //guardamos su contenido (texto) en $line
                    
                    echo ($line)."<br>"; //pintamos $line en la página
                    } 
        
        $receta = substr($receta, 0, -4); 
        echo "<img src=\"img/$receta.jpg\">";  //el nombre del archivo es igual que el nombre del imagen
            
    ?>
    
</body>
</html>