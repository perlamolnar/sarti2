$(document).ready(function () {
    $("#calcular").on("click", calcular);

});

function calcular() {
    var number1 = $("#numero1").val();
    var number2 = $("#numero2").val();
    var operacion = $("#operacion").val();
    
    $.post("calculadora.php", { number1: number1, number2: number2, operacion: operacion}, function (data) {

        $("#resultado").html(data);
    });
    
}