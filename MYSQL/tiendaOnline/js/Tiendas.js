$(document).ready(function() {

	//$("#descargarNoticias").on("click", descargarNoticias);   
	//$("#NoticiasPorFecha").on("click", NoticiasPorFechaModal); 
	
	$.ajax({
		url: 'php/tiendas.php', // archivo php que tratara los datos
		type: 'GET', // forma de enviar los datos
		dataType: 'json', // tipo de datos que se envían
		
		// funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
		success : function(result){			
			//console.log(result.consulta);
			// console.log(result.resultado);
			// console.log(result.error);
			// crear la variable para contener el cuerpo de la tabla
			var tbl_body = "";
				//recorre el array que recogemos del php en result.query
			var menu = "";
			var tiendaPintado ="";
			var tiendaPintadoMobil="";
			//var selectFecha="";
				//recorre todos los valores del array y los coloca en un formato tabla
				$.each(result.consulta, function(k , v) {
					//console.log(v.id);									
                    var Id_tienda = 0;
                    var NombreTienda ="";					
                    var Ciudad = "";
                    var Cp = "";
                    var Telefono="";
                    var FotoTienda ="";
					
					
                    Id_tienda = v.Id_tienda;
                    NombreTienda = v.NombreTienda;						        	
                    Ciudad = v.Ciudad;
                    Cp = v.Cp;                    
                    Telefono = v.Telefono;
                    FotoTienda = v.FotoTienda;
																					
					menu += "<a href='' onClick='goToTienda("+JSON.stringify(v)+");'>"+NombreTienda+"</a><br><hr>";
					
					tiendaPintado += `<div class="">
										<h2 id="Titulo">`+ NombreTienda+`</h2><br>								
										<hr>
										</div>
										<div class="articulo" id="Articulo" comment><img id="Foto" width="400px" src="img/`+ FotoTienda + `" alt="` + NombreTienda+`">`+articulo+`</div>            
										`
					tiendaPintadoMobil += `<div class="">
											<br><h4 class="corners animated slideInRight" id="Titulo">`+titulo+`</h4>								
											<hr>
											</div>
											<div class="" id="Articulos" comment><img class="TextWrapRight" id="Foto" width="200px" src="img/`+imagen+`" alt="`+titulo+`">`+articulo+`</div>            
											`																		
											
				})
            $("#listaTiendas").html(menu);	
			$("#Tiendas").html(tiendaPintado);
			$("#TiendasMobil").html(tiendaPintadoMobil);			

			},
			// funcion ejecutada si ajax tiene un error
		error : function (result) {
			//alert ("Error: no ha funcionado el ajax JSON");
			console.error(result.error);
		}
			// el resultado de la función queda guardado en la variable result	   	
		
		});//fin del primer ajax
		


		$.ajax({
			url: 'php/selectFecha.php', // archivo php que tratara los datos
			type: 'GET', // forma de enviar los datos
			dataType: 'json', // tipo de datos que se envían
			
			// funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
			success : function(result){			
				//console.log(result.consulta);
				// console.log(result.resultado);
				// console.log(result.error);
				// crear la variable para contener el cuerpo de la tabla				
				var selectFecha="";
					//recorre todos los valores del array y los coloca en opciones
					$.each(result.consulta, function(k , v) {
						//console.log(v.id);					
						var fechaCreacion = "";
						var options = {day: 'numeric', month: 'long', year: 'numeric'};

						FechaCreacion = v.FechaArticulo;						
						//fecha = new Date(FechaCreacion);					
						//FechaCreacion = fecha.toLocaleDateString("es-ES", options); 
												
						selectFecha += `<option value='`+FechaCreacion+`'>`+FechaCreacion+`</option>`
					})

				
				$("#FechaOptions").html(selectFecha);
	
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
	
}//fin de goToArticulo


function descargarNoticias() {
	window.location.href = "php/generatePDFnoticias.php";
	
}