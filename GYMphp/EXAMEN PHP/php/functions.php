<?php 
    function CheckAge($Edad){
        //echo $Edad;
        $error=2; //no es un numero
        //echo is_nan($Edad);

        if (is_numeric($Edad)) {
            if ($Edad>=18) {
               $error = 0; //es major de 18años
            }
            else {
                $error = 1; //es menor de 18años
            }   
        } 
        else {
            $error=2; //no es un numero
        }
        
        return $error;
                
    }
    
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

    function checkTitulo($estacion,$Titulo){     
        // echo $estacion;
        // echo "<br>";
        // echo $Titulo;
        // echo "<br>";     
        
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
   
    
   

?>