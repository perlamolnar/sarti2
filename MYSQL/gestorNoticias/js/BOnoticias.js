
var files=null;

$(document).ready(function () {
    $("#UploadNewItem").on("click", openModalUpload);
    $("#GardarNewItem").on("click", GardarNewItem);  
    $("#editNoticia").on("click", editNoticia ); 
    $("#misArticulos").on("click", misArticulos);   
    
});

function misArticulos() {    
    $("tbody").html(' ');  //vaciar tabla pintada por defecto  

    $.ajax({
        url: 'php/misArticulos.php', // archivo php que tratara los datos
        type: 'GET', // forma de enviar los datos
        dataType: 'json', // tipo de datos que se envían
        //data: { "page": page },
        // funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
        success: function (result) {     
               
            //console.log(result.consulta);
            // console.log(result.resultado);
            // console.log(result.error);
            // crear la variable para contener el cuerpo de la tabla:  
            var tbl_body = "";
            //recorre el array que recogemos del php en result.query
            var tbl_row = "";
            //recorre todos los valores del array y los coloca en un formato tabla
            $.each(result.consulta, function (k, v) {
                 //console.log(v.Id_noticia);
                var Id_noticia = 0;
                var Titulo = "";
                var Articulo ="";
                var Imagen = "";
                var Fid_usuario = "";
                var Activ = "";

                Id_noticia = v.Id_noticia;
                Titulo = v.Titulo;
                Articulo = v.Articulo;
                Imagen = v.Imagen;
                Fid_usuario = v.Fid_usuario;
                Activ = v.Activ;

                tbl_row += "<tr>"
                tbl_row += "<td>" + Titulo + "</td>";                
                tbl_row += "<td>" + Imagen + "</td>";
                tbl_row += "<td>" + Fid_usuario + "</td>";
                tbl_row += "<td>" + Activ + "</td>";
                
                
                tbl_row += "<td><button onclick=\"openModalEditNoticia('" + Id_noticia + "','" + Titulo + "','" + Articulo + "','" + Imagen + "','" + Fid_usuario + "','" + Activ +"');\" class=\"btn\"><img class='icon' src='img/edit1.png' alt='Modificar Icon' title='Editar'></button></td>";                
                
                tbl_row += "<td><button onclick=\"borrarNoticia('" + Id_noticia + "');\" class=\"btn\"><img class='icon' src='img/borrar.png' alt='Borrar Icon' title='Borrar'></button></td>";                

                tbl_row += "</tr>"
            })
            $("#tcuerpo").html(tbl_row);            
        },
        // funcion ejecutada si ajax tiene un error
        error: function (result) {
            console.log("Error de Ajax.");
            console.error(result.error);
        }
        // el resultado de la función queda guardado en la variable result
    });
}

function openModalUpload() {
    $('#ModalUploadNoticia').modal('show');   //abrir el modal  
}

function GardarNewItem() {
    var formData = new FormData();

    //Form data
    var form_data = $('#formUploadNoticia').serializeArray();
    $.each(form_data, function (key, input) {        
        formData.append(input.name, input.value);
    });

    //File data
    //alert(file_data);
    formData.append('file', $('#Imagen1')[0].files[0]);
    console.log($('#Imagen1')[0].files[0]);
    
    // if (files != null) {
    //      $.each(files, function (key, value) {
    //          console.log(files);
    //          formData.append(key, value);
    // });
    // }
  
    console.log(formData);

    $.ajax({
        type: 'POST',
        url: 'php/uploadNoticia.php',
        data: formData,
        contentType: false, // tell jQuery not to set contentType
        processData: false, // tell jQuery not to process the data
        success: function (data) {  //data es el echo que el php devuelve
            //alert(data);
            if (data = "ok") {
                $('#ModalUploadNoticia').modal('hide');
                window.location.reload();
                //alert("OK. Todo ha ido bien.");  
            } else {
                //alert("Error en la consulta.");
                $('.ErrorMSG').html('<span style="color:red;">Error en la consulta. Some problem occurred, please try again.</span>');
            }
        }, //fin de success         
        error: function (e) {
            console.log(e);
            console.log("NO HAY _POST");
        }
    }); //fin de ajax

}




