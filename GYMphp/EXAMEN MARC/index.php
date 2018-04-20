<?php
session_start();
    $TIPO= "";
    $USER= ""; 

    if (isset($_SESSION["username"])) {
        $TIPO= $_SESSION['tipo'];
        $USER= $_SESSION['username']; 
    }  
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>EXAMEN PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" href="css/styleBO.css"> -->
	<script src="js/funciones.js"></script>
</head>
<body>

<?php

	include("head.php");			
	include("cuerpo.php");
	include("pie.php");
?>

</body>
</html>


