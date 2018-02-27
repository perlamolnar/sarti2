$(document).ready(cargaEventos);

function cargaEventos() { 
  $("#accordion").accordion({
      header: "h3",
      collapsible: true,
      heightStyle: "content",
      active:false
  }).sortable({
    axis: "y",
    handle: "h3",
    stop: function (event, ui) {
      // IE doesn't register the blur when sorting
      // so trigger focusout handlers to remove .ui-state-focus
      ui.item.children("h3").triggerHandler("focusout");

      // Refresh accordion to handle new order
      $(this).accordion("refresh");
    }
  });




// $(function () {
//   $("#accordion").accordion();
// });

/* $(function () {
  $("#accordion").accordion({
    heightStyle: "content"
  });
}); */


/*   var icons = {
    header: "ui-icon-circle-arrow-e",
    activeHeader: "ui-icon-circle-arrow-s"
    // se puede elegir otro icon: https://api.jqueryui.com/theming/icons/
  }; */

/*   $("#accordion")
    .accordion({
//      icons: icons,
      header: "div >h3",
      collapsible: true,
      //heightStyle: "content"
    }) */
/*     .sortable({
      axis: "y",
      handle: "h3",
      stop: function (event, ui) {
        // IE doesn't register the blur when sorting
        // so trigger focusout handlers to remove .ui-state-focus
        ui.item.children("h3").triggerHandler("focusout");

        // Refresh accordion to handle new order
        $(this).accordion("refresh");
      }
    }) ;*/

 // $("#accordion").accordion("option", "active", false);

  /* $("#toggle").button().on("click", function () {
      if ($("#accordion").accordion("option", "icons")) {
        $("#accordion").accordion("option", "icons", null);
      } else {
        $("#accordion").accordion("option", "icons", icons);
      }
    });
    $("#accordion").accordion("option", "active", false);//modificamos el valor a false
}); */

  
}




// $(function () {
//   var icons = {
//     header: "ui-icon-circle-arrow-e",     
//     activeHeader: "ui-icon-circle-arrow-s"
//     // se puede elegir otro icon: https://api.jqueryui.com/theming/icons/
//   };
//   $("#accordion").accordion({    
//     icons: icons,
//     header: "div >h3",
//     collapsible:true,
//     //heightStyle: "content"
//   });

//   $("#toggle").button().on("click", function () {
//     if ($("#accordion").accordion("option", "icons")) {
//       $("#accordion").accordion("option", "icons", null);
//     } else {
//       $("#accordion").accordion("option", "icons", icons);
//     }
//   });
//   //$("#accordion").accordion("option", "active", false);//modificamos el valor a false

// });


// $(function () {
//   $("#accordion")
//     .accordion({
//       header: "> div > h3"
//     })
//     .sortable({
//       axis: "y",
//       handle: "h3",
//       stop: function (event, ui) {
//         // IE doesn't register the blur when sorting
//         // so trigger focusout handlers to remove .ui-state-focus
//         ui.item.children("h3").triggerHandler("focusout");

//         // Refresh accordion to handle new order
//         $(this).accordion("refresh");
//       }
//     });
// });
