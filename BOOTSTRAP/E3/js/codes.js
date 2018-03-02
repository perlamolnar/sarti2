
$(document).ready(function () {
    $("#enviar").on("click", aviso);
    $("#articulo1").on("click", articuloModificado);


    $("#aviso").hide();
    $('#aviso').on('close.bs.alert', function () {
        //hemos eliminado en el html el "dissmiss alert y data-dismiss"
        $(this).hide();
        return false;
    })

});

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

function articuloModificado() {
    var articulo = $(this).closest('td').siblings().find('input');

    console.log(articulo);
    
    //$('form').submit();
    
    console.log();   
    
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

