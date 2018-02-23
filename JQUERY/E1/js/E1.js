$(document).ready(function () {
    $("a").on("click", mifunction);    
});

function mifunction() {   
        event.preventDefault();

        var link = $(this).attr("href");
        console.log(link);

        $("#contenido").load(link);  
       
}


// $(document).ready(cargaEventos);

// function cargaEventos() {

//     $("a").on("click", function (event) {
//         event.preventDefault();

//         var link = $(this).attr("href");
//         console.log(link);

//         $("#contenido").load(link, function (response, status, xhr) {
//             if (status == "error") {
//                 var msg = "Sorry but there was an error: ";
//                 $("#contenido").html(msg + xhr.status + " " + xhr.statusText);
//             }

//             $("#contenido").html = response;
//         });
//     });

// }