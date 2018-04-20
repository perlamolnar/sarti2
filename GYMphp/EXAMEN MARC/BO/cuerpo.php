<div id="cuerpo">

<?php 

if (isset($TIPO)) {
    //mostrar lo comun

    if($TIPO=="admin"){
        //has una cosa, añadir parte de admin

    }
    elseif ($TIPO=="user") {
        //solo muestra relatos        
      
    }else{
        //mostrar formulario
        include('login.php');
    }
 
    include('subirRecetas');
    include('subirProductos.php');
?> 

</div>