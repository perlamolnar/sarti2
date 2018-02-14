window.addEventListener("load", cargaEventos);

function cargaEventos() {
    document.getElementById("addElement").addEventListener("click", add);
    document.getElementById("deleteElement").addEventListener("click", borrar);
    
}

// function add() {
//     var newElement = document.getElementById("NewElement").value; //recojer texto de input    
//     document.getElementById("lista").innerHTML = document.getElementById("lista").innerHTML + "<li>"+newElement+"</li>";
//     document.getElementById("NewElement").value=" ";
// }



//otra version:
function add() {
    var newElement = document.getElementById("NewElement").value;
    var array_li = document.getElementsByTagName("li");
    if (array_li.length ==0){
        document.getElementById("deleteElement").disabled = false;
    }
    var elemento = document.createElement("li");
    var texto =document.createTextNode(newElement);
    elemento.appendChild(texto); //añadimos el texto en el elemento
    var lista = document.getElementById("lista");
    lista.appendChild(elemento);
    document.getElementById("NewElement").value = " ";
}

function borrar() {
    //var lista = document. getElementById("lista");
    var array_li = lista.getElementsByTagName("li");

    var ultimo_li = array_li[array_li.length-1];
    ultimo_li.parentNode.removeChild(ultimo_li); //borramos el ultimo elemento

    if (array_li.length==0) {
        document.getElementById("deleteElement").disabled = true;        
    }
}