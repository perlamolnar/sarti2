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


    function editar(id){
        //console.log(id);        
        $.ajax({
            type:'POST',
            url:'php/editproducto.php',
            dataType: "json",
            data:{id:id},
            success:function(data){
                if(data.status == 'ok'){
                    // $('#userName').text(data.result.name);
                    // $('#userEmail').text(data.result.email);
                    // $('#userPhone').text(data.result.phone);
                    // $('#userCreated').text(data.result.created);
                    // $('.user-content').slideDown();
                }else{
                   //$('.user-content').slideUp();
                    alert("Error al editar producto.");
                } 
            }
        }); //fin de ajax
    } //fin function editar

    function borrar(Id) {
        console.log(Id);
        $.ajax({
            type: 'POST',
            url: 'php/deleteproducto.php',
            dataType: "json",
            data: { id:Id },
            success: function (data) {

                window.location.reload();
                alert("Producto borrado correctamente.");
            },
            error:function(e){
               console.log("Error");

            }
            
            
        }); //fin de ajax
    } //fin function editar
    
