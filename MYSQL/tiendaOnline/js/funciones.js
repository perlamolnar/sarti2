
// **************** TRATAR PRODUCTOS EN BACKOFFICE ***********************

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
