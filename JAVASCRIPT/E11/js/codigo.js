window.onload = function () {
    var mensajeTot = "";

    // Numero de enlaces de la pagina

    var enlaces = document.getElementsByTagName("a"); 
    var numeroEnlaces = enlaces.length;
    mensajeTot +="El número de las enlaces de la página es "+numeroEnlaces + "<br>";


    // Direccion del penultimo enlace
    var penultimoEnlace = document.links[numeroEnlaces-2].href;
    mensajeTot += "La dirección del penultimo enlace es: " + penultimoEnlace +"<br>";

    // Numero de enlaces que apuntan a http://prueba


    // Numero de enlaces del tercer párrafo
    var enlaces3parrafo = document.querySelector("p > a");
    var numEnlaces3Parrafo = enlaces3parrafo.length;
    mensajeTot += "El número de las enlaces del tercer parrafo es " + numEnlaces3Parrafo + "<br>";



    //ens posicionem al div id="informacion"
    var info = document.getElementById("informacion");
    //injecta mensajeTot al html
    info.innerHTML = mensajeTot;

}