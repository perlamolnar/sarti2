<!DOCTYPE html>
<html>
<head>
	<title>Practicar INCLUDED</title>

	<?php
	// require("functions.php");	//incluimos un fichero php con fumciones
	?>

	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
	<?php
		include ("html/cabezera.html");
	?>

	<?php
		require ("html/contenido2.php");
	?>

	<?php
		include ("html/pie.html");
	?>



</body>
</html>