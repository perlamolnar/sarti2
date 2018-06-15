$(document).ready(function() {    
    
    $('#editUsuario').on('click', editUsuario);       
   
    $.ajax({
        url: 'php/usuario.php', // archivo php que tratara los datos
        type: 'GET', // forma de enviar los datos
        dataType: 'json', // tipo de datos que se envían
       
        // funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
        success: function (result) {
            // console.log("hola2");
            // console.log(result.consulta);
            // console.log(result.resultado);
            // console.log(result.error);

            // crear la variable para contener el cuerpo de la tabla:  
            var tbl_body = "";
            //recorre el array que recogemos del php en result.query
            var tbl_row = "";
            //recorre todos los valores del array y los coloca en un formato tabla
            $.each(result.consulta, function (k, v) {
                //console.log(v.Id);
                var id = 0;
                var nombre = "";
                var email = "";
                var telefono = "";
                var direccion = "";
                var username = "";                
                var tipo = "";

                id = v.Id_usuario;
                nombre = v.Nombre;
                email = v.Email;
                telefono = v.Telefono;
                direccion = v.Direccion;
                username = v.Username;
                tipo = v.Tipo;

                tbl_row += "<tr>"
                tbl_row += "<td>" + id + "</td>";
                tbl_row += "<td>" + nombre + "</td>";
                tbl_row += "<td>" + email + "</td>";
                tbl_row += "<td>" + telefono + "</td>";
                tbl_row += "<td>" + direccion + "</td>";
                tbl_row += "<td>" + username + "</td>";
                tbl_row += "<td>" + tipo + "</td>";

                tbl_row += "<td><button onClick='openModalEditUsuario("+JSON.stringify(v)+");'><img class='icon' src='img/edit1.png' alt='Modificar Icon' title='Editar'></button></td>";
                //tbl_row += "<td><button onClick='borrarUsuario("+JSON.stringify(v.Id_usuario)+");'><img class='icon' src='img/borrar.png' alt='Borrar Icon' title='Borrar'></button></td>";
                
                tbl_row += "</tr>"
            })

            $("#listado tbody").html(tbl_row);

        },
        // funcion ejecutada si ajax tiene un error
        error: function (result) {
            console.log("Error de Ajax.");
            console.error(result.error);
        }
        // el resultado de la función queda guardado en la variable result


    });//fin del ajax
      
}); //fin de document ready

function openModalEditUsuario(miUsuario) {
    //console.log(miUsuario.Nombre);
    $('#Id_usuario').val(miUsuario.Id_usuario);
    $('#Nombre').val(miUsuario.Nombre);
    $('#Email').val(miUsuario.Email);
    $('#Telefono').val(miUsuario.Telefono);
    $('#Direccion').val(miUsuario.Direccion);
    $('#Username').val(miUsuario.Username);
    $('#Tipo').val(miUsuario.Tipo);

    $('#ModalEditUsuario').modal('show');   //abrir el modal

} //fin function 


function editUsuario() {
    
    var formData = new FormData();

    //Form data
    var form_data = $('#formModificarUsuario').serializeArray();
    console.log(form_data);
    $.each(form_data, function (key, input) {
        formData.append(input.name, input.value);
    });

    //File data
    //alert(file_data);
    //formData.append('file', $('#Foto')[0].files[0]);    

    $.ajax({
        type: 'POST',
        url: 'php/editUsuario.php',
        data: formData,        
        contentType: false, // tell jQuery not to set contentType
        processData: false, // tell jQuery not to process the data
        success: function (data) {  //data es el echo que el php devuelve
            //alert(data);
            if (data = "ok") {
                $('#ModalEditUsuario').modal('hide');
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