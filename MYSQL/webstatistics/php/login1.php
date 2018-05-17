<?php

$username= $_POST['username'];
$password= $_POST['password]';

$conexion = mysqli_connect ('localhost', 'root', 'perla', 'empresa') or die ("No se puede conectar con el servidor".mysqli_error($conexion));
    
$sql="SELECT * FROM login WHERE username='$username' AND password='$password'";

$consulta= mysqli_query($conexion, $sql);

$nfilas = mysqli_num_rows($consulta);

mysqli_close($conexion);

if ($nfilas>0) {
    $fila=mysqli_fetch_assoc($consulta);       
              
            $_SESSION['user']=$fila["username"];
            $_SESSION['tipo']=$fila["tipo"]; 

        header("Location: home.php");
    
} else {
   header("Location: index.php?er=1");
   //o poner una variable de error
}



?>