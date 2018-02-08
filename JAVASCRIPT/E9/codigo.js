var micadena = prompt("Escribe algún texto.");
var miresultado = recibeCadena(micadena);
alert(miresultado);

function recibeCadena(cadena) {
      var cadenaMayuscula = cadena.toUpperCase();
      var cadenaMinuscula = cadena.toLowerCase();
      var resultado;

      if (cadena==cadenaMayuscula) {
            //alert("Tu texto está formado sólo con MAYUSCULAS.");
            resultado = "Tu texto está formado sólo con MAYUSCULAS.";

      }else if(cadena==cadenaMinuscula){
            //alert("Tu texto está formado sólo con minusculas.");
            resultado = "Tu texto está formado sólo con minusculas.";

      }else {
            //alert("Tu texto está formado sólo con mayusculas y con minusculas.");
            resultado = "Tu texto está formado sólo con mayusculas y con minusculas.";
      }
      return resultado;
}


