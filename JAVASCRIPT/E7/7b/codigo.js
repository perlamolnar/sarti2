var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];

var final = false;
while (!final) {  //!final es como final=ture. negamos que final sea false
    var tuMes = prompt("Introduce tu mes favorito.");
    var posicion = meses.indexOf(tuMes);
    //.indexOf busca la posicion de un elemento concreto
    //si no encontra me dara -1

    if (posicion >-1) {
        
        alert("Tu mes favorito esta en la posición " + ++posicion); //vamos a añadir 1 al valor de la posicon para que coincide con el numero de mes en calendario.
        final=true;        
    }
    else{
        alert("No encontro tu mes favorito. Vuelva a probar.");
    }
    
}














function alertEnCapa(texto) {
    var capa=document.getElementById("capaAlert");
    capa.insertAdjacentHTML('beforeend', "<br>" + texto);
    
}
    alertEnCapa("uno");
    alertEnCapa("dos", "capaAlert");
    alertEnCapa("tres");


















