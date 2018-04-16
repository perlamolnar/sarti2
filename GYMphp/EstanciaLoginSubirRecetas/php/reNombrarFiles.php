<?php

function reNombrarFiles($Titulo,$Receta,$Foto){       
    $resultado = 0; //inicializamos con false 
    $Receta = strtolower($Receta);
    echo $Receta;
    echo "<br>";

    $extNuevaReceta = substr("$Receta", -4); 
    $extFormaCorrecta = substr("formaCorrecta.txt", -4); 

    if($extFormaCorrecta != $extNuevaReceta){
        $resultado = 1;
    }
    return $resultado;
}

// $Titulo=$_POST["Titulo"];
// $Foto =$_FILES["Foto"];
// $Receta =$_FILES["Receta"];

$Titulo= "Gulyas";
$Foto = "DSC08074.JPG";
$Receta ="NUEVA RECETA.txt";

$resultadoReNombrarFiles = reNombrarFiles($Titulo,$Receta,$Foto);
if ($reNombrarFiles==0) {
    $mensajeReNombrarFiles = "Unificar los nombres ha sido con EXITO";
    $ERRORFATAL="0";
} else {
    $mensajeReNombrarFiles = "ERROR al unificar los nombres de los archivos.";
    $ERRORFATAL="1";
}

echo $mensajeReNombrarFiles;

?>



