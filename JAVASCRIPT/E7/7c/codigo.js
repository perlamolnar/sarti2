var n = prompt("Dame un número (mas grande que zero) para calcular su factorial");
var resultado = 1;

for (i=n; i>0; i--) {
    resultado = resultado * i;
    //alert(resultado) ;    
}
alert(resultado);




//otra forma de hacer:
for (var i=1; i<=n; i++){
    resultado *= i;    
    //es como: resultado = resultado *i;
}
alert(resultado);






