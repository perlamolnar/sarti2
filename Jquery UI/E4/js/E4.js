$(document).ready(cargaEventos);

function cargaEventos() { 
  $("#datepicker").datepicker();
    
  $("#datepicker1").datepicker();
     $("#anim").on("change", function () {
      $("#datepicker1").datepicker("option", "showAnim", $(this).val());
  });

  $("#datepicker2").datepicker();
   $("#format").on("change", function () {
     $("#datepicker2").datepicker("option", "dateFormat","dd-mm-yy");
       });
  
  $("#datepicker3").datepicker({ minDate: -20, maxDate: "+1M +10D" });

  $("#datepicker4").datepicker({
    showAnim: "slideDown",
    dateFormat: "yy-mm-dd",
    minDate: 0, //desde hoy
    maxDate: "+1M +10D"

  });

  
}



