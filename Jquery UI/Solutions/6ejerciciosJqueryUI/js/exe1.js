$(document).ready(cargaEventos);

function cargaEventos(){
    inicializa();
    $("input[name=datos]").on("click", control);
    $("#alta").on("click", enviar);
}

function inicializa(){
    $("#per").attr('checked', false);
    $("#dir").attr('checked', false);
 /*    $("#dialogDefecte").hide();
    $("#dialogAnimat").hide();
    $("#dialogConfirm").hide();
    $("#dialogAc").hide();
    $("#dialogCa").hide(); */
}

function control() {    
    if ($(this).val()=="personal"){
        $("#datos").load("html/personal.html",function(response,status,xhr){
            if ( status == "error" ) {
                var msg = "Error al carregar la pàgina: ";
                $( "#datos" ).html( "<h1>" + msg + xhr.status + " " + xhr.statusText +  "</h1>" );
            }
            $("#datos").html=response; 
        });
    } else{
        $("#datos").load("html/direccion.html",function(response,status,xhr){
            console.log(status);
            if ( status == "error" ) {
                var msg = "Error al carregar la pàgina: ";
                $( "#datos" ).html( "<h1>" + msg + xhr.status + " " + xhr.statusText +  "</h1>" );
            }
            $("#datos").html=response; 
        });
    }
}

function enviar() {
//    defecto();
    animado();
//    confirmacion();

}

/* function defecto(){
    $( "#dialogDefecte" ).dialog();
} */

function animado(){
    $( "#dialogAnimat" ).dialog({
     //   autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });

  //  $( "#dialogAnimat" ).dialog( "open" );

}

/*function confirmacion(){
    $( "#dialogConfirm" ).dialog({
        resizable: false,
        height: "auto",
        width: 400,
        modal: true,
        buttons: {
            "Aceptar": function() {
                $( "#dialogAc" ).dialog();
                $( this ).dialog( "close" );
            },
            "Cancelar": function() {
                $( "#dialogCa" ).dialog();
                $( this ).dialog( "close" );
            }
        }
    });    
}*/