function cargarContenido(receta, estacion_) {
    $.post("receta.php", {nomArchivo:receta, estacion:estacion_}, function(data){
        $("#mainBox").html(data);
    });
    
}