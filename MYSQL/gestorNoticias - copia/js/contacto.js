// function findPaginaActual() {
//     var paginaActual=$(this).text();
//        
// }

$(document).ready(function() {    
    //console.log("hola");
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
    
    $(".paginationbtn").removeClass("active");
    $("#paginaActual"+page).addClass("active");

    if (page == 1) {            
        $("#back").hide();
    } else {             
        $("#back").show();
    }

    $total_paginas = $("#next").val();
    //console.log($total_paginas);
    if (page == $total_paginas) {  //poner total_number of pages
        $("#next").hide();
    } else {        
        $("#next").show();
    }

    $.ajax({
        url: 'php/contacto.php', // archivo php que tratara los datos
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
                var apellido = "";
                var edad = "";
                var email = "";

                id = v.Id;
                nombre = v.Nombre;
                apellido = v.Apellido;
                edad = v.Edad;
                email = v.Email;

                tbl_row += "<tr>"
                tbl_row += "<td>" + id + "</td>";
                tbl_row += "<td>" + nombre + "</td>";
                tbl_row += "<td>" + apellido + "</td>";
                tbl_row += "<td>" + edad + "</td>";
                tbl_row += "<td>" + email + "</td>";
                //tbl_row += "<td><a href=''><i class='material-icons' style='color:#26A69A' onClick='verContacto("+JSON.stringify(v)+");'>visibility</i></a></td>";
                //tbl_row += "<td><a href=''><i class='material-icons' style='color:#26A69A' onClick='VerModificarContacto("+JSON.stringify(v)+");'>edit</i></a></td>";

                tbl_row += "</tr>"
            })

            $("#listado tbody").html(tbl_row);
            //$("#paginaActual").html(pagination);
            //$('#paginaActual').html(result[0]);
            

        },
        // funcion ejecutada si ajax tiene un error
        error: function (result) {
            console.log("Ajax tiene un error");
            console.error(result.error);
        }
        // el resultado de la función queda guardado en la variable result


    });
      
}

