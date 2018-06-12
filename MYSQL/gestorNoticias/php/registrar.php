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
        session_start();
        include('../php/functions.php');  
        include('SendEmailNuevoRegistro.php'); 
    
        $Nombre=$_POST["Nombre"]; 
        $Telefono=$_POST["Telefono"];       
        $Direccion=$_POST["Direccion"]; 
        $Email=$_POST["Email"]; 
        $Username= $_POST['Username'];
        $Password= md5($_POST['Password']);
        $CodigoActivacion= $_POST['CodigoActivacion'];

        //$conexion = mysqli_connect ('localhost', 'root', '', 'gestornoticias') or die ("No se puede conectar con el servidor".mysqli_error($conexion));
        $conexion = connectBD(); 

        $sql="INSERT INTO usuarios (Nombre, Telefono, Direccion, Email, Username, Password, CodigoActivacion) VALUES ('$Nombre', '$Telefono', '$Direccion', '$Email', '$Username','$Password', '$CodigoActivacion')";

        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

        if ($consulta) {
            echo "  <h1>Los datos estan enviados correctamente</h1>
                    <h1>En breve recibiras un email<br>para activar tu cuenta.</h1>

                    <a href=\"../index.php\">VOLVER</a>";

                    $Subject = "Confirmacion del registro.";
                   
                    $Message = "                                
                                <h3>Bienvenido, $Nombre</h3>
                                <p>
                                Le informamos que ha registrado con exito al \"MUNDO DE ESCRITORES Y LECTORES\".
                                <br><br>
                                Reconfirmamos sus datos intorducidos:
                                <br><br>
                                Nombre: $Nombre<br>
                                Teléfono: $Telefono<br>
                                Dirección: $Direccion<br>
                                Email: $Email<br>
                                Username: $Username<br>
                                <br>
                                <br>
                                Para activar su cuenta, haga click en el siguiente enlace:
                                <br>
                                <br>
                                <a href=\"http://localhost/sarti/MYSQL/gestorNoticias/php/activacionUsuario.php/?codigo=$CodigoActivacion\">ACTIVAME AHORA</a>
                                <br>
                                <br>
                                En caso de cualquier duda, porfavor contacta el administrador: perlamolnar@hotmail.com 
                                <br><br>
                                Saludos,<br>
                                Gyöngyi Molnár<br>
                                Administradora<br>
                                </p>                               
                                ";

                    SendEmailNuevoRegistro($Nombre, $Email, $Subject, $Message);

        } else {
           echo "<h1>Error al registrar usuario. Intenta registrar de nuevo.</h1>
                    <a href=\"../index.php\">VOLVER</a>";
        }       

        mysqli_close($conexion);

    

    ?>

</body>
</html>


