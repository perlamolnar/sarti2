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
        $Descripcion= $_POST['Descripcion'];
        $Precio= $_POST['Precio'];
        $Fichero= $_FILES['Fichero']['name'];  
        

        if (is_uploaded_file($_FILES['Fichero']['tmp_name'])) //devuelve un boleano
        {//si se ha subido el fichero….  

            $nombreDirectorio= "img/";            
            $nombreFichero= $_FILES['Fichero']['name'];
            $nombreCompleto= $nombreDirectorio. $nombreFichero;

            move_uploaded_file(
                $_FILES['Fichero']['tmp_name'], 
                $nombreDirectorio. $nombreFichero);  

        }
        else
            print("No se ha podido subir el fichero\n");

        }
                   

        $conexion = mysqli_connect ('localhost', 'root', 'perla', 'ejercicios') or die ("No se puede conectar con el servidor".mysqli_error($conexion));

        $sql="INSERT INTO productos (Nombre, Descripcion, Precio, Foto) VALUES ('$Nombre', '$Descripcion', '$Precio', '$Foto')";

        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

        echo "<h1>Los datos estan enviados correctamente.</h1>";

        mysqli_close($conexion);

    ?>

</body>
</html>


