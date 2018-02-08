//sin crear una función:

// var numero = prompt("Dame un numero y te diré si es par o impar.");
// var resto = numero % 2;

// if (resto != 0) {
//       alert("Tu numero es impar.");
// } else {
//       alert("Tu numero es par.");
// }


//con una función:
var numero = prompt("Dame un numero!");
var resultado = parImpar(numero);

function parImpar(numero) { 

      if (numero % 2 ==0) {
            return "par"; 
      } else {
            return "impar"  ;
      }

}
alert("Resultado: El número " + numero + " es " + resultado);


//EN OTRA MANERA:
var number = prompt("Give me a number!");
function PARimPAR(n) {
      return(n%2 ? "impar":"par");
      //variablename o return = (condition) ? true :false; 
      //variablename o return = (condition) ? 1 : 0; 

}

resultado = PARimPAR(number);    
//llamamos la función, gardamos lo que devuelve en "y"

alert("The number " +number+ " is " +resultado);







