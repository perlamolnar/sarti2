//FOR
var semana =["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

  alert(semana[0] + "\n" + semana[1] + "\n" + semana[2] + "\n" + semana[3] + "\n" + semana[4] + "\n" + semana[5] + "\n" + semana[6]  );

//mostrando los días uno por uno con el "for":
for (i = 0; i < 7; i++) {
    alert (semana[i]);    
} 

// FOR... IN
for(i in semana){
    alert(semana[i]);
} 

//FOR OF
for (elemento of semana) {
    alert(elemento);    
}  

//WHILE
var i = 0;
while (i < 7) {    
    alert(semana[i]); 
    i++;  
}

//DO WHILE
var x = 0;
do {
    alert(semana[x]);
    x++;    
} while (x < 7);


