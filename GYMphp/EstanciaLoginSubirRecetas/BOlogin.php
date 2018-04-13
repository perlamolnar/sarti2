<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!-- <script src="js/Password.js"></script> -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php
    
    function passwordCheck($password){    
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

    <h1>COMPROBAR CONTRASEÑA</h1>
    
    <form action="" method="POST">
    
        PASSWORD:
        <input id="password" name="password" type="text">
        <button type="submit" id="sendContrasena" name="sendContrasena">LOGIN</button>
        <span id="resultado"></span>  

    </form>   

    <?php
        }
    ?>
   
    
</body>
</html>