$(document).ready(function() {
	
	$.ajax({
		url: 'php/noticias.php', // archivo php que tratara los datos
		type: 'GET', // forma de enviar los datos
		dataType: 'json', // tipo de datos que se envían
		
		// funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
		success : function(result){			
			 console.log(result.consulta);
			// console.log(result.resultado);
			// console.log(result.error);
			// crear la variable para contener el cuerpo de la tabla
			var tbl_body = "";
				//recorre el array que recogemos del php en result.query
			var menu = "";
			var articuloPintado ="";
			var articuloPintadoMobil="";
				//recorre todos los valores del array y los coloca en un formato tabla
				$.each(result.consulta, function(k , v) {
					//console.log(v.id);									
					var id = 0;
					var titulo ="";					
					var articulo = "";
					var imagen = "";
					var fechaalta = "";
					var options = {year: 'numeric', month: 'long', day: 'numeric' };
					
					idarticulo = v.Id_noticia;
					titulo = v.Titulo;						        	
					articulo = v.Articulo;
                    imagen = v.Imagen;                    
                    fidUsuario = v.Fid_usuario;
                    
					fechacreacion = v.FechaCreacion;					
					fecha = new Date(fechacreacion);					
					fechacreacion = fecha.toLocaleDateString("es-ES", options);					        	
																					
					menu += "<a href='' onClick='goToArticulo("+JSON.stringify(v)+");'>"+titulo+"</a><br><span id=\"FechaAlta\">"+fechacreacion+"</span><hr>";
					
					articuloPintado += `<div class="">
										<h2 id="Titulo">`+titulo+`</h2><br>								
										<hr>
										</div>
										<div class="articulo" id="Articulo" comment><img id="Foto" width="400px" src="img/`+imagen+`" alt="`+titulo+`">`+articulo+`</div>            
										`
					articuloPintadoMobil += `<div class="">
											<br><h4 class="corners animated slideInRight" id="Titulo">`+titulo+`</h4>								
											<hr>
											</div>
											<div class="" id="Articulos" comment><img class="TextWrapRight" id="Foto" width="200px" src="img/`+imagen+`" alt="`+titulo+`">`+articulo+`</div>            
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
    
    var id = 0;
    var titulo ="";					
    var articulo = "";
    var imagen = "";
    var fechaalta = "";
    var articuloPintado ="";
    var options = {year: 'numeric', month: 'long', day: 'numeric' };
    
    idarticulo = miLink.Id_noticia;
    titulo = miLink.Titulo;						        	
    articulo = miLink.Articulo;
    imagen = miLink.Imagen;                    
    fidUsuario = miLink.Fid_usuario;
    
    fechacreacion = miLink.FechaCreacion;   
    fecha = new Date(fechacreacion);					
    fechacreacion = fecha.toLocaleDateString("es-ES", options);	
	//fecharecepcion = fecharecepcion.substr(0,10);		

	articuloPintado += `<div class="">
						<h2 id="Titulo">`+titulo+`</h2><br>								
						<hr>
						</div>
						<div class="" id="Articulo" comment><img id="Foto" width="400px" src="img/`+imagen+`" alt="`+titulo+`">`+articulo+`</div>            
						`
	$("#Articulos").html(articuloPintado);	

	
	
	
	
}
