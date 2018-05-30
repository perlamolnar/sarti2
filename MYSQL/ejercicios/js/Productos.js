
$(document).ready(function () {
    $("#paginaActual").on("click", findPaginaActual);   
    
});

function findPaginaActual() {
    //console.log("hola");
    var paginaActual=$(this).text();
    console.log(paginaActual);


}
