window.addEventListener("load", cargaEventos);

function cargaEventos() {
    document.getElementById("enlace1").addEventListener("click", muestra); 
    document.getElementById("enlace2").addEventListener("click", oculta);      
}

function muestra() {
    document.getElementById("adicional").className ="visible";
    document.getElementById("enlace1").className = "oculto";
    document.getElementById("enlace2").className = "visible";
}
function oculta() {
    document.getElementById("adicional").className = "oculto";
    document.getElementById("enlace1").className = "visible";
    document.getElementById("enlace2").className = "oculto";
    
}
