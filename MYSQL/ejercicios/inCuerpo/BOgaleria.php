
<h1>BACKOFICE DE FOTOS</h1>
<?php

    $conexion = mysqli_connect ("localhost", "root", "perla", "ejercicios") or die ("No se puede conectar con el servidor".mysqli_error($conexion));

    $sql="select * from galeria";

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

   ?>
    <div class="table-responsive container d">          
        <table class="table table-striped">
            
            <tr>
                <th>ID</th> 
                <th>Titulo</th>
                <th>Nombre Archivo</th>              
                <th>Foto</th>
                <th>Estado</th>               
                <th>Modificar</th>
                <th>Borrar</th>
            </tr>
            
            <tbody>
            
                <?php
                
                while($fila=mysqli_fetch_assoc($consulta)){ 
                    echo "<tr>";
                        $ID = $fila['Id_imagen']; 
                        $Titulo= $fila['Titulo'];
                        $Estado= $fila['Activ'];
                        $NombreArchivo = $fila['Foto']; 

                        echo "<td>$ID</td>";                       
                        echo "<td>$Titulo</td>";
                        echo "<td>$NombreArchivo</td>";
                        echo "<td><img src=\"img/$NombreArchivo\"></td>"; 
                        echo "<td>$Estado</td>";
                        
                        echo    "<td>
                                    <button onclick=\"openModal('$ID',  '$Titulo', '$NombreArchivo', '$Estado');\" class=\"btn\"><i class=\"fa fa-edit\"></i></button>
                                </td>"; 

                        echo    "<td>
                                    <button onclick=\"borrarEnFotoGaleria($ID);\" class=\"btn\"><i class=\"fa fa-close\"></i></button>
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

                <div class="ErrorMSG"></div>
                
					<input type="hidden" name="Id_imagen" id="Id_imagen" >

					<div class="row">
						<div class="active col s12 m12 l12 input-field">
                            Titulo:<br>
                            <input id="Titulo" name="Titulo" type="text" class="validate">                            
						</div><br>	
					                       

                        <div class="col s12 m12 l12 input-field">
							Estado:<br>
                            <label class="switch">
                                <input type="checkbox" id="Estado" name="Activ" checked>
                                <span class="slider round"></span>
                            </label>
							
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
                            Nombre de Archivo actual:    
							<div class="file-path-wrapper">
							<input class="file-path validate" id="FotoActual" name="Foto1" type="text">
							</div>
						</div>

					</div>
				</div>							
			</form>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="openModalFotoGaleria();" class="btn btn-primary">GUARDAR</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>
 
