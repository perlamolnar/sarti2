
    <?php    
    $ID = $_POST['id'];         
             
    if ($ID != 0) { 
    
        $conexion = mysqli_connect ('localhost', 'root', '', 'ejercicios') or die ("No se puede conectar con el servidor".mysqli_error($conexion));

        $sql1="SELECT * FROM galeria WHERE Id_imagen='$ID'";
        //echo $sql1;

        $consulta1 = mysqli_query($conexion, $sql1 )or die ("Fallo en la consulta".mysqli_error($conexion));

        $fila=mysqli_fetch_assoc($consulta1);                 
        $file = $fila['Foto'];        /* Nombre de tu imagen */  
            //echo $file;

        $ruta = "../img/"; /*Ruta local donde se almacenan tu imagen*/ 

        unlink($ruta.$file);  /* Eliminas tu Imagen*/

        $sql2="DELETE FROM galeria WHERE Id_imagen=$ID";

        $consulta2 = mysqli_query($conexion, $sql2 )or die ("Fallo en la consulta".mysqli_error($conexion));

        mysqli_close($conexion);

        $result="OK";
    }
        
    else{
        $result= "ERROR";        
    } 

    
    echo $result; //returns data a la function en javascript.
    //SOLO PODEMOS TENER UN ECHO, NO MAS!!!! POR QUE NO VA A ENTENDER QUE ES EL MENSAJE FINAL

    ?>



