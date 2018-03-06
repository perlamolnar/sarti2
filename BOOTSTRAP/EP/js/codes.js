$(document).ready(function () {

    document.querySelector(".card-flip").classList.toggle("flip");

    /* 
     * Holder.js for demo image
     * Just for demo purpose
     */
    Holder.addTheme('gray', {
        bg: '#777',
        fg: 'rgba(255,255,255,.75)',
        font: 'Helvetica',
        fontweight: 'normal'
    });



    //LOGIN  
    $("#enviar").on("click", aviso);
    $("#aviso").hide();
    $('#aviso').on('close.bs.alert', function () {
        //hemos eliminado la funcion de "dissmiss alert y data-dismiss" en el html
        $(this).hide();
        return false;
    });

    //EDITAR ARTICULO
    $(".editar").click(editar);

    
    //NUEVO ARTICULO
    $('#ModalNuevoArticulo').on('show.bs.modal', function (e) { 
        //e is the short var reference for event object which will be passed to event handlers
        
        //creamos el identificador automaticamente: 
        //buscamos last id:
        var lastId = $( "tr:last")["0"].cells["0"].firstChild;
        console.log(lastId);
        //convertir string to a number:
        lastId = parseInt(lastId);
        console.log(lastId);
       
        //añadir 1 para crear next id:
        $("#identificadorNew").text(++lastId).prop('readonly', true);
        
        //para que el modulo abre siempre vacio:
        $("#tituloNew").val("");
        $("#articuloNew").val("");

    });
      
    $("#BtnAddArticulo").on("click", addArticulo); //dentro del modal clickamos en el boton "Crear Articulo" para llamar la funcion

    function addArticulo() {

        var identificador = $("#identificadorNew").val();
        console.log(identificador);
        var titulo = $("#tituloNew").val();
        console.log(titulo);
        var articulo = $("#articuloNew").val();
        console.log(articulo);

        $("tbody").append(
            '<tr><td>' + identificador + '</td><td>' + titulo + '</td><td>' + articulo + '</td><td><button type="button" class="btn btn-primary editar" data-toggle="modal" ata-target="#ModalEditarArticulo">Editar</button></td></tr>');

        $(".editar").click(editar);

        $("#ModalNuevoArticulo").modal('hide');

        //$("#nuevoArticulo").submit();

    }//end of crear nuevo artuculo

});//********end of ready function





function editar() {
    //Recogemos los textos que estan en el html y los pintamos en el modal:

    //var tableRow = $(this).closest('td').siblings().find().prevObject;
    //console.log(tableRow);    
    
    var idArticulo = $(this).closest('td').siblings().find().prevObject[0].textContent;
    //console.log($(this)); //el "this" es el boton ediatar
    //console.log(idArticulo);
    $("#identificador").val(idArticulo).prop('readonly', true); //el identificador no se puede cambiar

    var tituloArticulo = $(this).closest('td').siblings().find().prevObject[1].textContent;
    //console.log(tituloArticulo);
    $("#titulo").val(tituloArticulo);

    var textArticulo = $(this).closest('td').siblings().find().prevObject[2].textContent;
    //console.log(textArticulo);
    $("#articulo").val(textArticulo);
    
    
 
    $("#BtnSaveChanges").off();
    //despues de los cambios del articulo, guardamos las modificaciones (id,titulo,articulo):
    $("#BtnSaveChanges").on("click", { padre: $(this).parent().parent() }, guardarModificacion);
    //console.log($(this)); //el "this" es el boton ediatar
    //console.log($(this).parent().parent()); // esto es el "padre": row entero (id, titulo, articulo)
    

    $('#ModalEditarArticulo').modal('show');
    $('#close').click(function () {
        $("#ModalEditarArticulo").modal('hide');
    });

}

function guardarModificacion(event) {

    if (confirm("Estas seguro/a que quieres modificar el articulo?")) {
        console.log("Has confirmado el submit");  
        
        //Los datos recogidos del row seran replacados con el texto/valor del formulario en el modal:
        $(event.data.padre.children()[0]).text($("#identificador").val());
        console.log();
        $(event.data.padre.children()[1]).text($("#titulo").val());
        $(event.data.padre.children()[2]).text($("#articulo").val());

        $("#ModalEditarArticulo").modal('hide');

    } else {
        console.log("Form no ha sido enviado.")
        //return false;            
    }        
}

function aviso() {
    var usuario = $("#username").val();
    var password = $("#password").val();
    console.log(usuario);
    console.log(password);

    if (usuario == "" || password == "") {
        $("#aviso").show();

    } else {
        $('form').submit();
    }
    console.log(usuario);
    console.log(password);
}



    






























// $(document).ready(function () {
//     $("#aviso").hide();
//     $("#enviar").on("click", aviso);
//     // $("#bclosewarn").on("click", function(){

//     // });

//     $('#aviso').on('close.bs.alert', function () {
//         $("#aviso").hide();

//         return false;
//     })

// });

// function aviso() {
//     var usuario = $("#username").val();
//     var password = $("#password").val();
//     console.log(usuario);
//     console.log(password);

//     if (usuario == "" || password =="") {        
//         $("#aviso").show();

//     } else {
//         $('form').submit();        
//     }
//     console.log(usuario);
//     console.log(password);
// }

