//CON 1 ENLACE SOLO!!!
$(document).ready(function () {
    $("#adicional").hide(); 
    $("#enlace1").click(function () {
        $("#adicional").toggle().css("color", "red");
        
        var textBoton = $("#adicional").css("display");
        if (textBoton == "none") {
            $("#enlace1").text("Leer mas");

            
        } else {
            $("#enlace1").text("Leer menos");
        }
        
    })
});
