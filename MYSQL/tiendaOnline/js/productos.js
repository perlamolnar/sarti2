$(document).ready(function() { 
    
    PaginacionContacto(1);
    $("#back").on("click", menosUno);    
    $("#next").on("click", masUno); 
    //$('#editUsuario').on('click', editUsuario);
    //$('#descargarPDF').on('click', descargarPDF);   
   
}); //fin de document ready;

function descargarPDF() {
    window.location.href = "php/generatePDF.php";
}

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
        url: 'php/productos.php', // archivo php que tratara los datos
        type: 'GET', // forma de enviar los datos
        dataType: 'json', // tipo de datos que se envían
        data:{"page":page},
        // funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
        success: function (result) {
            // console.log("hola2");
            // console.log(result.consulta);
            // console.log(result.resultado);
            // console.log(result.error);

            var card="";            
            //recorre el array que recogemos del php en result.query           
            //recorre todos los valores del array y los coloca en un formato
            $.each(result.consulta, function (k, v) {
                //console.log(v.Id);
                var id = 0;
                var nombre = "";                
                var descripcion = "";
                var precio = "";                
                var foto = "";

                id = v.Id_producto;
                nombre = v.Nombre;                      
                descripcion = v.Descripcion;
                precio = v.Precio;
                foto = v.Foto;

                card += "<div class='card'><img src='img/productos/" + foto + " '><h2>" + nombre + "</h2><button onClick='openModalProducto("+JSON.stringify(v)+")'><img class='icono' src='img/iconos/masInfo.jpg'></button></div>";
                
            })
            
            $("#pintacards").html(card);                       

        },
        // funcion ejecutada si ajax tiene un error
        error: function (result) {
            console.log("Error de Ajax.");
            console.error(result.error);
        }
        // el resultado de la función queda guardado en la variable result

    });
      
}


function openModalProducto(miUsuario) {
    //console.log(miUsuario.Nombre);
    $('#Id_producto').val(miUsuario.Id_producto);
    $('#Nombre').val(miUsuario.Nombre);    
    $('#Descripcion').val(miUsuario.Descripcion);
    $('#Precio').val(miUsuario.Precio); 
    $('#Foto').attr('src',"img/productos/" +miUsuario.Foto);    
   

    $('#openModalProducto').modal('show');   //abrir el modal

    var Nombre = miUsuario.Nombre;
    console.log(Nombre);   

    $.ajax({         

        url: 'php/availability.php', // archivo php que tratara los datos
        type: 'POST', // forma de enviar los datos
        dataType: 'json', // tipo de datos que se envían
        data:{Nombre:Nombre},
        // funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
        success: function (result) {
            // console.log("hola2");
            // console.log(result.resultado);
            // console.log(result.sql); 
            //console.log(result.consulta);
            // console.log(result.resultado);
            // console.log(result.error);

            var existencia="";
            var tbl_body = "";            
            var tbl_row = "";            
            //recorre el array que recogemos del php en result.query           
            //recorre todos los valores del array y los coloca en un formato
            $.each(result.consulta, function (k, v) {
                //console.log(v.Id);
                var nombreTienda = 0;
                var ciudad = "";                
                var direccion = "";
                var telefono = "";                
                var nombreProducto = "";
                var cantidad = "";

                nombreTienda = v.NombreTienda;
                ciudad = v.Ciudad;                      
                direccion = v.Direccion;
                telefono = v.Telefono;
                nombreProducto = v.Nombre;
                cantidad = v.CantidadDisponible;

                tbl_row += "<tr>"
                tbl_row += "<td>" + nombreTienda + "</td>";
                tbl_row += "<td>" + ciudad + "</td>";
                tbl_row += "<td>" + direccion + "</td>";
                tbl_row += "<td>" + telefono + "</td>";
                tbl_row += "<td>" + nombreProducto + "</td>";
                tbl_row += "<td>" + cantidad + "</td>";                

                //tbl_row += "<td><button onClick='openModalEditUsuario("+JSON.stringify(v)+");'><img class='icon' src='img/edit1.png' alt='Modificar Icon' title='Editar'></button></td>";
                //tbl_row += "<td><button onClick='borrarUsuario("+JSON.stringify(v.Id_usuario)+");'><img class='icon' src='img/borrar.png' alt='Borrar Icon' title='Borrar'></button></td>";
                
                tbl_row += "</tr>"


                // card += "<div class='card'><img src='img/productos/" + foto + " '><h2>" + nombre + "</h2><button onClick='openModalProducto("+JSON.stringify(v)+")'><img class='icono' src='img/iconos/masInfo.jpg'></button></div>";
                
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

    $("#COMPRAR").on("click", function () {
        hacerPedido(miUsuario.Id_producto);
    });

    

} //fin function open modal


function hacerPedido(productoElegido) {

    console.log(productoElegido);

    $.ajax({
        url: 'php/hacerPedido.php', // archivo php que tratara los datos
        type: 'POST', // forma de enviar los datos
        dataType: 'json', // tipo de datos que se envían
        data: { "productoElegido": productoElegido},
        // funcion que se ejecuta cuando ha funcionado la llamada ajax correctamente
        success: function (result) {
            // console.log("hola2");
            // console.log(result.consulta);
            // console.log(result.resultado);
            // console.log(result.error);

            // var card = "";
            // //recorre el array que recogemos del php en result.query           
            // //recorre todos los valores del array y los coloca en un formato
            // $.each(result.consulta, function (k, v) {
            //     //console.log(v.Id);
            //     var id = 0;
            //     var nombre = "";
            //     var descripcion = "";
            //     var precio = "";
            //     var foto = "";

            //     id = v.Id_producto;
            //     nombre = v.Nombre;
            //     descripcion = v.Descripcion;
            //     precio = v.Precio;
            //     foto = v.Foto;

            //     card += "<div class='card'><img src='img/productos/" + foto + " '><h2>" + nombre + "</h2><button onClick='openModalProducto(" + JSON.stringify(v) + ")'><img class='icono' src='img/iconos/masInfo.jpg'></button></div>";

            // })

            // $("#pintacards").html(card);

        },
        // funcion ejecutada si ajax tiene un error
        error: function (result) {
            console.log("Error de Ajax.");
            console.error(result.error);
        }
        // el resultado de la función queda guardado en la variable result

    });

}



