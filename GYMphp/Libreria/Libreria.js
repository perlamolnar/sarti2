$(document).ready(function () {
    $("#enviarCadena").on("click", TransformaCadena);
    
});

function TransformaCadena() {
    var cadena = $("#cadena").val();
    console.log(cadena);

    $.post("Libreria.php", { cadena: cadena}, function (data) {
        $("#resultado").html(data);
    });
}