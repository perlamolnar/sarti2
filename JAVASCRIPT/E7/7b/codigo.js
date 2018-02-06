var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];

//mostrando los meses uno por uno con el "for":
/* for (i = 0; i < 12; i++) {
    alert (meses[i]);    
}  */

var final = false;
while (!final) {  //!final es como final=ture. negamos que final sea false
    var tuMes = prompt("Introduce tu mes favorito.");
    var posicion = meses.indexOf(tuMes);
    //si no encontra me dara -1

    if (posicion >-1) {
        
        alert("Tu mes favorito esta en la posición " + ++posicion);
        final=true;        
    }
    else{
        alert("No encontro tu mes favorito.");
    }
    
}














function alertEnCapa(texto) {
    var capa=document.getElementById("capaAlert");
    capa.insertAdjacentHTML('beforeend', "<br>" + texto);
    
}
    alertEnCapa("uno");
    alertEnCapa("dos", "capaAlert");
    alertEnCapa("tres");


















