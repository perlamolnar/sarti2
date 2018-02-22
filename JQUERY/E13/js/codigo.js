$(document).ready(function () {
    $("#addElement").on("click", add);
    $("#deleteElement").on("click", borrar);
    
});

function add() {
    var newElement = $("#NewElement").val();
    //console.log(newElement);
    var elementENlista = "<li>" + newElement +"</li>";
    //console.log(elementENlista);
    $("#lista").append(elementENlista);
    $("#NewElement").val(" ");
}


function borrar() {
    var lastElement = $("#lista li:last").remove();  
    
}
