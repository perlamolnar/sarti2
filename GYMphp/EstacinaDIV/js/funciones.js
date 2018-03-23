function cargarContenido(receta, estacion) {
    $.oist("receta.php", {nomArchivo:receta, nomEstacion:estacion}, function(data){
        $("#mainBox").html(data);
    });
    
}