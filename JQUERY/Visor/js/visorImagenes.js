$(document).ready(function () {    
    $("#smallImg img").on("click", visor);         
});

function visor() {

    var imagen = this.src;
    console.log(imagen);
    var imgText = this.alt;

    $("#bigImg").attr('src',imagen);
    $("#imgText").text(imgText);  
    
}

  

//http://sachinchoolur.github.io/lightslider/