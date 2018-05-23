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
    $('#Foto').attr('src',"img/" + Foto);

    $('#myModal').modal('show');   //abrir el modal

} //fin function 


function editProduco(){

    datos = $("#formProducto").serialize();
    console.log(datos);

    $.ajax({
        type:'POST',
        url:'php/editproducto.php',
        //dataType: "json",
        data:datos,
        success:function(data){  
            alert(data);
            if (data="ok") {
                $('#myModal').modal('hide');
                window.location.reload();  
            } else {

                
            }
                     
        },
        error: function (e) {
            console.log(e);
            console.log("Error");
        }//error de ajax
    }); //fin de ajax
} //fin function editar

