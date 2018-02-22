$(document).ready(function () {    
    $("a").on("click", muestraOculta);
});

function muestraOculta() {
    $(this).prev().toggle("slow");

        if ($(this).text() == "Ocultar contenidos") {        
            $(this).text("Mostrar contenidos");
        } else {        
            $(this).text("Ocultar contenidos");
        }
}


//PIRMERA VERSION:
// $(document).ready(function () {
//     //$("#enlace_1").on("click", muestraOculta);
//     //$("#enlace_2").on("click", muestraOculta);
//     //$("#enlace_3").on("click", muestraOculta);
// });
// function muestraOculta() {
//     //Guardamos en un variable su ultimo caracter:
//     var idEnlace = $(this).attr("id");
//     console.log(idEnlace);
//     var numEnlace = idEnlace.substr(-1);
//     console.log(numEnlace);
//     //mas simplemente:
//     //var NumIdEnlace = this.id.substr(-1);

//     //Creamos variables dinamicas segun en qual enlace hacemos click:
//     var enlace = "#enlace_" + numEnlace; //#############indicar que es un ID!!!!!! si no, no lo sabe!
//     var contenido= "#contenidos_"+numEnlace;

//     //Verificamos que es el contenido texto del enlace y damos instrucciones que hacer:
//     if ($(this).text() == "Ocultar contenidos") {
//         $(enlace).text("Mostrar contenidos");
//         $(contenido).css("display", "none");
        
//     } else {
//         $(enlace).text("Ocultar contenidos");
//         $(contenido).css("display", "block");        
//     }    
// }


