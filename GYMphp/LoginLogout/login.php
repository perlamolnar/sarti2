<?php
session_start();

/*if (!isset($_SESSION["username"])) {
       header("Location:login.php");
    }else{
        $username=$_SESSION["username"];
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>    
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
    
<?php 
    include("head.php");  
    
    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {    
        $username = $_POST["username"]; 
        $password = $_POST["password"];       
        
        if(passwordControl($username,$password)){ // if ($_POST['username'] == 'Perla' && $_POST['password'] == 'perla') {
            $_SESSION['valid'] = true;
           // $_SESSION['timeout'] = time();
            $_SESSION["username"] = $_POST["username"]; //$_SESSION['username'] = 'Perla';                     

            header("Location:subirRecetas.php");
            //echo 'You have entered valid use name and password';
        }
        else{
            echo $avisoError="<p class=\"red\"> Username o contraseña INCORRECTA! Vuelva a intentarlo!</p>";
        }
    }

    function passwordControl($userEscrito,$pwEscrito){

        $userGardado="Perla";
        $pwGuardada="1234";

        $userHASH=md5($userGardado);        
        $pwHASH=md5($pwGuardada);

        $userEscritoHASH=md5($userEscrito);
        $pwEscritoHASH=md5($pwEscrito);

        if($userHASH == $userEscritoHASH && $pwHASH == $pwEscritoHASH){
            return true;
        }
            return false;
    }
?>
 
<div class="mainTitle">
    <h2>Enter usuario y contraseña</h2>       
</div>
        
<div class="container"> 
    
    <form class="modal-content animate" action="" method="POST">
        <div class="container">

            <?php //echo $avisoError; ?>

            <label for="username"><b>Username: </b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <br>
            <label for="password"><b>Password: </b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
            <br>
            <input type="submit" value="LOGIN" name="login">
            <br>
            <br>
            <!-- <label><input type="checkbox" checked="checked" name="remember"> Remember me</label> -->
        </div>
    </form>
</div>

</body>
</html>