function borrarNoticia(Id) {
    //console.log(Id);     

    if (confirm("¿Estas seguro que quieres BORRAR esta noticia????")) {
        $.ajax({
        type: 'POST',
        url: 'php/deleteNoticia.php',
        data: { id: Id },
        success: function (data) {
            console.log(data);
            window.location.reload();
            //alert("Producto borrado correctamente.");
        },
        error: function (e) {  // cuando no entiende lo que php devuelve. eg.no hay echo, hay mas echos que uno, etc.
            console.log(e);
            console.log("Error con Ajax!");
        }
    }); //fin de ajax
    } else{
        console.log("La noticia no esta borrado.");        
    }

} //fin function borrar



function openModalEditNoticia(ID, Titulo, Articulo, Imagen, Fid_usuario, Activ) {
    //console.log(Titulo);
    $('#Id_noticia').val(ID);
    $('#Titulo').val(Titulo);
    $('#Articulo').val(Articulo);
    $('#Activ').val(Activ); 
    $('#Fid_usuario').val(Fid_usuario);
    //console.log(Activ);         
    // if (Activ == "on") {
    //     $('#Activ').attr('checked', true);
    //     //console.log("ON");
    // } else {
    //     //console.log("OFF");
    //     $('#Activ').attr('checked', false);
    // }
    $('#ShowFoto').attr('src', "img/" + Imagen);
    $('#FotoActual').val(Imagen); //???

    $('#ModalEditNoticia').modal('show');   //abrir el modal

} //fin function 


// function checkbox() {
//     var checkBox = document.getElementById("Activ");
//     var text = document.getElementById("text");
//     if (checkBox.checked == true) {
//         text.style.display = "block";        
//     } else {
//         text.style.display = "none";       
//     }
// }

function editNoticia() {
    var formData = new FormData();

    //Form data
    var form_data = $('#formModificarNoticia').serializeArray();
    $.each(form_data, function (key, input) {
        formData.append(input.name, input.value);
    });
    console.log(formData);
    //File data
    //alert(file_data);
    formData.append('file', $('#Imagen')[0].files[0]);

    $.ajax({
        type: 'POST',
        url: 'php/editNoticia.php',
        data: formData,
        contentType: false, // tell jQuery not to set contentType
        processData: false, // tell jQuery not to process the data
        success: function (data) {  //data es el echo que el php devuelve
            //alert(data);
            if (data = "ok") {
                $('#ModalEditNoticia').modal('hide');
                
                window.location.reload();
                //alert("OK. Todo ha ido bien.");  
            } else {
                //alert("Error en la consulta.");
                $('.ErrorMSG').html('<span style="color:red;">Error en la consulta. Some problem occurred, please try again.</span>');
            }
        }, //fin de success         
        error: function (e) {
            console.log(e);
            console.log("NO HAY _POST");
        }
    }); //fin de ajax
} //fin function editar





/********************* pintar noticias model FEDE **************/

// $(document).ready(function() {
// 	//declarar la variable para depurar y no visualizar console.log
// 	var debug = true;
// 	$.ajax({
// 		url: 'php/vdddbo/Blog.php', // archivo php que tratara los datos
// 		type: 'GET', // forma de enviar los datos
// 		dataType: 'json', // tipo de datos que se envían
		
