$(document).ready(cargaEventos);

function cargaEventos(){
//  tabDef(); 
//  tabOrdena();
  tabVertical();
}

/* function tabDef(){
    $( "#tabs" ).tabs();
} */


/* function tabOrdena(){
//    var tabs = $( "#tabs" ).tabs({
//        event: "mouseover",
//        active: false,
//       collapsible: true,
//        show: { effect: "blind", duration: 800 }
//      });
      $( "#tabs" ).tabs({
        event: "mouseover",
        active: false,
        collapsible: true,
        show: { effect: "blind", duration: 800 }
      })
    .find( ".ui-tabs-nav" ).sortable({
        axis: "x",
        stop: function() {
            tabs.tabs( "refresh" );
        }
    });
} */

function tabVertical(){
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
}