<!DOCTYPE html>
<html>
<head>
	<title>Estancina</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/funciones.js"></script>
</head>
<body>

<?php

	$mesactual = date('n'); 
	$mesactual = 5;
	//echo $mesactual;
	$estacion ="";

	$invierno = array(1, 2, 3);
	$primavera = array(4, 5, 6);
	$verano = array(7, 8, 9);
	$otono = array(10, 11, 12);


	switch (true) {
	    case ($mesactual<=3):
	    	$estacion="invierno";
	        break;
	    case ($mesactual<=6):
	        $estacion="primavera";
	        break;
	    case ($mesactual<=9):
	        $estacion="verano";
	        break;
	    case ($mesactual<=12):
	        $estacion="otono";
	        break;
	}

	//echo $estacion;

	// include("$estacion/head.html"); //include($estacion."/head.html");
	// include($estacion."/cuerpo.html");
	// include($estacion."/pie.html");

	include("fichas/head.php");
	include("fichas/cuerpo.php");
	include("fichas/pie.php");



?>


</body>
</html>


