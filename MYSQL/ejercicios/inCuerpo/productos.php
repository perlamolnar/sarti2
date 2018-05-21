<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>PRODUCTOS</h1>
<?php

    $conexion = mysqli_connect ("localhost", "root", "perla", "empresa") or die ("No se puede conectar con el servidor".mysqli_error($conexion));

    $sql="select * from productos";

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

    // while($fila=mysqli_fetch_assoc($consulta)){        
    //     echo $fila['id_cliente']; 
    //     echo "<br>";
    //     echo $fila['nombre'];
    //     echo "<br>";
    //     echo $fila['limitecredito'];
    //     echo "<br>";
    //     echo "<hr>";
    // }
   ?>
    <div class="table-responsive container d">          
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID Fabricante</th>
                <th>ID Producto</th>
                <th>Descrtipción</th>  
                <th>Precio</th>
                <th>Stock</th>
            </tr>
            </thead>
            <tbody>
            
            <?php
            while($fila=mysqli_fetch_assoc($consulta)){ 
                echo "<tr>";
                foreach ($fila as $key => $value) {
                    echo "<td>$value<br></td>";            
                }
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>


    <!-- while($fila=mysqli_fetch_assoc($consulta)){        
                foreach ($fila as $key => $value) {
                    echo "$key = $value<br>";            
                }
    } -->

    <?php
    mysqli_close($conexion);
    ?>

</body>
</html>





