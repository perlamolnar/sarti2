$(document).ready(cargaEventos);

function cargaEventos(){

    $("a").on("click",function(event){
        event.preventDefault();
        var link=$(this).attr("href");

        $("#contenido").load(link, function(response,status,xhr){
            if ( status == "error" ) {
                var msg = "Sorry but there was an error: ";
                $( "#contenido" ).html( msg + xhr.status + " " + xhr.statusText );
                console.log("XHR Status "+xhr.status);
                console.log("xhr.statusText "+xhr.statusText);
              }
            //$("#contenido").html=response;
            //console.log("response "+response);
        });
    });

  


}




