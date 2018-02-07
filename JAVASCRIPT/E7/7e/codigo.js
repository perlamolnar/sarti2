var numero = prompt("Dame un numero para desde hacer una cuenta atrás" );
var cuentaAtras = 1;

//aquí conta atras con los dos botoes
for ( numero; numero > 0; numero--) {
    cuentaAtras = numero;
    confirmar = confirm("Confirma si quieres contar atras desde "+ cuentaAtras + " ?"); 
    if (confirmar == false) {
        alert("Has decidido no continuar con la cuenta atrás. Adios!");
            break;
    }  
}


