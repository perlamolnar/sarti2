<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/usuario.js"></script>
    <!-- <script src="js/BOusuarios.js"></script> -->

</head>
<body>
    <h1>CONTACTOS</h1>

    <?php  
        
    //$conexion = mysqli_connect ("localhost", "root", "", "gestornoticias") or die ("No se puede conectar con el servidor".mysqli_error($conexion));
    $conexion = connectBD(); 
        
        $sql1="SELECT COUNT(Id_usuario) as nfilas FROM usuarios"; // contar total_items
        
        $consulta1 = mysqli_query($conexion, $sql1 )or die ("Fallo en la consulta".mysqli_error($conexion));    
        $fila1=mysqli_fetch_assoc($consulta1);       
    
        $num_item = 3;
        $total_itmes = $fila1["nfilas"]; //consulta sql  contar total_items
        $total_paginas = ceil($total_itmes/$num_item); //ceil() — Redondear fracciones hacia arriba
        //echo $total_paginas;
  
    ?>

    <div class="container">

    <button id="descargarPDF">DESCARGAR EN PDF</button>
                            
        <table id="listado" class="table-striped">
            <thead class="fijo">
                <tr>                
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Dirección</th> 
                    <th>Username</th>
                    <th>Tipo</th>  
                    <th>Editar</th>
                    <th>Borrar</th>                  
                </tr>
            </thead>
            <tbody >

            </tbody>
        </table>

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

<!-- Modal Modificar Usuario-->
<div class="modal fade" id="ModalEditUsuario" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">MODIFICAR USUARIO</h4>
        </div>
        <div class="modal-body ">        

          	<form id="formModificarUsuario" action='' enctype="multipart/form-data">
				<div class="container">

                <!-- <div class="ErrorMSG"></div> -->
                
					<input type="hidden" name="Id_usuario" id="Id_usuario" >

					<div class="row">
						<div class="active col s12 m12 l12 input-field">
                            Nombre:<br>
                            <input id="Nombre" name="Nombre" type="text" class="validate">                            
						</div><br>

                        <div class="active col s12 m12 l12 input-field">
                            Email:<br>
                            <input id="Email" name="Email" type="email" class="validate">                                                        
                        </div><br>                       
                        
                        <div class="active col s12 m12 l12 input-field">
                            Teléfono:<br>
                            <input  id="Telefono" name="Telefono" type="text" class="validate">                            
                        </div><br>
                        
                        <div class="active col s12 m12 l12 input-field">
                            Dirección:<br>
                            <input  id="Direccion" name="Direccion" type="text" class="validate">                            
                        </div><br>
                        
                        <div class="active col s12 m12 l12 input-field">
                            Username:<br>
                            <input  id="Username" name="Username" type="text" class="validate">                            
                        </div><br>
                        
                        <div class="active col s12 m12 l12 input-field">
                            Rol:<br>                            
                            <select id="Tipo" name="Tipo">
                                <option value="Admin">Administrador</option>
                                <option value="Editor">Editor</option>
                                <option value="Colaborador">Colaborador</option>                                
                            </select>
                            
						</div><br>

					</div>
				</div>							
			</form>
        </div>
        <div class="modal-footer">
            <button type="button" id="editUsuario" class="btn btn-primary">GUARDAR</button>            
            <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>
 


</body>
</html>







