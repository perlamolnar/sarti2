<html>
<head>
	<title>Variables del formulari</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="pink">

	<?php
		echo "<hr><h2>Paràmetres via GET:</h2>";
		foreach($_GET as $key=>$value) {
			echo $key, ' => ', $value, "<br/>";
		}
		echo "<hr><h2>Paràmetres via POST:</h2>";
		foreach($_POST as $key=>$value) {
			echo $key, ' => ', $value, "<br/>";
		}
	
		//fitxers
		foreach($_FILES as $key1 => $value1) {
			if($value1["error"] == 0) {
				foreach($value1 as $key2 => $value2) {
					echo $key1, '.', $key2, ' => ', $value2, "<br/>";
				}
			}
		}
	?>
	<hr>
</body>
</html>
