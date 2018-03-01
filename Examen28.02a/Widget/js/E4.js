$(document).ready(function () {
    $("#menu").menu();


    $("#gato").on("click", mifuncion);
    $("#perro").on("click", mifuncion);
    $("#rata").on("click", mifuncion);


});

function mifuncion() {
    var opcion = $(this).attr("id");        //opcion1
    opcion = "html/" + opcion + ".html";    //html/opcion1.html
    console.log(opcion);   

    $("#vizualizar").load(opcion);
}

