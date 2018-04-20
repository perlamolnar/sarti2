<?php

    include("php/functions.php");    
    
    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {    
        $username = $_POST["username"]; 
        $password = $_POST["password"];  
        
        if(passwordControl($username,$password,"Perla","123")){ 
        // *** otra manera: if ($_POST['username'] == 'Perla' && $_POST['password'] == '123') {
            $_SESSION['tipo'] = "admin";
            $_SESSION["username"] = $_POST["username"]; //$_SESSION['username'] = 'Perla';                     
            header("Location:index.php");
            //echo 'You have entered valid user name and password';

        }else if (passwordControl($username,$password,"Marc","987")){
            $_SESSION['tipo'] = "user";
            $_SESSION["username"] = $_POST["username"]; //$_SESSION['username'] = 'Perla';                     
            header("Location:index.php");

        }else{
            echo $avisoError="<p class=\"red\"> Username o contraseña INCORRECTA! Vuelva a intentarlo!</p>";
        }
    }

    //FUNCTION YA ESTA EN functions.php:
    //*** otra manera, dejar aquí function 
    // function passwordControl($userEscrito,$pwEscrito,$userGardado,$pwGuardada){

    //     $userHASH=md5($userGardado);        
    //     $pwHASH=md5($pwGuardada);

    //     $userEscritoHASH=md5($userEscrito);
    //     $pwEscritoHASH=md5($pwEscrito);

    //     if($userHASH == $userEscritoHASH && $pwHASH == $pwEscritoHASH){
    //         return true;
    //     }
    //         return false;
    // }
?>
        
<div> 
    <h2>Para enter en la página necesitamos el nombre del usuario y la contraseña</h2> <br>      
    <form action="" method="POST">
        <div class="container">

            <?php //echo $avisoError; ?>

            <label for="username"><b>Username: </b></label>
            <input type="text" placeholder="Perla o Marc" name="username" required>
            <br>
            <br>
            <label for="password"><b>Password: </b></label>
            <input type="password" placeholder="123 / 987" name="password" required>
            <br>
            <br>
            <input type="submit" value="LOGIN" name="login">
            <br>
            <br>
        </div>
    </form>
</div>
