<?php   
session_start();
    $TIPO= "";
    $USER= ""; 

    if (isset($_SESSION["username"])) {
            $TIPO= $_SESSION['tipo'];
            $USER= $_SESSION['username'];          
        }

    // if (!isset($_SESSION["username"])) {
    //    header("Location:login.php");
    // }else{
    //     $username=$_SESSION["username"];
    // }
?>          

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!-- <script src="calculadora.js"></script> -->
    <link rel="stylesheet" href="../css/styleBO.css">
   
    
</head>
<body>
    <?php
        include("functions.php"); 
        include("head.php");            
    ?>

    <h1>CONTACTO</h1>

    C/Javascript 666 Nº77<br><br>
    Vilanova i la Geltrú<br><br>
    Tel: 123-456-789<br><br>
    Email: perlamolnar@hotmail.com

</body>
</html>