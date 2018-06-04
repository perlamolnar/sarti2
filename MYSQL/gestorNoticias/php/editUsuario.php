<?php
    $ID = $_POST['Id_usuario'];
    $Nombre= $_POST['Nombre'];
    $Email=$_POST['Email'];
    $Telefono= $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $Username = $_POST['Username'];
    $Tipo = $_POST['Tipo'];
    
      
// if ($_POST){ // comprueba si se han recibido datos con POST
		
//     //subida de archivos
//     if ($_FILES) {
//         $files = array();        
//         $uploadDir="../img/"; 		
// 		//direccion a donde hacemos el upload del imagen	
		
// 		$nombreFoto= $Titulo.".jpg"; //damos el mismo nombre que el nombre del producto
//         $nombreCompleto= $uploadDir. $nombreFoto;
//         //echo $nombreCompleto;

//         foreach($_FILES as $file){	
//         //move_upload_file hace subir el archivo 
//         //si ha ido bien el upload:	
//         //echo $file;
// 		//echo $file['error'];

//             if (move_uploaded_file($file['tmp_name'], $nombreCompleto))
//             {//para la respuesta del Json:
//                 $files[]=$uploadDir.$file['name'];
//                 echo $file;
//             }			
//             else {
//                 $files[]="No se ha subido archivo.";
//             }

//         }//fin de foreach

//         $nombreFoto = $file['name'];    //??????
//     }
//     else {	
//         //echo "NO HAY FILES";
//         $nombreFoto = $_POST['Foto1'];	//mantener nombre de foto actual		
//     }

    

    //$conexion = mysqli_connect ('localhost', 'root', '', 'gestornoticias') or die ("No se puede conectar con el servidor".mysqli_error($conexion));  
	$conexion = connectBD(); 
	
    $sql="UPDATE usuarios SET Nombre='$Nombre', Email='$Email', Telefono='$Telefono', Direccion='$Direccion', Username='$Username', Tipo='$Tipo' WHERE Id_usuario=$ID";
    //echo $sql;

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

        if ($consulta) {
            echo "ok";
        } else {
            echo "error";
        }

    mysqli_close($conexion);

    //}     //fin del "if ($_POST)"

else {
    echo "NO HAY _POST";
}  
 


?>