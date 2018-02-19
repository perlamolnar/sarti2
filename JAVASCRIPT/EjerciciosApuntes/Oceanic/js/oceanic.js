window.addEventListener("load",getReady);

function getReady(){
    /* Cargar todos los eventos de la página */ 
    var buttons = document.getElementsByTagName("button");
    //console.log(buttons);
    for (i = 0; i < buttons.length; i++) {
       buttons[i].addEventListener("click", cambiarTitulo);  
    }

    //otra manera:
    //for (elements in boton) {
    //    element[i].addEventListener("click", cambiarTitulo);
    //    }

    

    var colores = document.getElementById("colores").children;
    //console.log(colores);
    for (i = 0; i < colores.length; i++) {
        colores[i].addEventListener("click", cambiarColor);
    }
   
}

function cambiarTitulo() {
    var nuevoTitulo = this.innerHTML;
    console.log(nuevoTitulo);
    document.getElementById("miTitulo").innerHTML = nuevoTitulo; 
    
    //otra manera:
    //var encabezado =document.getElementsByTagName("h1")[0];
    //document.title=this.innerHTML;
    //encabezado.innerHTML=this.innerHTML;

    //otra manera:
    //var titulo =document.getElementsByTagName("h1");
    //document.title=this.innerHTML;
    //titulo[0].innerHTML=this.innerHTML;
    


}

function cambiarColor() {
    switch (this.id) {
        case "rojo":
            document.body.style.backgroundColor = this.getAttribute('class');        
            break;
        case "negro":
            document.body.style.backgroundColor = this.getAttribute('class');
            break;
        case "amarillo":
            document.body.style.backgroundColor = this.getAttribute('class');
            break;
        case "verde":
            document.body.style.backgroundColor = this.getAttribute('class');
            break;
        case "negro":
            document.body.style.backgroundColor = this.getAttribute('class');
            break;
        case "rosa":
            document.body.style.backgroundColor = this.getAttribute('class');
            break;
        case "gris":
            document.body.style.backgroundColor = this.getAttribute('class');
            break;
        case "turquesa":
            document.body.style.backgroundColor = this.getAttribute('class');
            break;
        case "lima":
            document.body.style.backgroundColor = this.getAttribute('class');
            break;
    
        default:
            break;
    }

    var nuevoColor = document.getElementById(this.id);
    console.log(nuevoColor);



    var nuevoColor = nuevoColor.style.getPropertyValue.backgroundColor;
    console.log(nuevoColor);
    //document.body.style.backgroundColor = 
        
    
}



