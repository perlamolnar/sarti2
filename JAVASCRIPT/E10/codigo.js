inicio();

function inicio() {
      var micadena = prompt("Escribe algun texto.");
      var miresultado = palindromo(micadena);
      if (miresultado) {                  //if resultado es TRUE
            alert("Este texto " + micadena+" es palindromo.");
      }else {                             //if resultado es FALSE
            alert("Este texto " + micadena +"  NO es palindromo.");
      }
}

function palindromo(cadena) {
      var resultado = true;
      var cadena = cadena.toLowerCase();
      var cadenaArray = cadena.split(" "); //creamos un array del texto dado.
      //alert(cadenaArray);

      var cadenaSinEspacio = cadenaArray.join("");//eliminamos los espacios 
      //alert(cadenaSinEspacio);

      var arraySinEspacio = cadenaSinEspacio.split("");
      //alert(arraySinEspacio);
      
      var arrayAlreves = arraySinEspacio.slice(0);
      //copiar el array y guardar en otro array. Si no, no hara el inverse!!!!
      //.slice(0)->zero, porque queremos que no quite ningun elemento del array. Pero es = .slice(); 
      
      arrayAlreves.reverse();
      //alert(arrayAlreves);

      //en un bucle "for" comparamos los dos arrays para ver si son identicos :

      for (i = 0; i < arraySinEspacio.length; i++) {
            //alert(arraySinEspacio[i]);
            //alert(arrayAlreves[i]);
            if (arraySinEspacio[i] != arrayAlreves[i]) {
                  //si cumple este "if" guarda un valor "false" en el variable "resultado"            
                  resultado=false; 
                  break;                 
           }    
           console.log("paso por bucle "+i);
      }

return resultado;      
}




var micadena1 = prompt("Write some text.");
var miresultado1 = palindromo1(micadena1);
alert(miresultado1);

function palindromo1(cadena) {      
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
                  resultado = "This text is palindromo";
                  
            }else{
                  resultado = "This text is not palindromo";
            }
      }

      return resultado;
}