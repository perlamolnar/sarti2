var micadena =prompt("Escribe algun texto.");
var miresultado = palindromo(micadena);

if (miresultado) {                  //if resultado es TRUE
      alert("es palindromo");
}else {                             //if resultado es FALSE
      alert("es NO palindromo");
}

alert(miresultado);

function palindromo(cadena) {
      var resultado = true;
      var cadena = cadena.toLowerCase();
      var cadenaArray = cadena.split(" "); //creamos un array del texto dado.
      //alert(cadenaArray);

      var cadenaSinEspacio = cadenaArray.join("");//eliminamos los espacios 
      //alert(cadenaSinEspacio);

      var arraySinEspacio = cadenaSinEspacio.split("");
      //alert(arraySinEspacio);
      
      var arrayAlreves = arraySinEspacio.slice(0);//copiar el array y guardar en otro array. Si no, no hara el inverse!!!!
      arrayAlreves.reverse();
      //alert(arrayAlreves);

      for (i = 0; i < arraySinEspacio.length; i++) {
            //alert(arraySinEspacio[i]);
            //alert(arrayAlreves[i]);
            if (arraySinEspacio[i] != arrayAlreves[i]) {
                  resultado=false;
                  break;                 
           }            
      }

return resultado;      
}




var micadena = prompt("Escribe algun texto.");
var miresultado = palindromo(micadena);
alert(miresultado);

function palindromo(cadena) {      
      var cadena = cadena.toLowerCase();
      var cadenaArray = cadena.split(" "); //creamos un array del texto dado.
      //alert(cadenaArray);

      var cadenaSinEspacio = cadenaArray.join("");//eliminamos los espacios 
      //alert(cadenaSinEspacio);

      var arraySinEspacio = cadenaSinEspacio.split("");
      //alert(arraySinEspacio);

      var arrayAlreves = arraySinEspacio.slice(0);//copiar el array y guardar en otro array. Si no, no hara el inverse!!!!
      arrayAlreves.reverse();
      //alert(arrayAlreves);

      for (i = 0; i < arraySinEspacio.length; i++) {
            //alert(arraySinEspacio[i]);
            //alert(arrayAlreves[i]);
            if (arraySinEspacio[i] == arrayAlreves[i]) {
                  resultado = "es palindromo";
                  
            }else{
                  resultado = "es NO palindromo";
            }
      }

      return resultado;
}