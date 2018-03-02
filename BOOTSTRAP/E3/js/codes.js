
$(document).ready(function () {

    $("#enviar").on("click", aviso);

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

