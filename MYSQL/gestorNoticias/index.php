<?php
session_start(); 
//session_destroy();
//session_start(); 

include("php/functions.php");
//include("php/generatePDF.php");
//$tipo = $_SESSION['cfg']['tipo'];        
//$username = $_SESSION['cfg']['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>NOTICIAS DE LECTORES</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<script src="js/funciones.js"></script>
</head>
<body>

<?php
	include("cfg.php");
	include("head.php");			
	include("cuerpo.php");
	include("pie.php");
?>

</body>
</html>


