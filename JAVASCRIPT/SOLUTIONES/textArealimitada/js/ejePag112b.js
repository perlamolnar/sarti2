window.addEventListener('load', cargaEventos);

function cargaEventos(){
    document.getElementById("tarea").setAttribute("onKeyDown","return limita(10);");
    
}

function limita(maximoCaracteres) {


    var diferencia=10;
    var elemento = document.getElementById("tarea");
    var caracter = event.charCode || event.keyCode; 

    if(elemento.value.length >= maximoCaracteres ) {
        if(!(caracter==8||caracter==46||caracter==37||caracter==39)){
            diferencia = maximoCaracteres - elemento.value.length;
            document.getElementById("ayuda").innerHTML = diferencia + " / " +  maximoCaracteres;
            return false;
            //event.returnValue=false;
        }
    }


    if(!(caracter==37||caracter==39||caracter==8||caracter==46)){
        diferencia = maximoCaracteres - elemento.value.length -1;
        document.getElementById("ayuda").innerHTML = diferencia + " / " +  maximoCaracteres;
    }
    console.log("hola:"+caracter);

    if((caracter==8)||(caracter==46)){
        console.log(elemento.value.length);
        diferencia = maximoCaracteres - elemento.value.length+1;
        document.getElementById("ayuda").innerHTML = diferencia + " / " +  maximoCaracteres;
    }
    
   
}
