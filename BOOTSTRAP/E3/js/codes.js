$(document).ready(function () {
    //LOGIN  
    $("#enviar").on("click", aviso);  
    $("#aviso").hide();
    $('#aviso').on('close.bs.alert', function () {
        //hemos eliminado la funcion de "dissmiss alert y data-dismiss" en el html
        $(this).hide();
        return false;
    });

    //EDITAR ARTICULO:
    //captar el click, identificar sibling atraves el id de boton, pintar articulo en formulario
    $(".editar").click(function() {        
        var articulo = $(this).closest('td').siblings().find().prevObject[2].textContent;
        console.log(articulo);    
        $("#textArea").text(articulo);
    }); 
    

    $('#BtnSaveChanges').click(function(){            
        if (confirm("Estas seguro/a que quieres modificar el articulo?")) {
            console.log("has confirmado el submit");
            $('#formularioArticulos').submit();                      
            
            //REFRESH MODAL CONTENT:????????????????????????????????????????????????????????
            //$("#textArea").val(" ");
            //location.reload();             

            } else {
            console.log("Form no ha sido enviado.")
            //return false;            
            }        
      });

    $('#close').click(function(){
        location.reload();    
    });  
   
});//end of ready function

function aviso() {
    var usuario = $("#username").val();
    var password = $("#password").val();
    console.log(usuario);
    console.log(password);

    if (usuario == "" || password == "") {
        $("#aviso").show();

    } else {
        $('form').submit();
    }
    console.log(usuario);
    console.log(password);
}



    






























// $(document).ready(function () {
//     $("#aviso").hide();
//     $("#enviar").on("click", aviso);
//     // $("#bclosewarn").on("click", function(){

//     // });

//     $('#aviso').on('close.bs.alert', function () {
//         $("#aviso").hide();

//         return false;
//     })

// });

// function aviso() {
//     var usuario = $("#username").val();
//     var password = $("#password").val();
//     console.log(usuario);
//     console.log(password);

//     if (usuario == "" || password =="") {        
//         $("#aviso").show();

//     } else {
//         $('form').submit();        
//     }
//     console.log(usuario);
//     console.log(password);
// }

