function guardar(event) {


    if (confirm("Estas seguro/a que quieres modificar el articulo?")) {
        console.log("Has confirmado el submit");
       

        $(event.data.padre.children()[0]).text($("#identificador").val());
        $(event.data.padre.children()[1]).text($("#titulo").val());
        $(event.data.padre.children()[2]).text($("#articulo").val());

        $("#ModalEditarArticulo").modal('hide');

    } else {
        console.log("Form no ha sido enviado.")
        //return false;            
    }        
}



function editar() {

    var tableRow = $(this).closest('td').siblings().find().prevObject;
    console.log(tableRow);


    var idArticulo = $(this).closest('td').siblings().find().prevObject[0].textContent;
    console.log(idArticulo);
    $("#identificador").val(idArticulo);

    var tituloArticulo = $(this).closest('td').siblings().find().prevObject[1].textContent;
    console.log(tituloArticulo);
    $("#titulo").val(tituloArticulo);

    var textArticulo = $(this).closest('td').siblings().find().prevObject[2].textContent;

    $("#articulo").val(textArticulo);

    //
    //despues de los cambios del articulo guardamos las modificaciones.
    //submit form y pintar modificacion en html

    $("#BtnSaveChanges").off();
    $("#BtnSaveChanges").on("click", { padre: $(this).parent().parent() }, guardar);


    
    $('#ModalEditarArticulo').modal('show');


    $('#close').click(function () {
        $("#ModalEditarArticulo").modal('hide');
    });

}



$(document).ready(function () {
    //LOGIN  
    $("#enviar").on("click", aviso);  
    $("#aviso").hide();
    $('#aviso').on('close.bs.alert', function () {
        //hemos eliminado la funcion de "dissmiss alert y data-dismiss" en el html
        $(this).hide();
        return false;
    });


    //EDITAR ARTICULO
    //captar el click, identificar sibling atraves el id de boton, pintar articulo en formulario
 
    $(".editar").click(editar); //fin de editar function


    //CREAR NUEVO ARTICULO*********************
    $("#BtnAddArticulo").on("click", addArticulo);

    function addArticulo () {
        var identificador = $("#identificadorNew").val();
            console.log(identificador);
        var titulo = $("#tituloNew").val();
            console.log(titulo);
        var articulo = $("#articuloNew").val();
            console.log(articulo);

        $("tbody").append(
        '<tr>            <td>'+identificador+'</td>            <td>'+titulo+'</td>            <td>'+articulo+'</td>   <td><button  type="button" class="btn btn-primary editar" data-toggle="modal" ata-target="#ModalEditarArticulo">                Editar</button></td>   </tr>');
        $(".editar").click(editar); //fin de editar function
                  
        //$("#nuevoArticulo").submit();
        
    }//****************end of crear nuevo artuculo *************

                 
   
});//********end of ready function

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

