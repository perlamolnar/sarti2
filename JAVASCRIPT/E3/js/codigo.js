var meses =["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];

//mostrando los meses uno por uno:
alert(meses[0]);
alert(meses[1]);
alert(meses[2]);
alert(meses[3]);
alert(meses[4]);
alert(meses[5]);
alert(meses[6]);
alert(meses[7]);
alert(meses[8]);
alert(meses[9]);
alert(meses[10]);
alert(meses[11]);

//mostrando los meses uno por uno con el "for":
/* for (i = 0; i < 12; i++) {
    alert (meses[i]);    
} */

alert(meses[0] + "\n" + meses[1] + meses[2] + "\n" + meses[3] + "\n" + meses[4] + "\n" + meses[5] + "\n" + meses[6] + "\n" + meses[7] + "\n" + meses[8] + "\n" + meses[9] + "\n" + meses[10] + "\n" + meses[11] + "\n" );


var listaMeses="";
for (i = 0; i < 12; i++) {    
    listaMeses += meses[i]+"\n";
    listaMeses = listaMeses.toUpperCase();  //para escribir la lista de meses con mayusculas
}
alert (listaMeses);






