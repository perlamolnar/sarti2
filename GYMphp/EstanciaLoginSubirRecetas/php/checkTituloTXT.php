<?php

function checkTitulo($estacion,$Titulo){     
    echo $estacion;
    echo "<br>";
    echo $Titulo;
    echo "<br>";
    $NOduplicacion = false; //inicializamos con 0/false   
    
    //buscar archivos en la carpeta de recetas
    $carpeta = "../fichas/REcetasTEXTO/".$estacion; //damos el nombre de la carpeta donde estan los archivos
    
    $file = $carpeta."/".$Titulo.".txt";
    //echo $file;
    if (file_exists($file)) {
        //echo "file existe";
       return 0;
    }else{
        //echo "file no existe";
        return 1;
    }  
}//fin de function


//$estacion = "otono";
//$Titulo="Ensalada Vegetarianhhha"; 
$Titulo =$_POST["Titulo"];
$resultado = checkTitulo($estacion,$Titulo);

if ($resultado==1) {
    $controlTitulo = "<br><br>El TILULO es CORRECTO, no hay peligro de duplicación.";
} else {
    $controlTitulo = "ERROR! Este TITULO YA EXISTE! Da otro titulo!";
}

echo $controlTitulo;

?>

