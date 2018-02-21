window.addEventListener("load", cargaEventos);

function cargaEventos() {
    document.getElementById("enlace_1").addEventListener("click", muestraOculta);
    document.getElementById("enlace_2").addEventListener("click", muestraOculta);
    document.getElementById("enlace_3").addEventListener("click", muestraOculta);
}

function muestraOculta() {
    //document.getElementById("contenidos_1").className = "oculto";
    //document.getElementById("contenidos_2").className = "oculto";
    //document.getElementById("contenidos_3").className = "oculto";

    //console.log(this.id);  
    //this.id devuelve el ID de enlace en que hacemos un click. 

    //Guardamos en un variable su ultimo caracter:
    var NumIdEnlace = this.id.substr(-1);
    //console.log(NumIdEnlace);

    //Creamos variables dinamicas segun en qual enlace hacemos click:
    var enlace = "enlace_"+NumIdEnlace;
    var contenido= "contenidos_"+NumIdEnlace;

    //Verificamos que es el contenido texto del enlace y damos instrucciones que hacer
    if (document.getElementById(enlace).innerHTML=="Ocultar contenidos") {
        document.getElementById(contenido).style.visibility="hidden";
        document.getElementById(enlace).innerHTML="Mostrar contenidos";      
    }
    else{
        document.getElementById(contenido).style.visibility = "visible";
        document.getElementById(enlace).innerHTML = "Ocultar contenidos"; 
    }        
}





//otra version:
function muestraOculta(id) {
    var elemento = document.getElementById('contenidos_' + id);
    var enlace = document.getElementById('enlace_' + id);

    if (elemento.style.display == "" || elemento.style.display == "block") {
        elemento.style.display = "none";
        enlace.innerHTML = 'Mostrar contenidos';
    }
    else {
        elemento.style.display = "block";
        enlace.innerHTML = 'Ocultar contenidos';
    }
}



//otra version:

function muestraOculta() {
    var idEnlace = this.id;
    var trozos = idEnlace.split('_');
    var numero = trozos[1];
    var parrafo = document.getElementById('contenidos_' + numero);

    switch (parrafo.style.display) {
        case 'none':
            parrafo.style.display = 'block';
            this.innerHTML = 'Ocultar contenidos';
            break;
        case 'block':
        case '':
            parrafo.style.display = 'none';
            this.innerHTML = 'Mostrar contenidos';
            break;
    }
}