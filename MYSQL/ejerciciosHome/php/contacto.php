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
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Edad = $_POST['Edad'];
        $Email = $_POST['Email'];
        $Username= $_POST['Username'];
        $Password= md5($_POST['Password']);

        $conexion = mysqli_connect ('localhost', 'root', '', 'ejercicios') or die ("No se puede conectar con el servidor".mysqli_error($conexion));

        $sql="INSERT INTO contacto (Nombre, Apellido, Edad, Email, Username, Password) VALUES ('$Nombre', '$Apellido', '$Edad', '$Email', '$Username','$Password')";

        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

        echo "<h1>Los datos estan enviados correctamente.</h1>";

        mysqli_close($conexion);

    ?>

</body>
</html>


