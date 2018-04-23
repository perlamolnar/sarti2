<?php 
 
function initCfg(){
    
    $cfg['username']="";    //si no hay username
    $cfg['password']="";    //si no hay password    
    
    $cfg['saved_admin']="Perla";
    $cfg['saved_pwAdmin']="123";    
    $cfg['saved_hashAdmin']=md5($cfg['saved_pwAdmin']);
    
    $cfg['saved_user']="Marc";
    $cfg['saved_pwUser']="987";    
    $cfg['saved_hashUser']=md5($cfg['saved_pwUser']);
    
	$cfg['tipo']=$_SESSION['tipo']="none";

	return $cfg; //devuelve: ['username'], ['password']
}

function checkUser($username,$password){
    if($username==$_SESSION ['cfg']['saved_admin'] && md5($password)==$_SESSION ['cfg']['saved_hashAdmin']){
    //if($username=="Perla" && $password=="123") {   
        $_SESSION['tipo']="admin";        
		$_SESSION['user']="$username";
		$_SESSION['hash']=md5($password); 

	}
    elseif($username==$_SESSION['cfg']['saved_user'] && $_SESSION['cfg']['saved_hashUser']==md5($password))
    //elseif($username=="Marc" && $password=="987")
	{
        $_SESSION['tipo']="user";        
		$_SESSION['user']="$username";
		$_SESSION['hash']=md5($password); 
        
	}else{
		$_SESSION['tipo']="none";
		return false;
	}
	return true;
}

function getFiles($dir){
		// Sort in ascending order - this is default
		$files = scandir($dir);
		unset($files[0]);
		unset($files[1]);		
		return $files;
}

function ListRelatos(){
        $directorio = 'publicContent/primavera'; //damos el nombre de la carpeta donde estan los archivos para listar
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
        $carpeta = "publicContent/".$estacion; //damos el nombre de la carpeta donde estan los archivos
        
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
    

?>