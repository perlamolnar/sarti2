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


//otra forma:
for (var i = 10; i >=0; i--) {
    var respuesta = confirm(i);
    if(!respuesta){ //respuesta ==false, pero con! es mas como los programos
        alert("la cuenta atras se interrumpe");
        break;
    }
    
}