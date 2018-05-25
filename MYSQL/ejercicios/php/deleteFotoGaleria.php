
    <?php    
    $ID = $_POST['id'];         
             
    if ($ID != 0) {    
    
        $conexion = mysqli_connect ('localhost', 'root', 'perla', 'ejercicios') or die ("No se puede conectar con el servidor".mysqli_error($conexion));

        $sql="DELETE FROM galeria WHERE Id_imagen=$ID";

        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

        mysqli_close($conexion);

        $result="OK";
    }
        
    else{
        $result= "ERROR";        
    } 

    
    echo $result; //returns data a la function en javascript.
    //SOLO PODEMOS TENER UN ECHO, NO MAS!!!! POR QUE NO VA A ENTENDER QUE ES EL MENSAJE FINAL

    ?>



