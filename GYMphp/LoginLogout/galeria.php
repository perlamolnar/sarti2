<?php   
session_start();

    if (!isset($_SESSION["username"])) {
       header("Location:login.php");
    }else{
        $username=$_SESSION["username"];
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
    <!-- <script src="calculadora.js"></script> -->
    <link rel="stylesheet" href="css/style.css">
   
    
</head>
<body>
        
 
          <?php 
          include("head.php");
          ?>           
          
          <h1>GALÉRIA</h1> 

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

                        echo "<br><a href=\"#\";>".substr($nombreFichero, 0, -4)."</a>"; //pintar receta en la misma pagina en un div
                        //usamos la substr() function para quitar el .txt al final de nombre de fichero

                        
                        ?>
                        </div> 
                        </div>
                        <?php  
                    }
                  
                } 
           
                
            ?>

   

   

</body>
</html>