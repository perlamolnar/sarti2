var texto = " ";
var numeroLetras = texto.length;
var Espacios = texto.split("");

do {
    texto = prompt("Introduce un texto de  más de 5 caracteres, por favor.");
    numeroLetras = texto.length;
} while (numeroLetras < 6);



//otra manera:
//Eliminar los espacios en blanco
//AQUI FALTA ALGUN CODOGO!!!!

var cadenaSINespacios ="";
for(i in Espacios){
    if (Espacios[i] !=" "){
        cadenaSINespacios += Espacios[i] ;
    }
}
texto=cadenaSINespacios;

while(texto.length<6);





