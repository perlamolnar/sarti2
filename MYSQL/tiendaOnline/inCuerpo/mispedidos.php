<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/mispedidos.js"></script>    

</head>
<body>
    <h1>MIS PEDIDOS</h1>

    <div class="container">  
                            
        <table id="listado" >
            <thead class="fijo">
                <tr>                
                    <th>Fecha</th>
                    <th>Id Pedido</th>
                    <th>Id Cliente</th>
                    <th>Nombre Cliente</th>
                    <th>Producto</th>
                    <th>Precio</th> 
                    <th>Imagen</th>
                    <th>Cantidad</th>  
                    <!-- <th>Editar</th> -->
                </tr>
            </thead>
            <tbody class="bgwhite">

            </tbody>
        </table>
        <br><br><br><br>
        		
    </div>

<!-- Modal Modificar MISPEDIDOS-->
<div class="modal fade" id="ModalEditUsuario" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">MODIFICAR MIS DATOS</h4>
        </div>
        <div class="modal-body ">        

          	<form id="formModificarPedido" action='' enctype="multipart/form-data">
				<div class="container">

                <!-- <div class="ErrorMSG"></div> readonly -->
                <div class="row">
                        <input type="hidden" name="Id_usuario" id="Id_usuario" >

                        <input type="hidden" name="Id_producto" id="Id_producto" >			
                        
                        <div class="active col s12 m12 l12 input-field">
                            Cantidad:<br>
                            <input  id="Username" name="Username" type="text" class="validate">
                        </div><br>                      
                       
                        <br>
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







