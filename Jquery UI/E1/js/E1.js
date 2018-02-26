$(document).ready(cargaEventos);

function cargaEventos() {
    console.log("hola");
    $("#BtnSubmit").on("click", SubmitForm);
    $("#dialogAnimado").hide;
    $("#dialogConfirmado").hide;

}

function SubmitForm(params) {
    dialog();
    dialogAnimado();
    confirmarEnvio();
    
}


function dialog() {
    //console.log("dentro");    
    $("#dialog").dialog();    
}

function dialogAnimado() {
    $("#dialogAnimado").dialog({
        autoOpen: false, 
        show: {
            effect:"bling",
            duration: 1000
        },



    }) 

}  

function confirmarEnvio() {
    $("dialogconfirmado").dialog({
        resizable: 
    })

    
}    










//$("#formulario").submit();











//https://www.anerbarrena.com/jquery-load-html-div-460/

// $(document).ready(function () {
//     $("#boton").click(function (event) {
//         $("#capa").load("/demos/2013/03-jquery-load03.php", { valor1: 'primer valor', valor2: 'segundo valor' }, function (response, status, xhr) {
//             if (status == "error") {
//                 var msg = "Error!, algo ha sucedido: ";
//                 $("#capa").html(msg + xhr.status + " " + xhr.statusText);
//             }
//         });
//     });
// });		


