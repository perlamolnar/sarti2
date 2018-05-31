// $(document).ready(function () {
//     $("#paginaActual").on("click", findPaginaActual); 
// });

// function findPaginaActual() {
//     var paginaActual=$(this).text();
//     console.log(paginaActual);    
// }

$(document).ready(function() {    
    //console.log("hola");
    PaginacionContacto(1);  
    $("#masUno").on("click", masUno); 
    $("#menosUno").on("click", menosUno); 
    
    
   
}); //fin de document ready;

function PaginacionContacto(page) {

    $(".paginationbtn").removeClass("active");
    $("#paginaActual"+page).addClass("active");

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

