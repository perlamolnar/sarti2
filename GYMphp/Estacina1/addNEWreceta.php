<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>File()</h3>
    <?php
        $newRececta=file("fichas/newReceta.txt");

        foreach($newRececta as $line){
            
            //echo utf8_encode($line)."<br>";
            echo ($line)."<br>";
        }
    ?>




<h3>Scandir() SCAN DIRECTORIO</h3>

    <?php
        $directorio = 'fichas'; //damos el nombre de la carpeta donde estan los archivos
        $ficheros  = scandir($directorio);


        foreach ($ficheros as $nombreFichero) {           
            
            if ($nombreFichero!="." && $nombreFichero!="..") {           
                echo $nombreFichero."<br>";
            }
        }       

    ?>

</body>
</html>


