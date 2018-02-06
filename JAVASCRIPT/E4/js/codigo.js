var valores = [true, 5, false, "hola", "adios", 2];

var resultado = valores[3] > valores[4];
alert("El texto " + valores[3]+" es mayor que el texto " + valores [4] + "? " + resultado);

//Operaciones matematicas 
var numero1 = valores[1];   //numero1 =5
alert("El numero1 es: " + numero1);
var numero2 = valores [5];  //numero2 =2
alert("El numero2 es: " + numero2);

resultado1 = numero1 + numero2;
alert ("La suma de numero1 (5) y numero2 (2) es " + resultado1);

resultado2 = numero1 - numero2;
alert ("La resta de numero1 (5) y numero2 (2) es " + resultado2);

resultado3 = numero1 * numero2;
alert ("La multiplicación de numero1 (5) y numero2 (2) es " + resultado3);

resultado4 = numero1 / numero2;
alert ("La división de numero1 (5) y numero2 (2) es " + resultado4);

resultado5 = numero1 % numero2;
alert ("El resto de numero1 (5) y numero2 (2) es " + resultado5);


//Combinar valores booleanos
var valor1 = valores[0];
var valor2 = valores[2];

//Obtener un resultado TRUE
var resultadoBoleano1 = valor1 || valor2;
alert(resultadoBoleano1);

//Obtener un resultado FALSE
var resultadoBoleano2 = valor1 && valor2;
alert(resultadoBoleano2);








