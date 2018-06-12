<?php
    session_start();
    include('../php/functions.php');    

    $host= $_SERVER["HTTP_HOST"];
    $url= $_SERVER["REQUEST_URI"];
    // echo "http://" . $host . $url;
    // echo "<br>";
    // echo $url;
    // echo "<br>";

    $codigoActivacion = substr("$url", -10);
    //echo $codigoActivacion; 
    
    $conexion = connectBD(); 
	
    $sql="UPDATE usuarios SET Activo='Activo' WHERE CodigoActivacion='$codigoActivacion'";
    //echo $sql;

    $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

        if ($consulta) {
            echo "
            <!DOCTYPE html>
            <html>
            <head>
                <title>ACTIVACION DE CUANTA USUARIO</title>
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">	
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>	
                <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
                <link rel=\"stylesheet\" type=\"text/css\" href=\"../../css/style.css\">	
               
            </head>
            <body>             
            <h1>Gracias<br><br>Hemos activado tu cuenta</h1>                    
            </body>
            </html>
            ";
        } else {
            echo "Error al activar la cuenta. Intenta rehacerlo.";
        }

    mysqli_close($conexion);

   

 
 


?>