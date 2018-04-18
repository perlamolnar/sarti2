<?php   
session_start();

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
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!-- <script src="calculadora.js"></script> -->
    <link rel="stylesheet" href="css/style.css">	
	<script src="js/funciones.js"></script>
</head>
<body>
<?php 
        include("BO/head.php"); 
?>
<h1>HOME SWEET HOME</h1>
</body>
</html>


