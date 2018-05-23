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
    //console.log(datos);

    $.ajax({
        type:'POST',
        url:'php/editproducto.php',
        dataType: "json",
        data:{datos},
        success:function(data){
            /* if(data.status == 'ok'){
                
            }else{
                //$('.user-content').slideUp();
                alert("Error al editar producto.");
            }  */
        },
        error: function (e) {
            console.log(e);
            console.log("Error");
        }
    }); //fin de ajax
} //fin function editar






// $(document).ready(function(){
//     $('#btnEdit').on('click',function(){
//         var user_id = $('#user_id').val();
//         $.ajax({
//             type:'POST',
//             url:'getData.php',
//             dataType: "json",
//             data:{user_id:user_id},
//             success:function(data){
//                 if(data.status == 'ok'){
//                     $('#userName').text(data.result.name);
//                     $('#userEmail').text(data.result.email);
//                     $('#userPhone').text(data.result.phone);
//                     $('#userCreated').text(data.result.created);
//                     $('.user-content').slideDown();
//                 }else{
//                     $('.user-content').slideUp();
//                     alert("User not found...");
//                 } 
//             }
//         });
//     });
// });
