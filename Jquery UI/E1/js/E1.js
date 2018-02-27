$(document).ready(cargaEventos);

function cargaEventos() { 
    $("#BtnSubmit").on("click", SubmitForm);
    $("#dialogAnimado").hide;
    $("#dialogConfirmado").hide;
}

function SubmitForm() {  
    dialog();
    dialogAnimado();
    confirmarEnvio();
}

function dialog() {       
    $("#dialog").dialog();    
}

function dialogAnimado() {
    $( "#dialog" ).dialog({
        autoOpen: false,
        show: {
          effect: "blind",
          duration: 1000
        },
        hide: {
          effect: "explode",
          duration: 1000
        }
      });
   
      $( "#opener" ).on( "click", function() {
        $( "#dialog" ).dialog( "open" );
      });

}  

function confirmarEnvio() {
    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,
      buttons: {
        "Accepto enviar el formulario": function() {
          $( this ).dialog( "close" );
          enviarForm();    

          
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      }
    });    
} 

function enviarForm() {
  $("form").submit();    
}
