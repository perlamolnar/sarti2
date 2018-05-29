
    <?php    
    $ID = $_POST['id'];         
             
    if ($ID != 0) {    
    
        $conexion = mysqli_connect ('localhost', 'root', '', 'ejercicios') or die ("No se puede conectar con el servidor".mysqli_error($conexion));

        $sql="DELETE FROM productos WHERE Id_producto=$ID";

        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

        mysqli_close($conexion);

        $result="OK";
    }
        
    else{
        $result= "ERROR";        
    } 

    //returns data as JSON format
    echo $result;

    ?>



