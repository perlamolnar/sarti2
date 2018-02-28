$(document).ready(cargaEventos);

function cargaEventos(){
 // dataDef(); 
//  dataAnimada();
//  dataFormatada();
  dataMaxima();
}

/* function dataDef(){
    $( "#datepicker" ).datepicker();
} */

/* function dataAnimada(){
  $( "#datepicker" ).datepicker();
  $( "#datepicker" ).datepicker( "option", "showAnim", "slideDown" );
//  $( "#datepicker" ).datepicker({ 
//    showAnim: "clip"
//  }); 
} */

/* function dataFormatada(){
  $( "#datepicker" ).datepicker({ 
      dateFormat: "yy-mm-dd"
  }); 
} */

function dataMaxima(){
  $( "#datepicker" ).datepicker({ 
    showAnim: "clip",
    dateFormat: "dd/mm/yy",
    minDate: 0, 
    maxDate: "+2M"
  }); 
}