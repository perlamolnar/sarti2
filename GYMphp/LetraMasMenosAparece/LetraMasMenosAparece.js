$(document).ready(function () {
    $("#frequenciaLetras").on("click", ContarLetras);
    
});

function ContarLetras() {
    var cadena = $("#cadena").val();
    console.log(cadena);

    $.post("LetraMasMenosAparece.php", { cadena: cadena}, function (data) {
        $("#resultado").html(data);
    });
}