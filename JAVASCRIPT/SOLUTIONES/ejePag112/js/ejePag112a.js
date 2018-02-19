function limita(maximoCaracteres) {
    var diferencia;
    var resposta=true;
    var elemento = document.getElementById("tarea");
    if(elemento.value.length >= 			maximoCaracteres ) {
        resposta=false;
      }
//		console.log(elemento.value.length);
    diferencia = maximoCaracteres - elemento.value.length;
    document.getElementById("ayuda").innerHTML = diferencia + " / " +  maximoCaracteres;
    return resposta;

}
