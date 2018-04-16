<?php

function checkTitulo($estacion,$Titulo){     
    echo $estacion;
    echo "<br>";
    echo $Titulo;
    echo "<br>";
    $NOduplicacion = false; //inicializamos con 0/false   
    
    //buscar archivos en la carpeta de recetas
    $carpeta = "../fichas/REcetasTEXTO/".$estacion; //damos el nombre de la carpeta donde estan los archivos
    $ArrayCarpetaRecetas  = scandir($carpeta);//scaneamos la carpeta para leer sus archivos/ficheros y los guardamos en un array
    print_r ($ArrayCarpetaRecetas);   
    echo "<br>"; 
    //echo "<b>Estoy aquí 1.</b><br><br>";
    
    if ($ArrayCarpetaRecetas!="." && $ArrayCarpetaRecetas!="..") { //eliminamos el . .. del principio del array 

        for($i=0; $i<count($ArrayCarpetaRecetas); $i++){ //recorremos el array
            //echo "<b>Archivos Recetas: </b><br>"; 
            //echo $ArrayCarpetaRecetas[$i]; // RECETAS CON EXTENCION
            //echo "<br>";

            $stringRecetas= implode(" ",$ArrayCarpetaRecetas); //convert array to string
            //echo $stringRecetas;

            $stringRecetasSinExtencion=substr($stringRecetas, 4); //eliminamos el .txt extencion
            echo "<b><br>Hemos convertido el array to one single string:</b><br><br>";
            echo $stringRecetasSinExtencion;
            
            echo "<b><br><br>Hemos convertido the new string to array sin las extenciones:</b><br><br>";
            $arrayRecetasSinExtencion = explode(".txt", $stringRecetasSinExtencion); //convert string to array sin extenciones
            print_r( $arrayRecetasSinExtencion);


            for($i=0; $i<count($arrayRecetasSinExtencion); $i++){
                //echo $arrayRecetasSinExtencion[$i];
                echo "<br>hola";

                $claveElementoIdentico = in_array($Titulo, $arrayRecetasSinExtencion, true);
                echo $claveElementoIdentico;
                echo "<br>adios";


                if($arrayRecetasSinExtencion[$i]!=$Titulo){
                    echo "<br>Que???";
                    $NOduplicacion = true;
                    echo $NOduplicacion;
                }
                return $NOduplicacion;
            }
        } //fin del for
    }//fin del IF de quita . ..   
}//fin de function


 
//$estacion = "otono";
//$Titulo="Ensalada Mediterránea"; 
// $Titulo =$_POST["Titulo"];
// $resultado = checkTitulo($estacion,$Titulo);
// $resultado=0;
// echo $resultado;
// if ($resultado==1) {
//     $controlTitulo = "<br><br>El TILULO es CORRECTO, no hay peligro de duplicación.";
// } else {
//     $controlTitulo = "ERROR! Este TITULO YA EXISTE! Da otro titulo!";
// }

// echo $controlTitulo;

?>



