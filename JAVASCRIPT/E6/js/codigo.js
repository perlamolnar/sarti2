var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S','Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

var DNI = prompt("Introduce los numeros de tu DNI sin la letra al final");

if (DNI<99999999 && DNI > 0) {
    var LETRA = prompt("Introduce la letra de su DNI");
    LETRA = LETRA.toUpperCase();
    
    var restoDNI23 = DNI % 23;
    var letraCalculada = letras[restoDNI23];
    
    if (letraCalculada==LETRA) {
        alert("Tu numero de DNI es correcta.");

    }
    else{
        alert("Error, la letra no coincide con el numero que has dado.");
    }    
}






