$(document).ready(cargaEventos);

function cargaEventos() { 
    $("#datepicker").datepicker();
    $("#anim").on("change", dataAnimada);
    $("#format").on("change", formatoFecha); 
  
}

function dataAnimada() {
  $("#datepicker").datepicker();
  $("#anim").on("change", function () {
    $("#datepicker").datepicker("option", "showAnim", "slideDown");
  });
  
}

function formatoFecha() {
  $("#datepicker").datepicker();
  $("#format").on("change", function () {
    $("#datepicker").datepicker("option", "dateFormat", $(this).val());
  });
}


  