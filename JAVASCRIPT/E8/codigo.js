//sin crear una función:

// var numero = prompt("Dame un numero y te diré si es par o impar.");
// var resto = numero % 2;

// if (resto != 0) {
//       alert("Tu numero es impar.");
// } else {
//       alert("Tu numero es par.");
// }


//con una función:
// var minumero = prompt("Dame un numero!");
// var miresultado = parImpar(minumero);
// alert("Resultado: El número " + minumero + " es " + miresultado);

// function parImpar(numero) { 

//       if (numero % 2 ==0) {
//             return "par"; 
//       } else {
//             return "impar"  ;
//       }

// }

//con SOLO UN RETURN!!!! MEJOR
var minumero = prompt("Dame un numero!");
var miresultado = parImpar(minumero);
alert("Resultado: El número " + minumero + " es " + miresultado);

function parImpar(numero) {
      //var texto ="";
      if (numero % 2 == 0) {
            texto = "par";
      } else {
            texto = "impar";
      }
      return texto;

}

//con SOLO UN RETURN!!!! MEJOR
var minumero = prompt("Dame un numero!");
var miresultado = parImpar(minumero);
alert("Resultado: El número " + minumero + " es " + miresultado);

function parImpar(numero) {
      var texto ="";
      if (numero % 2 == 0) {
            texto += "par";
      } else {
            texto += "impar";
      }
      return texto;

}











//EN OTRA MANERA:
var minumber = prompt("Give me a number!");
miresultado = PARimPAR(minumber); //llamamos la función, gardamos lo que devuelve en "resultado"
alert("The number " +minumber+ " is " +miresultado);


function PARimPAR(n) {
      return(n%2 ? "impar":"par");
      //variablename o return = (condition ? true : false); 
      //variablename o return = (condition ? 1 : 0); 

}








