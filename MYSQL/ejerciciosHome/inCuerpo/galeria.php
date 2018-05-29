
<h1>GALÉRIA DE FOTOS</h1>
<?php

    $conexion = mysqli_connect ("localhost", "root", "", "ejercicios") or die ("No se puede conectar con el servidor".mysqli_error($conexion));

    $sql="select * from galeria";

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

   ?>
    <div class="table-responsive container d">          
        <table class="table table-striped">
            
            <tr>
                <!-- <th>ID Imagen</th> 
                <th>Titulo</th>
                <th>Nombre Archivo</th>              
                <th>Foto</th>               
                <th>Modificar</th>
                <th>Borrar</th> -->
            </tr>
            
            <tbody>
            
                <?php
                
                while($fila=mysqli_fetch_assoc($consulta)){ 
                   
                        $ID = $fila['Id_imagen']; 
                        $Titulo= $fila['Titulo'];
                        $Titulo= $fila['Titulo'];
                        $NombreArchivo = $fila['Foto'];                                   
                        
                        echo "
                            <div class='line'>
                
                                <div class='fotoYtitulo'>  
                                    <img src=\"img/$NombreArchivo\"> 
                                    <br>
                                    $Titulo
                                </div>
                            </div>
                        
                        ";
                        
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

                <div class="ErrorMSG"></div>
                
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
		
						<div class="col s12 m12 l12"><!--Show imagen -->  
							<img id="ShowFoto" name="ShowFoto" scr="" width="20%" >
						</div>
						
						
						<div class="col s12 m12 l12 file-field input-field">
							<!--Upload file -->    
                            <div>                       
							 <input type="file" id="Foto" name="Foto"> 
							</div>

                            <br>
                            <!--Show the name of the actual file -->    
							<div class="file-path-wrapper">
							<input class="file-path validate" id="Foto1" name="Foto1" type="text">
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
 
