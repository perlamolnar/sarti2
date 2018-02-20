window.addEventListener("load", cargaEventos);

function cargaEventos() {
    document.getElementById("Mensaje").addEventListener("keydown", limita);
}

function limita() {
    var diferencia;
    var maximoCaracteres = 10;
    var text = document.getElementById("Mensaje");
   
    if (text.value.length >= maximoCaracteres) { 
        diferencia = maximoCaracteres - text.value.length;
        //document.getElementById("info").inner= diferencia + ""
        var caracter = event.charCode || event.keyCode;
        if (!(caracter==8 ||caracter==46 || caracter==39 || caracter==46)) {
            return false;
        } 
    }

    // if (!(caracter == 8 || caracter == 46 || caracter == 39 || caracter == 46)) {
    //     diferencia = maximoCaracteres - text-value.length -1;
    //     document.getE
    // } 


    else {
        var carEscrito = text.value.length;
        var carQueda = maximoCaracteres - carEscrito;

        document.getElementById("caracterEscrito").innerHTML = "El número de caracteres escritos: " + carEscrito;
        document.getElementById("caracterQueda").innerHTML = "El número de caracteres que quedan: " + carQueda;

        return true;
    }

}







// function cargaEventos() {
//     //document.getElementById("Mensaje").addEventListener("keyup", limita);
// }

// function limita() {
//     var maximoCaracteres = 10;    
//     var text = document.getElementById("Mensaje");
//     if (text.value.length > maximoCaracteres) {
//         return false;        
//     }
//     else {
//         var carEscrito = text.value.length;
//         var carQueda = maximoCaracteres - carEscrito;

//         document.getElementById("caracterEscrito").innerHTML = "El número de caracteres escritos: " +carEscrito;
//         document.getElementById("caracterQueda").innerHTML = "El número de caracteres que quedan: " +carQueda;

//         return true;        
//     }
    
// }

