<?php
session_start();
    $TIPO= "";
    $USER= ""; 

    if (isset($_SESSION["username"])) {
        $TIPO= $_SESSION['tipo'];
        $USER= $_SESSION['username']; 
    }  

    //  if (isset($_SESSION["username"])) {
    //         $_SESSION['tipo'] = "admin";
    //         $_SESSION["username"] = $_POST["username"];       
    //     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>    
    <link rel="stylesheet" href="../css/styleBO.css">
   
</head>
<body>
    
<?php
    include("../php/functions.php");
    include("head.php");  
    
    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {    
        $username = $_POST["username"]; 
        $password = $_POST["password"];  
        
        
        
       // if(passwordControl($username,$password,"Perla","1234")){ 
        if ($_POST['username'] == 'Perla' && $_POST['password'] == '1234') {
            $_SESSION['tipo'] = "admin";
            $_SESSION["username"] = $_POST["username"]; //$_SESSION['username'] = 'Perla';                     

            header("Location:subirRecetas.php");
            //echo 'You have entered valid use name and password';
        }else if ($_POST['username'] == 'Tom' && $_POST['password'] == '987'){
            $_SESSION['tipo'] = "user";
            $_SESSION["username"] = $_POST["username"]; //$_SESSION['username'] = 'Perla';                     

            header("Location:subirRecetas.php");
        }else{
            echo $avisoError="<p class=\"red\"> Username o contraseña INCORRECTA! Vuelva a intentarlo!</p>";
        }
    }

    function passwordControl($userEscrito,$pwEscrito,$userGardado,$pwGuardada){

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
        
<div> 
    
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