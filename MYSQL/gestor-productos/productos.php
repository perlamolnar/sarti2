<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<?php include("conexion.php");?>
<?php include("header-nav.php");?>

<div class="container">    
  
<table class="table table-striped">
    <thead>
      <tr>
        <th>Matricula</th>
        <th>Fabricante</th>
        <th>Modelo</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

<?php 


$sql="SELECT * FROM avion";

$res = mysqli_query($conecion,$sql);

$nfilas = mysqli_num_rows($res);

if($nfilas>0){

  while ($fila = mysqli_fetch_assoc($res)) {
    $mat = $fila["Matricula"];
    $id = $fila["IdAvion"];
?>

      <tr>
        <td  onclick="window.location.href='inf_producto.php?id=<?= $fila["IdAvion"]?>'"><?= $fila["Matricula"];?></td>
        <td  onclick="window.location.href='inf_producto.php?id=<?= $fila["IdAvion"]?>'"><?= $fila["Fabricante"];?></td>
        <td  onclick="window.location.href='inf_producto.php?id=<?= $fila["IdAvion"]?>'"><?= $fila["Modelo"];?></td>
        <td><a href="#" onclick="showModal('<?= $mat ?>','<?= $id?>')"><span class="glyphicon glyphicon-pencil"></span></a></td>
      </tr>
<?php 
  }
}else{?>
      <tr><td colspan="3">No hay ningun producto registrado</td></tr>
<?php }?>
    </tbody>
  </table>

</div><br><br>

<?php 
mysqli_close($conecion);?>
<?php include("footer.php");?>
<script>
$(document).ready(function(){
   
        $("#productos").addClass("active");
   
});

function showModal(matricula,id_producto){
  $("#matricula").val(matricula);
  $("#id_producto").val(id_producto);
  $("#myModal").modal();
}

function updateProducto(){

  var id = $("#id_producto").val();
  var matricula = $("#matricula").val();
  var fabricante = $("#fabricante").val();
  var formData = new FormData();

//Form data
var form_data = $('#myForm').serializeArray();
$.each(form_data, function (key, input) {
    formData.append(input.name, input.value);
});

formData.append('file', $('#autonomia_vuelo')[0].files[0]);

  $.ajax({
            type:'POST',
            url:'editar_producto.php',
            data:formData,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                alert(msg);
                if(msg == 'ok')
                  {window.location.reload();
                   $("#myModal").modal('hide');
                   
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });

}


</script>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" id="myForm">
            <p class="statusMsg"></p>
          <div class="form-group">
            <label for="matricula">MAtricula</label>
            <input type="text" class="form-control" id="matricula" name="matricula" />
          </div>
          <div class="form-group">
            <label for="fabricante">Fabricante</label>
            <input type="text" class="form-control" id="fabricante"/>
          </div>
          <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" id="modelo"/>
          </div>
          <div class="form-group">
            <label for="capacidad">Capacidad</label>
            <input type="text" class="form-control" id="capacidad"/>
          </div>
          <div class="form-group">
            <label for="autonomia_vuelo">Autonomia de Vuelo</label>
            <input type="file" id="autonomia_vuelo"/>
          </div>
          <input type="hidden" class="form-control" id="id_producto" name="id_producto" value="" />
        </form>
        </div>
         <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="updateProducto()">UPDATE</button>
            </div>
      </div>
      
    </div>
  </div>
</body>
</html>
