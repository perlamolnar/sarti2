<?php

function checkTXT($Receta){       
    $resultado = 0; //inicializamos con false 
    $Receta = strtolower($Receta);
   // echo $Receta;
  //  echo "<br>";

    $extNuevaReceta = substr("$Receta", -4); 
    $extFormaCorrecta = substr("formaCorrecta.txt", -4); 

    if($extFormaCorrecta != $extNuevaReceta){
        $resultado = 1;
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



