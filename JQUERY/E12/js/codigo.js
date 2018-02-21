


$(document).ready(function () {
    $("#enlace2").hide();
    $("#enlace1").click(muestra);
    $("#enlace2").click(oculta);
});

function muestra() {
    $("#adicional").addClass("visible");
    $("#enlace1").hide();
    $("#enlace2").show().css("color", "red");
    //console.log("hola");
}

function oculta() {
    $("#adicional").removeClass("visible");
    $("#adicional").addClass("oculto");

    $("#enlace1").show().css("color", "green");
    $("#enlace2").hide();
    //console.log("adios");
}

