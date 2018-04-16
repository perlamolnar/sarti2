<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!-- <script src="js/Password.js"></script> -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <?php
    include_once("headBO.php");

    // if(isset($_SESSION["usuario_valido"]))
    //             // Código para usuarios autorizados
    // else
    //             // Mensaje de acceso no autorizado
  

    


    
    function passwordCheck($password){ 
        session_register("username");
        $_SESSION[username] = $username;

             

        $pw=false; //inicializamos con 0/false   
        $pwGuardado = "Cocinero";
        $HASH = md5($pwGuardado);      
        
        //echo $password;
        if ($password != "") {  // se puede poner:$password decir que si hay password devuelve 1   
            //echo "hola";
            if ($HASH == md5($password)) {
                $pw=true;
            } 
        }     
        
        return $pw;
    }

    if (isset($_POST['sendContrasena'])){
        $username = $_POST["username"];	
        $password =$_POST["password"];
        //echo $password;
        
        $resultado = passwordCheck($password);
        //$resultado=true;
        //echo $resultado;
        if ($resultado==1) {

            //$mensaje = "La contraseña es correcta";            
            include("SubirReceta.php");


        } else {
            $mensaje = "<p class=\"red\">ERROR! La contraseña NO es correcta</p>";
        ?>
            <h1>COMPROBAR CONTRASEÑA</h1>   
                <form action="" method="POST">        
                    USERNAME:
                    <input id="username" name="username" type="text">
                    PASSWORD:
                    <input id="password" name="password" type="text">
                    <button type="submit" id="sendContrasena" name="sendContrasena">LOGIN</button>
                    <span id="resultado"></span>
                </form>
        <?php
        
        }

        //echo $mensaje;
    }
    else{
    
    ?>

    
    <div class="containerBO">
    <h1>COMPROBAR CONTRASEÑA</h1>
    <form action="" method="POST">
        USERNAME:
        <input id="username" name="username" type="text">
        <br><br>
        PASSWORD:
        <input id="password" name="password" type="text"><br><br>
        <button type="submit" id="sendContrasena" name="sendContrasena">LOGIN</button>
        <span id="resultado"></span>  

    </form>   

    <?php
        }
        

    ?>
   </div>

   <?php
   include_once("pieBO.php");
   ?>
   
</body>
</html>