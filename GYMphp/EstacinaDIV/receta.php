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
        
        //recuperamos el nombre de receta i estacion

        $receta=$_GET["nomArchivo"];
        $estacion=$_GET["estacion"];

        include("fichas/head.php");
        
            $directorio = 'fichas/RecetasTEXTO/'.$estacion; //damos el nombre de la carpeta donde estan los archivos text
            //$ficheros  = scandir($directorio);                

                    $newRececta=file($directorio."/".$receta); //en la file()function ponemos la ruta al fichero
                    
                    foreach($newRececta as $line){                   
                    
                    echo ($line)."<br>";
                    } 

                echo "<img src=\"img/invierno1.jpg\">";
            
        include("fichas/pie.php");
    ?>
    
</body>
</html>