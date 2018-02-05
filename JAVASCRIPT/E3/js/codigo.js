var meses =["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];

alert(meses[0]);
alert(meses[1]);
alert(meses[2]);
alert(meses[3]);
alert(meses[4]);
alert(meses[5]);



alert(meses[0] + "\n" + meses[1] + meses[2] + "\n" + meses[3] + "\n" + meses[4] + "\n" + meses[5] + "\n" + meses[6] + "\n" + meses[7] + "\n" + meses[8] + "\n" + meses[9] + "\n" + meses[10] + "\n" + meses[11] + "\n" + meses[12] + "\n");

/* for (i = 0; i < 12; i++) {
    alert (meses[i]);    
} */



var listaMeses="";
for (i = 0; i < 12; i++) {
    listaMeses += meses[i]+"\n";
}
alert (listaMeses);






