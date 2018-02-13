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
    var numEnlacePrueba = 0;
    for (i = 0; i < enlaces.length; i++) {      
        if (enlaces[i].getAttribute("href")=="http://prueba") {
                numEnlacePrueba++;            
        } 
    }
    mensajeTot += "El número de enlaces que apuntan a ´http://prueba´ es: " + numEnlacePrueba + "<br>";

    //otro modo de hacer:
    var enlacesPrueba = document.querySelectorAll("a[href=\"http://prueba\"]");
    var numeroEnlacesPrueba = enlacesPrueba.length;
    mensajeTot += "El número de enlaces que apuntan a ´http://prueba´ es: " + numeroEnlacesPrueba+ "<br>";



    // Numero de enlaces del tercer párrafo

    var parrafos = document.getElementsByTagName("p");
    //var tercerParrafo = parrafos[2];
    //console.log(tercerParrafo);    
    //var enlacesDeTercerParrafo = tercerParrafo.getElementsByTagName("a");
    var enlacesDeTercerParrafo = parrafos[2].getElementsByTagName("a");    
    var numEnlaces3Parrafo = enlacesDeTercerParrafo.length;   
    mensajeTot += "El número de las enlaces del tercer parrafo es " + numEnlaces3Parrafo + "<br>";

    

    //ens posicionem al div id="informacion"
    var info = document.getElementById("informacion");
    //injecta mensajeTot al html
    info.innerHTML = mensajeTot;

}