<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="js/funciones.js"></script>     -->
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
                                    <button onclick=\"openModal('$ID',  '$Nombre', '$Descripcion', '$Precio', '$Foto');\" class=\"btn\"><i class=\"fa fa-edit\"></i></button>
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
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">MODIFICAR PRODUCTO</h4>
        </div>
        <div class="modal-body ">
          	<form id="formProducto" enctype="multipart/form-data">
				<div class="container">

					<input type="hidden" name="Id_producto" id="Id_producto" >

					<div class="row">
						<div class="active col s12 m12 l12 input-field">
                            Nombre:<br>
                            <input id="Nombre" name="Nombre" type="text" class="validate">
						</div>				
		
						<div class="col s12 m12 l12 input-field">
							Descripción:<br>
							<input type="text" id="Descripcion" name="Descripcion"</input>
						</div>	

                        <div class="col s12 m12 l12 input-field">
							Precio:<br>
							<input type="number" id="Precio" name="Precio"</input>
						</div>					
		
						<div class="col s12 m12 l12">
							<img id="Foto1" name="Foto1" scr="" width="20%" >
						</div>
						
						
						<div class="col s12 m12 l12 file-field input-field">
							<div class="btn">
							Subir Imagen: <br>
							<input type="file" name="Foto">
							</div>
							<div class="file-path-wrapper">
							<input class="file-path validate" id="Foto2" name="Foto2" type="text">
							</div>
						</div>
					</div>
				</div>							
			</form>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="editProduco();" class="btn btn-primary">GUARDAR</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>
 

</body>
</html>





