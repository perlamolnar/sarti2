window.addEventListener("load", cargaEventos);

function cargaEventos() {
    document.getElementById("addElement").addEventListener("click", add);
    
}

function add() {
    var newElement = document.getElementById("NewElement").value; //recojer texto de input    
    document.getElementById("lista").innerHTML = document.getElementById("lista").innerHTML + "<li>"+newElement+"</li>";
    document.getElementById("NewElement").value=" ";
}
