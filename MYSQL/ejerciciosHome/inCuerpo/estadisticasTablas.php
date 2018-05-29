<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>ESTADISTICAS</h1>
<?php

    $conexion = mysqli_connect ("localhost", "root", "", "empresa") or die ("No se puede conectar con el servidor".mysqli_error($conexion));

    $title0="Productos hay en total:";
    $sql0="SELECT COUNT(id_producto) FROM productos ";

    $title1="El sumatorio del precio de todos los productos:";
    $sql1="SELECT SUM(precio) FROM productos";

    $title2="La media del precio de todos los productos:";
    $sql2="SELECT AVG(precio) FROM productos";

    $title3="El sumatorio de las ventas:";
    $sql3="SELECT SUM(importe_total) FROM pedido";

    $title4="La media de precio de todas las ventas:";
    $sql4="SELECT AVG(importe_total) FROM pedido";

    for ($i=0; $i < 5; $i++) { 
        $title= 'title'.$i;
        $sql= 'sql'.$i;

        echo $$title."<br>";
        
        $consulta = mysqli_query($conexion, $$sql )or die ("Fallo en la consulta".mysqli_error($conexion));
        
        while ($fila=mysqli_fetch_assoc($consulta)) {
        foreach ($fila as $key => $value) {
        echo "$value <br><hr>";
        } 
        } 
   
    } 
    mysqli_close($conexion);
    ?>

</body>
</html>