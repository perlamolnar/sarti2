$(document).ready(function () {   
    $("#smallImg img").on("click", visor);
    
    $("#leftShift").on("click", function () {
        plusSlides(-1);
        console.log("Has hecho un click izquierda");
    });
    
    $("#rightShift").on("click", function (){
        plusSlides(1);
        console.log("Has hecho un click derecha");
    } );

});


function visor() {

    var imagen = this.src;
    console.log(imagen);
    var imgText = this.alt;

    $("#bigImg").attr('src',imagen);
    $("#imgText").text(imgText);     
}


var slideIndex = 3;               // variable global 
console.log("Empezamos con un slideIndex: " +slideIndex);
//showSlides(slideIndex);           

function plusSlides(n) {          //1.) la function se activa con el click en el boton diciendo si vamos: forward(1) o backward(-1;)
  showSlides(slideIndex += n);    //2.) llamamos la otra function "showSlides", giving info with the step forward(1) o backward(-1;) 
  console.log("slideIndex es: " +slideIndex);
}

function showSlides(n) {          //3.)entramos en la función
  var i;
  var x = $(".mySlides");         //4.)recogemos todas las imagenes
  //console.log(x);
  
  if (n > x.length) {slideIndex = 3}    //si llegamos a las ultimas 3 img, volver a las primeras 3 imagen

  if (n < 3) {slideIndex = x.length}    //si estamos con las primeras 3 img, con el click volver a las ultimas 3 img.   
  
  

  for (i = 0; i < x.length; i++) {      //recorremos las img-s.
    console.log("Recorremos todas las imagenes: " + x[i]);
    x[i].style.display = "none";       //escondimos todas las imagenes
  }

  console.log("Despues del click el slideIndex actual es: " +slideIndex);

  //mostramos las 3 imagenes calculadas:
  (x[slideIndex-3]).style.display = "block";
  //$("x[slideIndex-3]").display("block");     
      console.log("Primera foto - slideIndex de foto: "+ [slideIndex-3]);
      console.log(x[slideIndex-3]);

  x[slideIndex-2].style.display = "block";
  //$("x[slideIndex-2]").css("display", "block");
      console.log("Segunda foto:");  
      console.log(x[slideIndex-2]);

  x[slideIndex-1].style.display = "block"; 
  //$("x[slideIndex-1]").show;
      console.log("Tercer foto:");
      console.log(x[slideIndex-1]);  
}



//http://sachinchoolur.github.io/lightslider/