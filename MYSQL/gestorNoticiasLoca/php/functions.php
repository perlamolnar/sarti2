<?php 

 
function initCfg(){
    
    $cfg['username']="";    //si no hay username
    $cfg['password']="";    //si no hay password     
    $cfg['tipo']=$_SESSION['tipo']="none";
    $cfg['server']="localhost";
    $cfg['userBD']="root";
    $cfg['passwordBD']="perla";  //perla en el curso
    $cfg['BD']="gestornoticias";
	return $cfg; //devuelve: ['username'], ['password']
}

function connectBD(){
   
    $server=$_SESSION ['cfg']['server'];
    $user=$_SESSION ['cfg']['userBD'];
    $pw=$_SESSION ['cfg']['passwordBD'];
    $basedatos=$_SESSION ['cfg']['BD'];
    //echo $server;
    $conexion = mysqli_connect ($server, $user, $pw, $basedatos) or die ("No se puede conectar con el servidor".mysqli_error($conexion));
    //$conexion = mysqli_connect ('localhost', 'root', 'perla', 'gestornoticias') or die ("No se puede conectar con el servidor".mysqli_error($conexion));
    return $conexion;

}


function checkUser($username,$password){
    $salida=true;
    
    $conexion= connectBD();

    $sql="SELECT * FROM usuarios WHERE Username='$username'";
    //echo $sql;

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

    $CheckLogin=mysqli_num_rows($consulta); //devuelve 1 row si exsiste el usuario y no devuelve nada si no existe

    if ($CheckLogin==0) {
        echo "Usuario no existe.";
        $salida = false;
    } else {
        $fila=mysqli_fetch_assoc($consulta);
        $pw=$fila['Password'];
        $tipo=$fila['Tipo'];
        $Id_usuario=$fila['Id_usuario'];

        if ($pw==md5($password)) {
            $_SESSION['tipo']=$tipo;        
            $_SESSION['user']=$username;
            $_SESSION['Id_usuario']=$Id_usuario;

            	    
        } else {
           echo "La contraseña no es corrrecta.";
           $salida = false;

        }
              
    }  
    

    mysqli_close($conexion);
    
	return $salida;
}

//Create random string 
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    print_r($randomString);
    return $randomString;
} 
       



function getFiles($dir){
		// Sort in ascending order - this is default
		$files = scandir($dir);
		unset($files[0]);
		unset($files[1]);		
		return $files;
}

function uploadFiles($seccio){
	if(isset($_FILES['fileToUpload']['tmp_name'])){

		if ((is_uploaded_file($_FILES['fileToUpload']['tmp_name'])&&(is_uploaded_file($_FILES['imageToUpload']['tmp_name'])))){
			if(isset($_POST['tipus'])){
				$tipus=$_POST['tipus'];
			}
			$nombreDirectorio= "publicContent/".$seccio."/";
			$nombreFichero= $_FILES['fileToUpload']['name'];
			move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$nombreDirectorio. $nombreFichero);

			$nombreDirectorio= "img/".$seccio."/";
			$filename = preg_replace('/\\.[^.\\s]{3,4}$/', '', $_FILES['fileToUpload']['name']);
			$nombreFichero= $filename.".jpg";
			move_uploaded_file($_FILES['imageToUpload']['tmp_name'],$nombreDirectorio. $nombreFichero);
			return true;
		}
		else{
			return false;
		}
	}
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

function eliminar($filepath, $filename){
        //echo $filename;
        //primero mirar si file existe
        //The file_exists() function checks whether or not a file or directory exists.
        file_exists($filepath);

        // y despues eliminar file
        unlink($filename);
        //o delete($file);
        echo ("Deleted $filename");
}
    

?>