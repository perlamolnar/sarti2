<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/noticias.js"></script>
</head>
<body>
    
<h1>ÚLTIMAS NOTICIAS</h1>


<?php

    $conexion = mysqli_connect ("localhost", "root", "", "gestornoticias") or die ("No se puede conectar con el servidor".mysqli_error($conexion));

    $sql="select * from noticias";

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));
                
    while($fila=mysqli_fetch_assoc($consulta)){ 
            $ID = $fila['Id_noticia']; 
            $Titulo = $fila['Titulo'];
            $Articulo = $fila['Articulo'];
            $Imagen = $fila['Imagen'];
            $FechaCreacion = $fila['FechaCreacion'];
            $Fid_usuario = $fila['Fid_usuario'];       
            
            echo "            
                <div class=\"row\">
                    <div class=\"sidebar\">                         
                        <a id='goToArticulo' href=\"#\">$Titulo</a>
                        <br> 
                        <span>$FechaCreacion</span>                        
                    </div>

                    <div class=\"noticias\">                                           
                                                             
                    
                    </div>
                
                </div> 

            ";                  
    }
               
    mysqli_close($conexion);
?>

<!-- <div class="row">

<div class="sidebar">
    <h2>ATRICULOS</h2>
                          
</div>

<div class="noticias">                    
        
    <h2>$Titulo</h2> 
    <p>
        <img class="fotoArticulo" src="img/$Imagen" alt="$Titulo"> 
        $Articulo
    </p>                       
                                         

</div>

</div>  -->



<!-- <h2>$Titulo</h2> 
<p>
    <img class=\"fotoArticulo\" src=\"img/$Imagen\" alt=\"$Titulo\"> 
    $Articulo
</p>   -->











<!-- /**************** Parte HTML: pintar noticias MODELO FEDE**************/

<!-- <div class="row">
    <div class="hide-on-small-only" style="margin-top: 1%; font-size:15px;">
        <div class="w3-content w3-display-container">

            <div id="menuArticulos" class="col s12 m4 l4">
                <h2>ARTICULOS</h2>       
                <span id="menuTitulo"></span>
            </div>
        
            <div id="Articulos" class="col s12 m8 l8 more mySlides">                
                
            </div> 
        
        </div> 
    </div>			        
</div> -->


</body>
</html>


