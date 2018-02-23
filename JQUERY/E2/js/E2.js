$(document).ready(function(){
    $("input:radio").on("change",mifuncion);
});

function mifuncion() {
    var opcion = $(this).attr("id");
    console.log(opcion);

    $("#mainForm").load(opcion+".html");

    
}