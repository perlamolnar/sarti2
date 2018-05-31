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

    $sql1="SELECT COUNT(id_producto) FROM productos"; // contar total_items
    $consulta1 = mysqli_query($conexion, $sql1 )or die ("Fallo en la consulta".mysqli_error($conexion));
    
    while($fila=mysqli_fetch_assoc($consulta1)){         
        foreach ($fila as $key => $value) {  //en $value guardamos el resultado de COUNT(id_producto)
            //echo "<td>$value<br></td>";            
        }       
    }
        

    $num_item=5;
    $total_itmes= $value; //consulta sql  contar total_items
    //echo $total_itmes;
    $pagina=1;
    if(isset($_GET["page"])) $pagina = $_GET["page"];
    $total_paginas=ceil($total_itmes/$num_item);
    //echo $total_paginas;  
    $inicio=($pagina-1)*$num_item;      //ceil() — Redondear fracciones hacia arriba

    $sql="SELECT * FROM productos LIMIT $inicio, 10";

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));
    
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

    <?php
    mysqli_close($conexion);
    ?>

    

    <div class="pagination">
        <button href="#">&laquo;</button>
            <?php
            
                for ($i=1; $i <= $total_paginas ; $i++) { 
                 /*    if ($pagina != $i) {                    //para no muestrar la pagina actual donde estamos
                    echo "<a  href=\"#\">$i</a>";     
                }  */

                echo "<button id='paginaActual' value='$i' onclick=findPaginaActual($i)>$i</button>";  
                
                }

            ?>       
        <button href="#">&raquo;</button>
    </div>


<script>



function findPaginaActual(value) {
  //  window.location.reload();
   // console.log(value);
}

</script>
</body>
</html>

