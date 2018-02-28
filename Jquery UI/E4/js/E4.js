$(document).ready(cargaEventos);

function cargaEventos() { 
   
        $( "#tabs" ).tabs();
      
        var tabs = $( "#tabs1" ).tabs();
            tabs.find( ".ui-tabs-nav" ).sortable({
            axis: "x",
            stop: function() {
                tabs.tabs( "refresh" );
            }
            });
    
        $( "#tabs2" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
        $( "#tabs2 li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
}