<!-- /**************** Parte JS: pintar noticias MODELO FEDE**************/
$(document).ready(function() {
	//declarar la variable para depurar y no visualizar console.log
	var debug = true;
	$.ajax({
		url: 'php/vdddbo/Blog.php', // archivo php que tratara los datos
		type: 'GET', // forma de enviar los datos
		dataType: 'json', // tipo de datos que se envían
		
		// funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
		success : function(result){			
			// console.log(result.query);
			// console.log(result.resultado);
			// console.log(result.error);
			// crear la variable para contener el cuerpo de la tabla
			var tbl_body = "";
				//recorre el array que recogemos del php en result.query
			var menu = "";
			var articuloPintado ="";
			var articuloPintadoMobil="";
				//recorre todos los valores del array y los coloca en un formato tabla
				$.each(result.query, function(k , v) {
					//console.log(v.idArticulo);									
					var idarticulo = 0;
					var titulo ="";
					var descripcion = "";
					var articulo = "";
					var foto = "";
					var fechaalta = "";
					var options = {year: 'numeric', month: 'long', day: 'numeric' };
					
					idarticulo = v.idArticulo;
					titulo = v.Titulo;						        	
					descripcion = v.Descripcion;
					articulo = v.Articulo;
					foto = v.Foto;
					//fecharecepcion = v.FechaAlta;
					//fecharecepcion = fecharecepcion.substr(0,10);	
					fecharecepcion1 =  v.FechaAlta;
					fecha = new Date(fecharecepcion1);					
					fecharecepcion = fecha.toLocaleDateString("es-ES", options);					        	
																					
					menu += "<a href='' onClick='goToArticulo("+JSON.stringify(v)+");'>"+titulo+"</a><br><span id=\"FechaAlta\">"+fecharecepcion+"</span><hr>";
					
					articuloPintado += `<div class="col s12 m12 l12 ">
										<h2 id="Titulo">`+titulo+`</h2><br>								
										<hr>
										</div>
										<div class="col s12 m12 l12 more mySlides" id="Articulo" comment><img id="Foto" width="400px" src="img/blog/`+foto+`" alt="`+titulo+`">`+articulo+`</div>            
										`
					articuloPintadoMobil += `<div class="col s12 m12 l12 ">
											<br><h4 class="corners animated slideInRight" id="Titulo">`+titulo+`</h4>								
											<hr>
											</div>
											<div class="col s12 m12 l12 comment more mySlides" id="Articulo" comment><img class="TextWrapRight" id="Foto" width="200px" src="img/blog/`+foto+`" alt="`+titulo+`">`+articulo+`</div>            
											`											
				})
			$("#menuTitulo").html(menu);	
			$("#Articulos").html(articuloPintado);
			$("#ArticulosMobil").html(articuloPintadoMobil);

			},
			// funcion ejecutada si ajax tiene un error
		error : function (result) {
			//alert ("Error: no ha funcionado el ajax JSON");
			console.error(result.error);
		}
			// el resultado de la función queda guardado en la variable result	   	
		
		});	   
});


 function goToArticulo(miLink) {
	event.preventDefault();
	console.log(miLink);

	var idarticulo = 0;
	var titulo ="";
	var descripcion = "";
	var articulo = "";
	var foto = "";
	var fechaalta = "";
	var articuloPintado ="";
	var options = { year: 'numeric', month: 'long', day: 'numeric' };

	idarticulo = miLink.idArticulo;
	titulo = miLink.Titulo;						        	
	descripcion = miLink.Descripcion;
	articulo = miLink.Articulo;
	foto = miLink.Foto;
	fecharecepcion1 = miLink.FechaAlta;

	fecha = new Date(fecharecepcion1);
	
	fecharecepcion = fecha.toLocaleDateString("es-ES", options);
	
	//fecharecepcion = fecharecepcion.substr(0,10);		

	articuloPintado += `<div class="col s12 m12 l12 ">
						<h2 id="Titulo">`+titulo+`</h2><br>								
						<hr>
						</div>
						<div class="col s12 m12 l12 more mySlides" id="Articulo" comment><img id="Foto" width="400px" src="img/blog/`+foto+`" alt="`+titulo+`">`+articulo+`</div>            
						`
	$("#Articulos").html(articuloPintado);		
	
} -->





<!-- /**************** Parte PHP: pintar noticias MODELO FEDE**************/

<?php
		 
         // Operaciones con la BD en función de los datos recibidos
          
            //  $test = 1;
            //  if ($_SERVER['REQUEST_METHOD'] === 'GET'){ // comprueba si se han recibido datos con GET
                 
            //  //crear sentencia SQL para insertar  los campos en la tabla:
            //      //$sql = "SELECT * FROM blog WHERE Activo = 'on';";
            //      $sql = "SELECT * FROM blog";
         
            //      // abre conexión con la base de datos crm
            //      $mysqli = new mysqli('localhost','root','','fede');
            //      mysqli_set_charset($mysqli,'utf8');
            //      if ($mysqli->connect_error) {
            //          // comprobar que no hay errores en la conexión 
            //          die("Connection failed: " . $mysqli->connect_error);
            //          $error = "Conexión fallida";
            //      }
            //      else {
            //          /* Asignar a la variable $sql la sentencia SQL para agregar el registro*/
                     
            //          // echo $sql;
            //          /* Ejecutar el SQL en la database y guardar el resultado en la variable $query */
            //          $query=$mysqli->query($sql);
            //           if ( $query) {
            //               $error = "Registros leídos correctamente";
            //               // crea un array con toda la información obtenida con el SQL a la db
            //               $datos = array();
            //              while ( $dato = $query -> fetch_assoc()) {
            //                  $datos [] = $dato;
            //               }
                          
                          
            //           } else {
            //               $error = "Error: " .$sql.  "<br>" . $mysqli->error;
            //               $datos = "La query no ha funcionado";
            //           }
         
            //      }
            //      /* Cierra la conexión con la base de datos*/
            //      $mysqli->close();
            //      echo json_encode([ // codifica datos para enviar de vuelta con json
            //              "query" => $datos,
            //              "error" => $error,
            //              "resultado" => "Conexión con la base de datos correcta"
         
            //          ]);
            //  }
            //  else {
            //      echo json_encode([ // codifica datos para enviar de vuelta con json	en caso de conexión fallida	
            //              "query" => "Datos no correctos",
            //              "error" => "Error al codificar json_encode",
            //              "resultado" => "Datos no corrrectos"
            //          ]);
            //  }
         ?>