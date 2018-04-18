<?php

function checkImage($Foto){       
    $resultado = 0; //inicializamos con false 
    $Foto = strtolower($Foto);
    // echo $Foto;
    //  echo "<br>";

    //$extNuevaFoto = end(explode(".",$Foto ));
    $extNuevaFoto = substr($Foto,strripos($Foto,".")+1);
    
    switch ($extNuevaFoto) {
            case 'jpg':
            $resultado=1;
            break;

            case 'jpeg':
            $resultado=1;
            break;

            case 'png':
            $resultado=1;
            break;

            case 'bmp':
            $resultado=1;
            break;        
    }
    
    return $resultado;
    
}


// $Receta =$_FILES["Receta"];
// $resultado = esTXT($Receta);
// //$resultado=true;
// //echo $resultado;
// if ($resultado==0) {
//     $mensaje = "La receta tiene la extención correcta.";
// } else {
//     $mensaje = "ERROR! La extencion de tu archivo de receta NO es .txt";
// }

// echo $mensaje;

?>

