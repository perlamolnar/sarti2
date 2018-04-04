$(document).ready(function () {
    $("#calcular").on("click", calcular);

});

function calcular() {
    var number1 = $("#numero1").val();
    var number2 = $("#numero2").val();
    var operacion = $("#operacion").val();
    
    if(number1=="" ||number2==""){
        $("#resultado").html("En algún lugar no has puesto ningún número.");
        
    }
    else{
        $.post("calculadora.php", { number1: number1, number2: number2, operacion: operacion}, function (data) {

        $("#resultado").html(data);
    });
    }
    
    
    
}