// 		// funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
// 		success : function(result){			
// 			// console.log(result.query);
// 			// console.log(result.resultado);
// 			// console.log(result.error);
// 			// crear la variable para contener el cuerpo de la tabla
// 			var tbl_body = "";
// 				//recorre el array que recogemos del php en result.query
// 			var menu = "";
// 			var articuloPintado ="";
// 			var articuloPintadoMobil="";
// 				//recorre todos los valores del array y los coloca en un formato tabla
// 				$.each(result.query, function(k , v) {
// 					//console.log(v.idArticulo);									
// 					var idarticulo = 0;
// 					var titulo ="";
// 					var descripcion = "";
// 					var articulo = "";
// 					var foto = "";
// 					var fechaalta = "";
// 					var options = {year: 'numeric', month: 'long', day: 'numeric' };
					
// 					idarticulo = v.idArticulo;
// 					titulo = v.Titulo;						        	
// 					descripcion = v.Descripcion;
// 					articulo = v.Articulo;
// 					foto = v.Foto;
// 					//fecharecepcion = v.FechaAlta;
// 					//fecharecepcion = fecharecepcion.substr(0,10);	
// 					fecharecepcion1 =  v.FechaAlta;
// 					fecha = new Date(fecharecepcion1);					
// 					fecharecepcion = fecha.toLocaleDateString("es-ES", options);					        	
																					
// 					menu += "<a href='' onClick='goToArticulo("+JSON.stringify(v)+");'>"+titulo+"</a><br><span id=\"FechaAlta\">"+fecharecepcion+"</span><hr>";
					
// 					articuloPintado += `<div class="col s12 m12 l12 ">
// 										<h2 id="Titulo">`+titulo+`</h2><br>								
// 										<hr>
// 										</div>
// 										<div class="col s12 m12 l12 more mySlides" id="Articulo" comment><img id="Foto" width="400px" src="img/blog/`+foto+`" alt="`+titulo+`">`+articulo+`</div>            
// 										`
// 					articuloPintadoMobil += `<div class="col s12 m12 l12 ">
// 											<br><h4 class="corners animated slideInRight" id="Titulo">`+titulo+`</h4>								
// 											<hr>
// 											</div>
// 											<div class="col s12 m12 l12 comment more mySlides" id="Articulo" comment><img class="TextWrapRight" id="Foto" width="200px" src="img/blog/`+foto+`" alt="`+titulo+`">`+articulo+`</div>            
// 											`											
// 				})
// 			$("#menuTitulo").html(menu);	
// 			$("#Articulos").html(articuloPintado);
// 			$("#ArticulosMobil").html(articuloPintadoMobil);

// 			},
// 			// funcion ejecutada si ajax tiene un error
// 		error : function (result) {
// 			//alert ("Error: no ha funcionado el ajax JSON");
// 			console.error(result.error);
// 		}
// 			// el resultado de la función queda guardado en la variable result	   	
		
// 		});	   
// });


//  function goToArticulo(miLink) {
// 	event.preventDefault();
// 	console.log(miLink);

// 	var idarticulo = 0;
// 	var titulo ="";
// 	var descripcion = "";
// 	var articulo = "";
// 	var foto = "";
// 	var fechaalta = "";
// 	var articuloPintado ="";
// 	var options = { year: 'numeric', month: 'long', day: 'numeric' };

// 	idarticulo = miLink.idArticulo;
// 	titulo = miLink.Titulo;						        	
// 	descripcion = miLink.Descripcion;
// 	articulo = miLink.Articulo;
// 	foto = miLink.Foto;
// 	fecharecepcion1 = miLink.FechaAlta;

// 	fecha = new Date(fecharecepcion1);
	
// 	fecharecepcion = fecha.toLocaleDateString("es-ES", options);
	
// 	//fecharecepcion = fecharecepcion.substr(0,10);		

// 	articuloPintado += `<div class="col s12 m12 l12 ">
// 						<h2 id="Titulo">`+titulo+`</h2><br>								
// 						<hr>
// 						</div>
// 						<div class="col s12 m12 l12 more mySlides" id="Articulo" comment><img id="Foto" width="400px" src="img/blog/`+foto+`" alt="`+titulo+`">`+articulo+`</div>            
// 						`
// 	$("#Articulos").html(articuloPintado);		
	
// }

  
