$(document).ready(function() {

	//$("#descargarNoticias").on("click", descargarNoticias);   
	//$("#NoticiasPorFecha").on("click", NoticiasPorFechaModal); 
	
	$.ajax({
		url: 'php/tiendas.php', // archivo php que tratara los datos
		type: 'GET', // forma de enviar los datos
		dataType: 'json', // tipo de datos que se envían
		
		// funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
		success : function(result){			
			console.log(result.consulta);
			// console.log(result.resultado);
			// console.log(result.error);
			
			//recorre el array que recogemos del php en result.query
			var lista = "";
			var tiendaPintado ="";
			var tiendaPintadoMobil="";
			//var selectFecha="";
				//recorre todos los valores del array y los coloca en un formato tabla
				$.each(result.consulta, function(k , v) {
					//console.log(v.id);									
                    var id_tienda = 0;
                    var nombreTienda = "";
                    var ciudad = "";
                    var cp = "";
                    var telefono = "";
                    var fotoTienda = "";   
					
					
                    id_tienda = v.Id_tienda;
                    nombreTienda = v.NombreTienda;						        	
                    ciudad = v.Ciudad;
                    cp = v.Cp;                    
                    telefono = v.Telefono;
                    fotoTienda = v.FotoTienda;
																					
					lista += "<a href='' onClick='goToTienda("+JSON.stringify(v)+");'>"+nombreTienda+"</a><br><hr>";
					
					tiendaPintado = `<img id="Foto" width="400px" src="img/tiendas/tiendas0.jpg" alt="` + nombreTienda + `">	            
                                        `
                      
					tiendaPintadoMobil += `<div class="">
											<br><h4 class="corners animated slideInRight" id="Titulo">`+nombreTienda+`</h4>								
											<hr>
											</div>
											<div class="" id="Articulos" comment><img class="TextWrapRight" id="Foto" width="200px" src="img/tiendas/`+fotoTienda+`" alt="`+nombreTienda+`">`+ciudad+`</div>            
											`																		
											
				})
            $("#listaTiendas").html(lista);	
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
		


		// $.ajax({
		// 	url: 'php/selectFecha.php', // archivo php que tratara los datos
		// 	type: 'GET', // forma de enviar los datos
		// 	dataType: 'json', // tipo de datos que se envían
			
		// 	// funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
		// 	success : function(result){			
		// 		//console.log(result.consulta);
		// 		// console.log(result.resultado);
		// 		// console.log(result.error);
		// 		// crear la variable para contener el cuerpo de la tabla				
		// 		var selectFecha="";
		// 			//recorre todos los valores del array y los coloca en opciones
		// 			$.each(result.consulta, function(k , v) {
		// 				//console.log(v.id);					
		// 				var fechaCreacion = "";
		// 				var options = {day: 'numeric', month: 'long', year: 'numeric'};

		// 				FechaCreacion = v.FechaArticulo;						
		// 				//fecha = new Date(FechaCreacion);					
		// 				//FechaCreacion = fecha.toLocaleDateString("es-ES", options); 
												
		// 				selectFecha += `<option value='`+FechaCreacion+`'>`+FechaCreacion+`</option>`
		// 			})

				
		// 		$("#FechaOptions").html(selectFecha);
	
		// 		},
		// 		// funcion ejecutada si ajax tiene un error
		// 	error : function (result) {
		// 		//alert ("Error: no ha funcionado el ajax JSON");
		// 		console.error(result.error);
		// 	}
		// 		// el resultado de la función queda guardado en la variable result	   	
			
		// 	});
});


 function goToTienda(miLink) {
	event.preventDefault();
    console.log(miLink);

     var id_tienda = 0;
     var nombreTienda = "";
     var ciudad = "";
     var cp = "";
     var direccion = "";
     var telefono = "";
     var fotoTienda = "";    
    
     id_tienda = miLink.Id_tienda;
     nombreTienda = miLink.NombreTienda;						        	
     ciudad = miLink.Ciudad;
     direccion = miLink.Direccion;
     cp = miLink.Cp;                    
     telefono = miLink.Telefono;
     fotoTienda = miLink.FotoTienda;
    
    // fechacreacion = miLink.FechaCreacion;   
    // fecha = new Date(fechacreacion);					
    // fechacreacion = fecha.toLocaleDateString("es-ES", options);	
	//fecharecepcion = fecharecepcion.substr(0,10);		
    var tiendaPintado = "";
	tiendaPintado += `<div class="">
						<h2 id="Titulo">`+nombreTienda+`</h2><br>								
						<hr>
						</div>
						<div id="Tiendas" comment><img id="Foto" width="400px" src="img/tiendas/`+ fotoTienda + `" alt="` + nombreTienda + `"> Ciudad: ` + ciudad + `<br>Codigo postal: ` + cp + `<br>Dirección: ` + direccion +  `<br>Teléfono: ` +telefono + `</div>            
						`
	$("#Tiendas").html(tiendaPintado);
	
}//fin de goToArticulo


// function descargarNoticias() {
// 	window.location.href = "php/generatePDFnoticias.php";
	
// }