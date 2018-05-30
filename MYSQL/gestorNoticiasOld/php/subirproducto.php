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
        //$Fichero= $_FILES['Fichero']['name'];  
        

        if (is_uploaded_file($_FILES['Fichero']['tmp_name'])) //devuelve un boleano
        {//si se ha subido el fichero….  

            $nombreDirectorio= "../img/";            
            $nombreFichero= $Nombre.".jpg"; //damos el mismo nombre que el nombre del producto
            $nombreCompleto= $nombreDirectorio. $nombreFichero;
            //echo $nombreCompleto;

            move_uploaded_file(
                $_FILES['Fichero']['tmp_name'], 
                $nombreDirectorio. $nombreFichero);  


            $conexion = mysqli_connect ('localhost', 'root', 'perla', 'ejercicios') or die ("No se puede conectar con el servidor".mysqli_error($conexion));

            $sql="INSERT INTO productos (Nombre, Descripcion, Precio, Foto) VALUES ('$Nombre', '$Descripcion', '$Precio', '$nombreFichero')";

            $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));
               
            echo "
            
                    <div><h1>NUEVO PRODUCTO SUBIDO CORRECTAMENTE</h1></div>
                        <div>

                            <div class='newProduct'><strong>NOMBRE DE PRODUCTO: </strong>
                                $Nombre
                                <br><br>

                                <strong>DESCRIPCIÓN: </strong>
                                $Descripcion
                                <br><br>
                                
                                <strong>PRECIO: </strong>
                                $Precio
                                €
                                <br><br>

                                <strong>ARCHIVO: </strong>
                                $nombreFichero 
                                <br><br>                                
                            </div> 

                            <div class=\"divIMG\">
                                <img src=\"$nombreDirectorio$nombreFichero\" alt=\"$Nombre\" width=\"50%\">
                            </div>
                        </div>   
                         <a href=\"../index.php\">VOLVER</a>

                    ";

            mysqli_close($conexion);


        }
        else{
            print("No se ha podido subir el fichero\n");

        }
                   



    ?>

</body>
</html>


