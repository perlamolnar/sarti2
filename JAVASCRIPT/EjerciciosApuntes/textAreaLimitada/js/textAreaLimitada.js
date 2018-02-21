window.addEventListener("load", cargaEventos);

function cargaEventos() {
    document.getElementById("Mensaje").addEventListener("keyup", limita);
    document.getElementById("Mensaje").addEventListener("keydown", limita);
}


function limita() {
    var maximoCaracteres = 10;    
    var text = document.getElementById("Mensaje");
    if (text.value.length > maximoCaracteres) {
        return false;        
    }
    else {
        var carEscrito = text.value.length;
        var carQueda = maximoCaracteres - carEscrito;

        document.getElementById("caracterEscrito").innerHTML = "El número de caracteres escritos: " +carEscrito;
        document.getElementById("caracterQueda").innerHTML = "El número de caracteres que quedan: " +carQueda;

        return true;        
    }

}





