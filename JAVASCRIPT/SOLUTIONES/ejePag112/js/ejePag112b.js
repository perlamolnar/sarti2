window.addEventListener('load', cargaEventos);

function cargaEventos(){
    document.getElementById("tarea").setAttribute("onKeyUp","return limita(10);");
    document.getElementById("tarea").setAttribute("onKeyDown","return limita(10);");
}

function limita(maximoCaracteres) {
    var diferencia;
    var elemento = document.getElementById("tarea");
    if(elemento.value.length >= maximoCaracteres ) {
        diferencia = maximoCaracteres - elemento.value.length;
        document.getElementById("ayuda").innerHTML = diferencia + " / " +  maximoCaracteres;
        return false;
    }

    diferencia = maximoCaracteres - elemento.value.length;
    document.getElementById("ayuda").innerHTML = diferencia + " / " +  maximoCaracteres;
}
