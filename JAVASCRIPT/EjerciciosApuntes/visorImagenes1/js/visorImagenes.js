window.addEventListener("load",getReady);

function getReady(){
    /* Cargar todos los eventos de la página */ 
    var imagenes = document.querySelectorAll("#smallImg img");
    for (foto of imagenes) {
        console.log(foto);
        foto.addEventListener("click", visor);        
    }
}
       
function visor() {
    var bigImg = document.getElementById("bigImg");
    var imgText = document.getElementById("imgText");
    
    bigImg.src = this.src; 
    imgText.innerHTML = this.alt;

     
}

