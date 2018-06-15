<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/productos.js"></script>
    <link rel="stylesheet" href="css/stlye.css">
    
</head>
<body>
    <h1>LISTA DE PRODUCTOS</h1>

    <?php 
    
        
    //$conexion = mysqli_connect ("localhost", "root", "", "gestornoticias") or die ("No se puede conectar con el servidor".mysqli_error($conexion));
    $conexion = connectBD(); 
        
        $sql1="SELECT COUNT(Id_producto) as nfilas FROM productos"; // contar total_items
        
        $consulta1 = mysqli_query($conexion, $sql1 )or die ("Fallo en la consulta".mysqli_error($conexion));    
        $fila1=mysqli_fetch_assoc($consulta1);       
    
        $num_item = 3;
        $total_itmes = $fila1["nfilas"]; //consulta sql  contar total_items
        $total_paginas = ceil($total_itmes/$num_item); //ceil() — Redondear fracciones hacia arriba
        //echo $total_paginas;
  
    ?>

    <div class="container">

        <!-- <button id="descargarPDF">DESCARGAR EN PDF</button> -->

        <div class="row"> 
            <div id="pintacards">
            
            </div>
        </div>

            <div class="pagination">
                <button id='back' href="#">&laquo;</button>
                    <?php            
                        //pintamos los botones de paginacion:
                        for ($i=1; $i <= $total_paginas ; $i++) {                
                        echo "<button  class='paginationbtn' id='paginaActual$i' value='$i' onclick=\"PaginacionContacto('$i')\">$i</button>";                  
                        }
                    ?>       
                <button id='next' value='<?php echo $total_paginas?>' href="#">&raquo;</button>
            </div>			
    </div>

<!-- ver detalles producto-->
<div class="modal fade" id="openModalProducto" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">DETALLES DEL PRODUCTO</h4>
        </div>
        <div class="modal-body ">        

          	<form id="formProducto" action='' enctype="multipart/form-data">
				<div class="container">

                <!-- <div class="ErrorMSG"></div> -->
                
					<input type="hidden" name="Id_producto" id="Id_producto" >

					<div class="row">
                        <div class='halfBox'>
                            <div class="active col s12 m12 l12 input-field">
                                <b>Producto:</b>
                                <input id="Nombre" name="Nombre" type="text" class="validate" readonly>                            
                            </div><br>
                                                    
                            <div class="active col s12 m12 l12 input-field">
                                <b>Descripción:</b>
                                <textarea id="Descripcion" name="Descripcion" readonly></textarea>                                                        
                            </div><br> 

                            <div class="active col s12 m12 l12 input-field">
                                <b>Precio en €:</b>
                                <input  id="Precio" name="Precio" type="number" class="validate" readonly>                       
                            </div><br>                             
                            
                        </div>

                        <div class='halfBox'>
                            <div class="active col s12 m12 l12 input-field">                               
                                <input  id="Foto" name="Foto" type="image" class="validate">                       
                            </div><br>
                        </div>
                    </div>

                    <div class="row">
                        
                        <table id="listado" class="table-striped">
                            <h4>DISPONIBLE EN LAS TIENDAS: </h4>
                            <thead class="fijo">
                                <tr>                
                                    <th>Tienda</th>
                                    <th>Ciudad</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Producto</th> 
                                    <th>Cantidad</th>                                     
                                    <!-- <th>Editar</th>                                       -->
                                </tr>
                            </thead>
                            <tbody >

                            </tbody>
                        </table>
                        <br><br>
                    </div>
                    

				</div>							
			</form>
        </div>
        <div class="modal-footer">
            <!-- <button type="button" id="editUsuario" class="btn btn-primary">GUARDAR</button>             -->
            <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>
 


</body>
</html>







