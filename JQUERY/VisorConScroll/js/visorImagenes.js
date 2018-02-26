$(document).ready(function () {   
    var n 
    $("#smallImg img").on("click", visor);
    //$("#leftShift").on("click", plusSlides(-1)); 
    //$("#rightShift").on("click", plusSlides(1));
    
});

function visor() {

    var imagen = this.src;
    console.log(imagen);
    var imgText = this.alt;

    $("#bigImg").attr('src',imagen);
    $("#imgText").text(imgText);     
}

//http://sachinchoolur.github.io/lightslider/


// var slideIndex = 1;
// showDivs(slideIndex);

// function plusSlides(n) {
//   showDivs(slideIndex += n);
// }

// function showDivs(n) {
//   var i;
//   var x = $(".mySlides");               //recogemos las imagenes
    
//   if (n > x.length) {slideIndex = 1}    //si llegamos a la ultima img, volver a la primera imagen

//   if (n < 1) {slideIndex = x.length}    //si llegamos antes de la primera img, volver a la ultima img.   

//   for (i = 0; i < x.length; i++) {      //recorremog las img-s.
//      x[i].style.display = "none";       //escondimos todas las imagenes
//   }
//   x[slideIndex-1].style.display = "block";  
// }