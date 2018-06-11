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
        include('functionsEmails.php'); 

        $conexion = connectBD(); 

        $sql="SELECT * FROM usuarios";

        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));
       
        if ($consulta) {
            //echo "Hemos hecho la consulta.";
                while($fila=mysqli_fetch_assoc($consulta)){ 
                    foreach($fila as $key => $value) {
                        //do something with $field and $value   
                        echo "$value<br>";                                       

                        $ID = $fila['Id_usuario'];                         
                        $Nombre= $fila['Nombre'];
                        $Email= $fila['Email'];
                        $Username = $fila['Username']; 
                        $Tipo= $fila['Tipo'];                            

                        $Subject = "Información sobre migración de datos.";
                        
                        $Message = "                                
                                    <h3>Buenos días, $Nombre</h3>
                                    <p>
                                    Le informamos que los datos de los usuarios de la página se
                                    migraran a un nuevo servidor dentro de 48 horas.<br><br>
                                    Reconfirmamos sus datos registrados actuales:
                                    <br><br>
                                    Nombre: $Nombre<br>                            
                                    Email: $Email<br>
                                    Username: $Username<br>
                                    Tipo de usuario: $Tipo<br>
                                    <br>
                                    Si necesita hacer qualquier cambio, porfavor contacta el administrador: perlamolnar@hotmail.com 
                                    <br><br>
                                    Saludos,<br>
                                    Gyöngyi Molnár<br>
                                    Administradora<br>
                                    </p>                               
                                    ";
                    

                                                                             
                    } //fin de foreach   
                sendEmail($Nombre, $Email, $Subject, $Message);     
                }//fin de while
                 
        } else {
           echo "<h1>Error al recoger los datos de los usuarios.</h1>
                    <a href=\"../index.php\">VOLVER</a>";
        }       
        
        //sendEmail($Nombre, $Email, $Subject, $Message);  

        mysqli_close($conexion);   

    ?>

</body>
</html>


