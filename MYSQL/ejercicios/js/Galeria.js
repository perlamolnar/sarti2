
var files=null;

$(document).ready(function () {
    $("#UploadNewItem").on("click", openModalUpload);
    $("#GardarNewItem").on("click", GardarNewItem);    
});



function openModalUpload() {
    $('#ModalUploadNew').modal('show');   //abrir el modal  
}

function GardarNewItem() {
    var formData = new FormData();

    //Form data
    var form_data = $('#formUploadNewFoto').serializeArray();
    $.each(form_data, function (key, input) {        
        formData.append(input.name, input.value);
    });

    //File data
    //alert(file_data);
    formData.append('file', $('#Foto1')[0].files[0]);
    console.log($('#Foto1')[0].files[0]);
    
    // if (files != null) {
    //      $.each(files, function (key, value) {
    //          console.log(files);
    //          formData.append(key, value);
    // });
    // }
  
    console.log(formData);

    $.ajax({
        type: 'POST',
        url: 'php/uploadFotoGaleria.php',
        data: formData,
        contentType: false, // tell jQuery not to set contentType
        processData: false, // tell jQuery not to process the data
        success: function (data) {  //data es el echo que el php devuelve
            //alert(data);
            if (data = "ok") {
                $('#myModal').modal('hide');
                window.location.reload();
                //alert("OK. Todo ha ido bien.");  
            } else {
                //alert("Error en la consulta.");
                $('.ErrorMSG').html('<span style="color:red;">Error en la consulta. Some problem occurred, please try again.</span>');
            }
        }, //fin de success         
        error: function (e) {
            console.log(e);
            console.log("NO HAY _POST");
        }
    }); //fin de ajax

}




function borrarEnFotoGaleria(Id) {
    //console.log(Id);
    $.ajax({
        type: 'POST',
        url: 'php/deleteFotoGaleria.php',
        data: { id: Id },
        success: function (data) {
            console.log(data);
            window.location.reload();
            //alert("Producto borrado correctamente.");
        },
        error: function (e) {  // cuando no entiende lo que php devuelve. eg.no hay echo, hay mas echos que uno, etc.
            console.log(e);
            console.log("Error con Ajax!");
        }
    }); //fin de ajax
} //fin function editar



function openModalFotoGaleria(Id, Titulo, Foto, Activ) {
    //console.log(Nombre);
    $('#Id_imagen').val(Id);
    $('#Titulo').val(Titulo);
    //$('#Activ').val(Activ); 
    //console.log(Activ);
    if (Activ == "on") {
        $('#Activ').attr('checked', true);
        //console.log(Activ);
    } else {
        //console.log("xxx");

        $('#Activ').attr('checked', false);
    }
    $('#ShowFoto').attr('src', "img/" + Foto);
    $('#FotoActual').val(Foto);

    $('#ModalEditFotoGaleria').modal('show');   //abrir el modal

} //fin function 


function checkbox() {
    var checkBox = document.getElementById("Activ");
    var text = document.getElementById("text");
    if (checkBox.checked == true) {
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}

function editFotoGaleria() {

    var formData = new FormData();

    //Form data
    var form_data = $('#formModificarGaleria').serializeArray();
    $.each(form_data, function (key, input) {
        formData.append(input.name, input.value);
    });

    //File data
    //alert(file_data);
    formData.append('file', $('#Foto')[0].files[0]);

    $.ajax({
        type: 'POST',
        url: 'php/editFotoGaleria.php',
        data: formData,
        contentType: false, // tell jQuery not to set contentType
        processData: false, // tell jQuery not to process the data
        success: function (data) {  //data es el echo que el php devuelve
            //alert(data);
            if (data = "ok") {
                $('#ModalEditFotoGaleria').modal('hide');
                window.location.reload();
                //alert("OK. Todo ha ido bien.");  
            } else {
                //alert("Error en la consulta.");
                $('.ErrorMSG').html('<span style="color:red;">Error en la consulta. Some problem occurred, please try again.</span>');
            }
        }, //fin de success         
        error: function (e) {
            console.log(e);
            console.log("NO HAY _POST");
        }
    }); //fin de ajax
} //fin function editar

