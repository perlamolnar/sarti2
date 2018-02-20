window.addEventListener("load",cargaEventos);

var china = 0;
var peru = 0;

function cargaEventos(){
    document.getElementById("hola").addEventListener("keydown",mifuncion);
    
    var imagenes = document.querySelectorAll("#smallImg img");
    for (foto of imagenes) {
        console.log(foto);
        foto.addEventListener("click", visor);
    }


}
function mifuncion(){
        eventSrcID=(event.srcElement)?event.srcElement.id:'undefined';
        eventtype=event.type;
        console.log(eventtype);
        status=eventSrcID+' has received a '+eventtype+' event.';
        console.log(status);
        
        var caracterCode = event.charCode || event.keyCode; 
        //caracter=String.fromCharCode(caractercode);
        console.log(caracterCode);

        var letra = String.fromCharCode(caracterCode); 
        console.log(letra);

        if(caracterCode=="a"){
            console.log("return false");
            event.returnValue=false;
        }
}


function visor() {

    var bigImg = document.getElementById("bigImg");
    var imgText = document.getElementById("imgText");

    var posicionX = event.srcElement.alt;
    switch (posicionX) {
        case "Peru":
            peru++;
            break;
        case "China":
            china++;
            break;
        default:
            break;
    }
    console.log(posicionX);

    bigImg.src = this.src;
    imgText.innerHTML = this.alt;
    
    console.log("Visitas a China -->"+china);
}