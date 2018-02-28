$(document).ready(cargaEventos);

function cargaEventos(){
  acordeonDef();
  //acordeonIcons();
  //acordeonAlturaContent();
  //acordeonOrdenable();
}

function acordeonDef(){
  $( "#accordion" ).accordion({
    header: "h3",
  });
}

/* function acordeonIcons(){
    var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
    $( "#accordion" ).accordion({
      icons: icons,
      header: "div > h3",
      collapsible: true
    });
    $( "#iconos" ).on( "click", function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
    });
    $( "#accordion" ).accordion( "option", "active", false );
} */

/* function acordeonAlturaContent(){
    $( "#accordion" ).accordion({
      header: "div > h3",
      heightStyle: "content",
      collapsible: true,
      active:false
    });
  //  $( "#accordion" ).accordion( "option", "active", false )
} */

/* function acordeonOrdenable(){
  $( "#accordion" )
    .accordion({
      header: "div > h3",
      collapsible: true
    })
    .sortable({
      axis: "y",
      handle: "h3",
      stop: function( event, ui ) {
        // IE doesn't register the blur when sorting
        // so trigger focusout handlers to remove .ui-state-focus
        ui.item.children( "h3" ).triggerHandler( "focusout" );
        // Refresh accordion to handle new order
        $( this ).accordion( "refresh" );
      }
    });
  $( "#accordion" ).accordion( "option", "active", false );
} */