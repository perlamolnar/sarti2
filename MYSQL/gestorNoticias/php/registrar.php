<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        //session_start();
        //include('../php/functions.php');   
    
        $Nombre=$_POST["Nombre"]; 
        $Telefono=$_POST["Telefono"];       
        $Direccion=$_POST["Direccion"]; 
        $Email=$_POST["Email"]; 
        $Username= $_POST['Username'];
        $Password= md5($_POST['Password']);

        //$conexion = mysqli_connect ('localhost', 'root', '', 'gestornoticias') or die ("No se puede conectar con el servidor".mysqli_error($conexion));
        $conexion = connectBD(); 

        $sql="INSERT INTO usuarios (Nombre, Telefono, Direccion, Email, Username, Password) VALUES ('$Nombre', '$Telefono', '$Direccion', '$Email', '$Username','$Password')";

        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

        if ($consulta) {
            echo "<h1>Los datos estan enviados correctamente</h1>
                    <a href=\"../index.php\">VOLVER</a>";
        } else {
           echo "<h1>Error al registrar usuario. Intenta registrar de nuevo.</h1>
                    <a href=\"../index.php\">VOLVER</a>";
        }       

        mysqli_close($conexion);

    

    ?>

</body>
</html>


