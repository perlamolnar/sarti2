function cargarContenido(receta, estacion_) {  //desde el cuerpo, atraves del onclick cogemos los parametros ('$nombreFichero', '$estacion') y los metemos en la funcion
    
    $.post("receta.php", {nomArchivo:receta, estacion:estacion_}, function(data){ 

        $("#mainBox").html(data);
    });
    
}

function borrar($filepath, $filename){  //desde el cuerpo, atraves del onclick cogemos los parametros y los metemos en la funcion
    
    $.post("../inCuerpo/eliminar.php", {path:$filepath, file:$filename}, function(data){ 

        $("#mainBox").html(data);
    });
    
}





//Change the text of a <div> element using an AJAX POST request:

    //     $.post("demo_ajax_gethint.asp", {suggest: txt}, function(result){
    //         $("span").html(result);
    //     });

    // Sintax:
    // $.post(URL,data,callback);
    //     1. parameter of $.post() is the URL we wish to request ("receta.php")
    //     2. Then we pass in some data to send along with the request (receta y estacion).
    //         The <?php script in "receta.php" reads the parameters, processes them, and returns a result.
    //     3. parameter is a callback function. The first callback parameter holds the content of the page requested, and the second callback parameter holds the status of the request.