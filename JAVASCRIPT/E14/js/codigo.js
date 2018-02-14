window.addEventListener("load", cargaEventos);

function cargaEventos() {
    document.getElementById("enlace_1").addEventListener("click", oculta);
    document.getElementById("enlace_2").addEventListener("click", oculta);
    document.getElementById("enlace_3").addEventListener("click", oculta);
}

function oculta() {
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

    //Verificamos que es el contenido texot del enlace y damos instrucciones que hacer
    if (document.getElementById(enlace).innerHTML=="Ocultar contenidos") {
        document.getElementById(contenido).style.visibility="hidden";
        document.getElementById(enlace).innerHTML="Mostrar contenidos";      
    }
    else{
        document.getElementById(contenido).style.visibility = "visible";
        document.getElementById(enlace).innerHTML = "Ocultar contenidos"; 
    }        
}
