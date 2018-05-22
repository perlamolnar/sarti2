<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/funciones.js"></script>
    
    <title>Document</title>
</head>
<body>

<h1>PRODUCTOS</h1>
<?php

    $conexion = mysqli_connect ("localhost", "root", "perla", "ejercicios") or die ("No se puede conectar con el servidor".mysqli_error($conexion));

    $sql="select * from productos";

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

   ?>
    <div class="table-responsive container d">          
        <table class="table table-striped">
            
            <tr>
                <th>ID Producto</th> 
                <th>Nombre Producto</th>               
                <th>Descrtipción</th>  
                <th>Precio</th>
                <th>Foto</th>
                <th>Modificar</th>
                <th>Borrar</th>
            </tr>
            
            <tbody>
            
                <?php
                
                while($fila=mysqli_fetch_assoc($consulta)){ 
                    echo "<tr>";
                        $Foto = $fila['Foto'];
                        $Nombre = $fila['Nombre'];
                        $Descripcion = $fila['Descripcion'];
                        $Precio = $fila['Precio'];
                        $ID = $fila['Id_producto']; 

                        echo "<td>$ID</td>";                       
                        echo "<td>$Nombre</td>";                       
                        echo "<td>$Descripcion</td>"; 
                        echo "<td>$Precio</td>";                       
                        echo "<td><img src=\"img/$Foto\"></td>"; 
                        
                        echo    "<td>
                                    <button onclick=\"editar($ID);\" class=\"btn \"><i class=\"fa fa-edit\"></i></button>
                                </td>"; 
                        echo    "<td>
                                    <button onclick=\"borrar($ID);\" class=\"btn\"><i class=\"fa fa-close\"></i></button>
                                </td>";                        

                    echo "<tr>";          
                    }
                ?>
                
            </tbody>
        </table>
    </div>   

    <?php
    mysqli_close($conexion);
    ?>




<div class="container">
  
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
</body>
</html>





