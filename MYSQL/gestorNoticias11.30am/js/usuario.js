$(document).ready(function() { 
    
    PaginacionContacto(1);
    $("#back").on("click", menosUno);    
    $("#next").on("click", masUno); 
    
   
}); //fin de document ready;

function masUno() {    
    //coger el valor de la pagina con el class active, añadir 1, y pasar lo a la funcion paginacionContacto
    $pageActual = $(".active").val();
    //console.log($pageActual);    
    $nextPage=parseInt($pageActual)+1;
    //console.log($next);    
    PaginacionContacto($nextPage);
    
}

function menosUno() {    
    $pageActual1 = $(".active").val();
    //console.log($pageActual1);    
    $backPage=$pageActual1-1;
    //console.log($back);
    PaginacionContacto($backPage);    
}

function PaginacionContacto(page) {
    
    $(".paginationbtn").removeClass("active");  //eliminamos el class active de todos los botones
    $("#paginaActual"+page).addClass("active"); //añatimos el class active a la pagina actual

    if (page == 1) {            
        $("#back").hide();
    } else {             
        $("#back").show();
    }

    $total_paginas = $("#next").val();  //recogemos el valor que hemos gauardado en el "value" del botton "next"
    //console.log($total_paginas);
    if (page == $total_paginas) {  //poner total_number of pages
        $("#next").hide();
    } else {        
        $("#next").show();
    }

    $.ajax({
        url: 'php/usuario.php', // archivo php que tratara los datos
        type: 'GET', // forma de enviar los datos
        dataType: 'json', // tipo de datos que se envían
        data:{"page":page},
        // funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
        success: function (result) {
            // console.log("hola2");
            // console.log(result.consulta);
            // console.log(result.resultado);
            // console.log(result.error);

            // crear la variable para contener el cuerpo de la tabla:  
            var tbl_body = "";
            //recorre el array que recogemos del php en result.query
            var tbl_row = "";
            //recorre todos los valores del array y los coloca en un formato tabla
            $.each(result.consulta, function (k, v) {
                //console.log(v.Id);
                var id = 0;
                var nombre = "";
                var email = "";
                var telefono = "";
                var direccion = "";
                var username = "";                
                var tipo = "";

                id = v.Id_usuario;
                nombre = v.Nombre;
                email = v.Email;
                telefono = v.Telefono;
                direccion = v.Direccion;
                username = v.Username;
                tipo = v.Tipo;

                tbl_row += "<tr>"
                tbl_row += "<td>" + id + "</td>";
                tbl_row += "<td>" + nombre + "</td>";
                tbl_row += "<td>" + email + "</td>";
                tbl_row += "<td>" + telefono + "</td>";
                tbl_row += "<td>" + direccion + "</td>";
                tbl_row += "<td>" + username + "</td>";
                tbl_row += "<td>" + tipo + "</td>";

                tbl_row += "<td><a href=''><i class='material-icons' style='color:#26A69A' onClick='openModalEditUsuario("+JSON.stringify(v)+");'>Edit</i></a></td>";
                tbl_row += "<td><a href=''><i class='material-icons' style='color:#26A69A' onClick='borrarUsuario("+JSON.stringify(v.Id_usuario)+");'>Delete</i></a></td>";
                
                tbl_row += "</tr>"
            })

            $("#listado tbody").html(tbl_row);

        },
        // funcion ejecutada si ajax tiene un error
        error: function (result) {
            console.log("Error de Ajax.");
            console.error(result.error);
        }
        // el resultado de la función queda guardado en la variable result


    });
      
}

