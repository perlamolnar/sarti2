window.addEventListener("load", cargaEventos);

function cargaEventos() {
     document.getElementById("Mensaje").addEventListener("keyup", limita);
     document.getElementById("Mensaje").addEventListener("keydown", limita);
}


function limita() {
    var text = document.getElementById("Mensaje").value;
    console.log(text); 
    
    var SinLlimonas = text.split("llimona"+" ");
    console.log(SinLlimonas);

    var SinLlimonas1 = SinLlimonas.join("");
    console.log(SinLlimonas1);    

    text = document.getElementById("Mensaje").value = SinLlimonas1;
    console.log(text);


    
    var SinPoma = text.split("poma"+" ");
    console.log(SinPoma);

    var SinPoma1 = SinPoma.join("");
    console.log(SinPoma1);

    text = document.getElementById("Mensaje").value = SinPoma1;



    var SinTaronja = text.split("taronja" + " ");
    console.log(SinPoma);

    var SinTaronja1 = SinTaronja.join("");
    console.log(SinTaronja1);

    text = document.getElementById("Mensaje").value = SinTaronja1;

}
 
