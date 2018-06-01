<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/contacto.js"></script>

</head>
<body>
    <h1>CONTACTOS</h1>

    <?php  
    
    $conexion = mysqli_connect ("localhost", "root", "", "ejercicios") or die ("No se puede conectar con el servidor".mysqli_error($conexion));
        
        $sql1="SELECT COUNT(Id) as nfilas FROM contacto"; // contar total_items
        
        $consulta1 = mysqli_query($conexion, $sql1 )or die ("Fallo en la consulta".mysqli_error($conexion));    
        $fila1=mysqli_fetch_assoc($consulta1);       
    
        $num_item = 3;
        $total_itmes = $fila1["nfilas"]; //consulta sql  contar total_items
        $total_paginas = ceil($total_itmes/$num_item); //ceil() — Redondear fracciones hacia arriba
        //echo $total_paginas;
  
    ?>

    <div class="container" style="padding-top: 70px;min-height: 800px">
                            
        <table id="listado" class="table-striped">
            <thead class="fijo">
                <tr>                
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Email</th>  
                </tr>
            </thead>
            <tbody >

            </tbody>
        </table>

        <div class="pagination">
            <button id='back' href="#">&laquo;</button>
                <?php            
                   
                    for ($i=1; $i <= $total_paginas ; $i++) {                
                    echo "<button  class='paginationbtn' id='paginaActual$i' value='$i' onclick=\"PaginacionContacto('$i')\">$i</button>";                  
                    }
                ?>       
            <button id='next' value='<?php echo $total_paginas?>' href="#">&raquo;</button>
        </div>			
    </div>
</body>
</html>







