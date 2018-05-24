function borrar(Id) {
    //console.log(Id);
    $.ajax({
        type: 'POST',
        url: 'php/deleteproducto.php',
        //dataType: "json",
        data: { id: Id },
        success: function (data) {
            console.log(data);
            window.location.reload();
            //alert("Producto borrado correctamente.");
        },
        error: function (e) {
            console.log(e);
            console.log("Error");
        }
    }); //fin de ajax
} //fin function editar

function borrarEnFotoGaleria(Id) {
    //console.log(Id);
    $.ajax({
        type: 'POST',
        url: 'php/deleteFotoGaleria.php',        
        data: { id: Id },
        success: function (data) {
            console.log(data);
            window.location.reload();
            //alert("Producto borrado correctamente.");
        },
        error: function (e) {
            console.log(e);
            console.log("Error");
        }
    }); //fin de ajax
} //fin function editar


function openModal(Id, Nombre, Descripcion, Precio, Foto) {
    //console.log(Nombre);
    $('#Id_producto').val(Id);
    $('#Nombre').val(Nombre);
    $('#Descripcion').val(Descripcion);
    $('#Precio').val(Precio);
    $('#ShowFoto').attr('src',"img/" + Foto);
    $('#Foto1').val(Foto);


    $('#myModal').modal('show');   //abrir el modal

} //fin function 


function editProduco(){

    var formData = new FormData();

    //Form data
    var form_data = $('#formProducto').serializeArray();
        $.each(form_data, function (key, input) {
            formData.append(input.name, input.value);
        });

    //File data
    //alert(file_data);
    formData.append('file', $('#Foto')[0].files[0]);    

    $.ajax({
        type:'POST',
        url:'php/editproducto.php',        
        data: formData,        
        contentType: false, // tell jQuery not to set contentType
        processData: false, // tell jQuery not to process the data
        success:function(data){  //data es el echo que el php devuelve
            //alert(data);
            if (data="ok") {                
                $('#myModal').modal('hide');
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



// //Abrir Modificar Articulo Modal
// function VerModificarArticulo(valores3) {
//     event.preventDefault();
//     $('#idArticulo1').val(valores3.idArticulo);
//     $('#Titulo1').val(valores3.Titulo);
//     $('#Descripcion1').val(valores3.Descripcion);
//     $('#Articulo1').val(valores3.Articulo);
//     $('#Foto1').val(valores3.Foto);
//     $('#Foto2').attr('src', '../img/blog/' + valores3.Foto);
//     var fechaentrada = valores3.FechaAlta;
//     fechaentrada = fechaentrada.substr(0, 10);
//     $('#FechaAlta1').val(fechaentrada);
//     $('#VerModificarArticulo').modal('open');
// }

// // Modificar el Articulo
// function modificarArticulo() { //era responderContacto
//     event.preventDefault();

//     var formElement = document.getElementById("formArticulo");
//     var miForm = new FormData(formElement);

//     //añadir el archivbo al formadata para enviar. Diramos como añadir mi file:	
//     if (files) {
//         $.each(files, function (key, value) {
//             console.log(files);
//             miForm.append(key, value);
//         })
//     }

//     $.ajax({
//         url: '../php/vdddbo/updateArticulo.php', // archivo php que tratara los datos
//         type: 'POST', // forma de enviar los datos
//         dataType: 'json', // tipo de datos que se reciben
//         data: miForm,
//         processData: false,
//         contentType: false,

//         // funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
//         success: function (result) {
//             console.log(result.campos);
//             console.log(result.valores);
//             console.log(result.sql);
//             console.log(result.error);
//             if (result.error === 0) {
//                 Materialize.toast('Articulo modificado correctamente', 4000); // 4000 is the duration of the toast
//                 $('#modificarArticulo').modal('close');
//                 location.reload(true);
//                 // otra forma de resetear el formulario $('#formulario').trigger("reset");
//                 //console.log (result.error + " Categoria creada correctamente");
//             }
//             else {
//                 Materialize.toast('Problemas al actualizar articulo. Contacte con el administrador.', 4000);
//                 $("#formArticulo").trigger("reset");
//                 //console.log (result.error + " Conexión fallida con la base de datos");
//             }
//         },
//         // funcion ejecutada si ajax tiene un error
//         error: function (result) {
//             alert("Error: no ha funcionado el ajax JSON Responder Articulo");
//             //console.error(result);
//         }
//         // el resultado de la función queda guardado en la variable result	
//     })
// }