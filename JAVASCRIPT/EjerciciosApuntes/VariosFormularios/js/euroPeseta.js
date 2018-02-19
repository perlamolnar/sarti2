window.addEventListener("load", cargaEventos);

function cargaEventos() {
    document.getElementById("GetEuros").addEventListener("click", calcularEuros);
    document.getElementById("GetPesetas").addEventListener("click", calcularPesetas);
}

function calcularEuros() {
    var pesetas = document.getElementById("pesetas").value;
    if (pesetas > 0 && pesetas % 1 == 0) {
        Euros= pesetas / 166.386;
        Euros = Euros.toFixed(2);
        document.getElementById("resultEuros").innerHTML = pesetas + " pesetas = " + Euros + " euros" ;
        document.getElementById("pesetas").value ="";  
    } else {
        alert("El valor tiene que ser un número entero y mayor que zero!");
        document.getElementById("pesetas").value = "";  
          
    }      
}

function calcularPesetas() {
    var euros = document.getElementById("euros").value; 
    //var euros es un string, aunque el input es tipo numero

    euros = parseFloat(euros).toFixed(2);
    //el parseFloat convierte un string (euros) a un número     

    if (euros > 0 ) {
        Pesetas = euros * 166.386;
        Pesetas = Pesetas.toFixed();
        document.getElementById("resultPesetas").innerHTML = euros + " euros = " + Pesetas + " pesetas";
        document.getElementById("euros").value = "";
    } else {
        alert("El valor tiene que ser númerico y mayor que zero!");
        document.getElementById("euros").value = "";  
    }

    
}

