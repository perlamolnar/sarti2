
var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
var meses = meses.reverse();
var i = -1;

for (i = 0; i < 12; i++) {    
    alert(meses [i]);    
}


//Hacer lo mismo en otra manera:
var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
//meses = meses.toUpperCase(); //PORQUE NO FUNCCCIONA???????????????????????????????????
var i = meses.length-1;

for (i ; i >= 0; i--) {    
    alert(meses[i].toUpperCase());    
}


//toUpperCase funciona con strings pero NO CON ARRAYS




