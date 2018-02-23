$(document).ready(function () {     
    $("#smallImg img").on("click", visor);
        
});

function visor() {
    var imagenes = $("#smallImg img");
    for (foto of imagenes) {
        console.log(foto);
        foto.addEventListener("click", visor);        
    }

    var bigImg = $("#bigImg");
    var imgText = $("#imgText");

    bigImg.src = this.src;
    imgText.innerHTML = this.alt;
}

  

