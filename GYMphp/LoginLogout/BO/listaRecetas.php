<?php   
session_start();
    $TIPO= "";
    $USER= ""; 
    
    if (isset($_SESSION["username"])) {
        $TIPO= $_SESSION['tipo'];
        $USER= $_SESSION['username'];          
    }
        
?>          

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>   
    <link rel="stylesheet" href="../css/styleBO.css">
      
</head>
<body>        
 
    <?php 
    include("head.php");
    ?>           
    
    <h2>LISTA RECETAS</h2> 
    <div class="estaciones">
        <div class="estacion">    
        <h3>PRIMAVERA</h3> 
        <?php                                               
            $directorio = '../fichas/RecetasTEXTO/primavera'; //damos el nombre de la carpeta donde estan los archivos
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
            $directorio = '../fichas/RecetasTEXTO/verano'; //damos el nombre de la carpeta donde estan los archivos
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
        <h3>OTOÑO</h3> 
        <?php                                               
            $directorio = '../fichas/RecetasTEXTO/otono'; //damos el nombre de la carpeta donde estan los archivos
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
        <h3>INVIERNO</h3> 
        <?php                                               
            $directorio = '../fichas/RecetasTEXTO/invierno'; //damos el nombre de la carpeta donde estan los archivos
            $ficheros  = scandir($directorio); //scaneamos la carpeta para leer sus archivos/ficheros y los guardamos en un array
            foreach ($ficheros as $nombreFichero) {    //recorremos el array para ver sus elementos: expresión_array as $valor       
                
                if ($nombreFichero!="." && $nombreFichero!="..") {           
                    echo substr($nombreFichero, 0, -4)."<br>"; //pintar lista de recetas en la misma pagina
                    //echo "<img src=\"../img/".substr($nombreFichero, 0, -4).".jpg\"></a><br>";
                }
            }
        ?>
        </div>

    </div>

</body>
</html>