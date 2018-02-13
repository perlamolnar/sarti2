window.addEventListener("load", cargaEventos);

function cargaEventos() {
    document.getElementById("enlace_1").addEventListener("click", oculta);
    document.getElementById("enlace_2").addEventListener("click", oculta);
    document.getElementById("enlace_3").addEventListener("click", oculta);
}

function oculta() {
    document.getElementById("contenidos_1").className = "oculto";
    document.getElementById("contenidos_2").className = "oculto";
    document.getElementById("contenidos_3").className = "oculto";

}
