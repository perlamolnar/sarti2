<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <script src="js/BOnoticias.js"></script>
</head>
<body> 

<h1>BACKOFFICE DE NOTICIAS</h1>

<p class="left"><button id="UploadNewItem" type="button" class="btn btn-lg">UPLOAD NEW ITEM</button></p>


<?php  

    $conexion = mysqli_connect ("localhost", "root", "", "gestornoticias") or die ("No se puede conectar con el servidor".mysqli_error($conexion));

    $sql="SELECT * FROM noticias ORDER BY Fid_usuario";

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

   ?>
    <div class="table-responsive container d">          
        <table class="table">
            
            <tr>
                <!-- <th>ID</th>  -->
                <th>Titulo</th>
                <!-- <th>Articulo</th> -->
                <th>Imagen</th>
                <th>Id Usuario</th>
                <th>Publicar</th>               
                <th>Modificar</th>
                <th>Borrar</th>
            </tr>
            
            <tbody>
            
                <?php
                
                while($fila=mysqli_fetch_assoc($consulta)){ 
                    echo "<tr>";
                        $ID = $fila['Id_noticia']; 
                        $Titulo= $fila['Titulo'];
                        $Articulo= $fila['Articulo'];
                        $Imagen = $fila['Imagen']; 
                        $Activ= $fila['Activ'];
                        $Fid_usuario= $fila['Fid_usuario'];
                       
                        //echo "<td>$ID</td>";                       
                        echo "<td>$Titulo</td>";
                        // echo "<td>$Articulo</td>";
                        echo "<td><img src=\"img/$Imagen\"></td>"; 
                        echo "<td>$Fid_usuario</td>";
                        echo "<td>$Activ</td>";   
                        
                        
                // Administrador: crear notícias, editarlas y eliminarlas (todas).        
                if ( $_SESSION['tipo'] == "Admin" )   {                            
                        echo    
                            "<td>
                            <button class='greenBG' onclick=\"openModalEditNoticia('$ID',  '$Titulo', '$Articulo', '$Imagen', '$Fid_usuario', '$Activ');\" class=\"btn\"><i title='EDITAR'class=\"fa fa-edit\"></i></button>
                            </td>";

                        echo    
                            "<td>
                                <button class='greenBG' onclick=\"borrarNoticia($ID);\" class=\"btn\"><i title='ELIMINAR' class=\"fa fa-close\"></i></button>
                            </td>";
                        }
                    
                // Editor: crear notícias, editarlas (todas) y eliminarlas (sólo las suyas).    
                if ( $_SESSION['tipo'] == "Editor" )   {                        
                        echo    "<td>
                                <button class='greenBG' onclick=\"openModalEditNoticia('$ID',  '$Titulo', '$Articulo', '$Imagen', '$Fid_usuario', '$Activ');\" class=\"btn\"><i title='EDITAR' class=\"fa fa-edit\"></i></button>
                                </td>";               
                        
                        if ($_SESSION['Id_usuario'] == "$Fid_usuario") {
                        echo    "<td><button class='greenBG' onclick=\"borrarNoticia($ID);\" class=\"btn\"><i title='ELIMINAR' class=\"fa fa-close\"></i></button></td>";  
                        }
                        
                        if ( $_SESSION['Id_usuario'] <> "$Fid_usuario" )   {  
                            echo "<td><img style='width: 70px'; src='img/lock.png' alt='SIN PERMISO' title='NO TIENES PERMISO'></td>";   
                        }   
                          
                }                            
                
                // Colaborador: crear notícias, editarlas (sólo las suyas) y eliminarlas (solo las suyas). 
                if ( $_SESSION['tipo'] == "Colaborador" && $_SESSION['Id_usuario'] == "$Fid_usuario" )   { 
                        echo    
                            "<td>
                            <button class='greenBG' onclick=\"openModalEditNoticia('$ID',  '$Titulo', '$Articulo', '$Imagen', '$Fid_usuario', '$Activ');\" class=\"btn\"><i title='EDITAR' class=\"fa fa-edit\"></i></button>
                            </td>"; 
                        echo    
                            "<td>
                                <button class='greenBG' onclick=\"borrarNoticia($ID);\" class=\"btn\"><i title='ELIMINAR' class=\"fa fa-close\"></i></button>
                            </td>";
                }
                if( $_SESSION['tipo'] == "Colaborador" && $_SESSION['Id_usuario'] <> "$Fid_usuario") {
                    echo "<td><img style='width: 70px'; src='img/lock.png' alt='SIN PERMISO' title='NO TIENES PERMISO'></td>";
                    echo "<td><img style='width: 70px'; src='img/lock.png' alt='SIN PERMISO' title='NO TIENES PERMISO'></td>";
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
  

  <!-- Modal Modificar-->
  <div class="modal fade" id="ModalEditNoticia" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">MODIFICAR FOTO</h4>
        </div>
        <div class="modal-body ">        

          	<form id="formModificarNoticia" enctype="multipart/form-data">
				<div class="container">

                <!-- <div class="ErrorMSG"></div> -->
                
					<input type="hidden" name="Id_noticia" id="Id_noticia" >

					<div class="row">
						<div class="active col s12 m12 l12 input-field">
                            Titulo:<br>
                            <input id="Titulo" name="Titulo" type="text" class="validate">                            
						</div><br>

                        <div class="active col s12 m12 l12 input-field">
                            Articulo:<br>
                            <!-- <input id="Articulo" name="Articulo" type="text" class="validate"> -->
                            <textarea name="Articulo" id="Articulo"></textarea>                            
                        </div><br>
                       
                        <div class="col s12 m12 l12 input-field">
							Visualisación para el publico: 
                            <select id="Activ" name="Activ">
                                <option value="on">on</option>
                                <option value="off">off</option>                                
                            </select>  
                            							
						</div>
                   		
						<div class="col s12 m12 l12"><!--Show imagen -->  
							<img id="ShowFoto" name="ShowFoto" scr="" width="20%" >
						</div>
						
						
						<div class="col s12 m12 l12 file-field input-field">
							<!--Upload file -->    
                            <div>                       
							 <input type="file" id="Imagen" name="Imagen"> 
							</div>

                            <br>
                            <!--Show the name of the actual file -->
                            Nombre de Archivo actual:    
							<div class="file-path-wrapper">
							<input class="file-path validate" id="FotoActual" name="Foto1" type="text">
							</div>
                            <br>
						</div>

                        <div class="active col s12 m12 l12 input-field">
                            Id Usuario:<br>
                            <input readonly id="Fid_usuario" name="Fid_usuario" type="text" class="validate">                            
						</div><br>

					</div>
				</div>							
			</form>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="editNoticia();" class="btn btn-primary">GUARDAR</button>            
            <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>
 


<!-- Modal Upload New Item-->
  <div class="modal fade" id="ModalUploadNoticia" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">UPLOAD NEW ITEM</h4>
        </div>
        <div class="modal-body ">

           

          	<form id="formUploadNoticia" enctype="multipart/form-data">
				<div class="container">

                <div class="ErrorMSG"></div>               
					

					<div class="row">
						<div class="active col s12 m12 l12 input-field">
                            Titulo:<br>
                            <input id="Titulo1" name="Titulo" type="text" class="validate">                            
						</div><br>

                        <div class="active col s12 m12 l12 input-field">
                            Articulo:<br>
                            <textarea name="Articulo" id="Articulo1" required></textarea>
                            
						</div><br>  						
						
						<div class="col s12 m12 l12 file-field input-field">
							<!--Upload file -->    
                            <div>                       
							 <input type="file" id="Imagen1" name="Imagen" required> 
							</div>
                            <br>
                            
						</div>

                        <div class="active col s12 m12 l12 input-field">
                            Id Usuario:<br>
                            <input readonly id="Fid_usuario1" name="Fid_usuario" type="text" value="<?php echo $_SESSION['Id_usuario'] ?> ">                            
						</div><br>

					</div>
				</div>							
			</form>
        </div>
        <div class="modal-footer">
            <button type="button" id="GardarNewItem"  class="btn btn-primary">GUARDAR</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
    </div>
  </div>


  </body>
</html>