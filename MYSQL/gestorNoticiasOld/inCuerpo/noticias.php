<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h1>ÚLTIMAS NOTICIAS</h1>

<?php

    $conexion = mysqli_connect ("localhost", "root", "perla", "gestornoticias") or die ("No se puede conectar con el servidor".mysqli_error($conexion));

    $sql="select * from noticias";

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));
                
    while($fila=mysqli_fetch_assoc($consulta)){ 
            $ID = $fila['Id_noticia']; 
            $Titulo = $fila['Titulo'];
            $Articulo = $fila['Articulo'];
            $Imagen = $fila['Imagen'];
            $FechaCreacion = $fila['FechaCreacion'];
            $Fid_usuario = $fila['Fid_usuario'];       
            
            echo "
            
                <div class=\"row\">

                    <div class=\"sidebar\">
                        <h2>ATRICULOS</h2>                    
                    </div>

                    <div class=\"noticias\">                    
                            
                        <h2>$Titulo</h2> 
                        <p>
                            <img class=\"fotoArticulo\" src=\"img/$Imagen\" alt=\"$Titulo\"> 
                            $Articulo
                        </p>                       
                                                             
                    
                    </div>
                
                </div> 

            ";                  
    }
               
    mysqli_close($conexion);
?>

<img src="" alt="">
</body>
</html>

