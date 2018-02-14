window.addEventListener("load", cargaEventos);

function cargaEventos() {
    var imagenes = document.getElementsByTagName("img");    
    for ( i = 0; i < imagenes.length; i++) {
        imagenes[i].addEventListener("mouseover", NoCopy);        
    }
  
}

function NoCopy() {
    alert("Está prohibido copiar el imagen.");
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 