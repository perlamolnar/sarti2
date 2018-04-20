<?php 
    function initCfg(){

        $cfg['user']="";
        $cfg['pass']="";
        $cfg['saved_user']="Perla";
        $cfg['saved_pass']="123";
        $cfg['saved_user']="Perla";
        $cfg['saved_pass']="123";
        
        return $cfg; //devuelve: ['user'], ['pass']
    }

    function passwordControl($userEscrito,$pwEscrito,$userGardado,$pwGuardada){

        $userHASH=md5($userGardado);        
        $pwHASH=md5($pwGuardada);

        $userEscritoHASH=md5($userEscrito);
        $pwEscritoHASH=md5($pwEscrito);

        if($userHASH == $userEscritoHASH && $pwHASH == $pwEscritoHASH){
            return true;
        }
            return false;
    }

    function ListRelatos(){
        $directorio = 'fichas/RecetasTEXTO/primavera'; //damos el nombre de la carpeta donde estan los archivos para listar
        $ficheros  = scandir($directorio); //scaneamos la carpeta para leer sus archivos/ficheros y los guardamos en un array
        return $ficheros;
    }

    function GetContenido($ficheros){        

        foreach ($ficheros as $nombreFichero) {    //recorremos el array para ver sus elementos: expresión_array as $valor       
                
            if ($nombreFichero!="." && $nombreFichero!="..") {           
                echo substr($nombreFichero, 0, -4)."<a onclick=eliminar() ><i class=\"fa fa-remove\" style=\"font-size:18px; color:red\"></i></a><br>"; //pintar lista de recetas en la misma pagina
                //echo "<img src=\"img/".substr($nombreFichero, 0, -4).".jpg\"></a><br>";
            }
        }
        
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
      
        //buscar archivos en la carpeta de recetas
        $carpeta = "fichas/REcetasTEXTO/".$estacion; //damos el nombre de la carpeta donde estan los archivos
        
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

    function eliminar($file){
        //primero mirar si file existe
        //The file_exists() function checks whether or not a file or directory exists.
        
        file_exists(path);


        // y despues eliminar file
        unlink($file);
        //o delete($file);
        echo ("Deleted $file");
    }
    function Galeria(){
        include("galeria.php");
    }
        


   
    
   

?>