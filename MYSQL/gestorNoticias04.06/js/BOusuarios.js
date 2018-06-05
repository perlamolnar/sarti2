
// // **************** TRATAR USUARIOS ***********************

// function borrarUsuario(Id) {
//     console.log(Id);     

//     if (confirm("¿Estas seguro que quieres BORRAR este usuario????")) {
//         $.ajax({
//         type: 'POST',
//         url: 'php/deleteUsuario.php',
//         data: { id: Id },
//         success: function (data) {
//             console.log(data);
//             window.location.reload();
//             //alert("Producto borrado correctamente.");
//         },
//         error: function (e) {  // cuando no entiende lo que php devuelve. eg.no hay echo, hay mas echos que uno, etc.
//             console.log(e);
//             console.log("Error con Ajax!");
//         }
//     }); //fin de ajax
//     } else{
//         console.log("La noticia no esta borrado.");        
//     }
// } //fin function borrar


// function openModalEditUsuario(miUsuario) {
//     //console.log(Nombre);
//     $('#Id_usuario').val(miUsuario.Id_usuario);
//     $('#Nombre').val(miUsuario.Nombre);
//     $('#Email').val(miUsuario.Email);
//     $('#Telefono').val(miUsuario.Telefono);
//     $('#Direccion').val(miUsuario.Direccion);
//     $('#Username').val(miUsuario.Username);
//     $('#Tipo').val(miUsuario.Tipo);

//     $('#ModalEditUsuario').modal('show');   //abrir el modal

// } //fin function 


// function EditUsuario(){

//     var formData = new FormData();

//     //Form data
//     var form_data = $('#formModificarUsuario').serializeArray();
//         $.each(form_data, function (key, input) {
//             formData.append(input.name, input.value);
//         });

//     //File data
//     //alert(file_data);
//     //formData.append('file', $('#Foto')[0].files[0]);    

//     $.ajax({
//         type:'POST',
//         url:'php/editUsuario.php',        
//         data: formData,        
//         contentType: false, // tell jQuery not to set contentType
//         processData: false, // tell jQuery not to process the data
//         success:function(data){  //data es el echo que el php devuelve
//             //alert(data);
//             if (data="ok") {                
//                 $('#myModal').modal('hide');
//                 //window.location.reload();
//                 //alert("OK. Todo ha ido bien.");  
//             } else {
//                 //alert("Error en la consulta.");
//                 $('.ErrorMSG').html('<span style="color:red;">Error en la consulta. Some problem occurred, please try again.</span>');
//             }  
//         }, //fin de success         
//         error: function (e) {
//             console.log(e);
//             console.log("NO HAY _POST");
//         }
//     }); //fin de ajax
// } //fin function editar

