<?php
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];

$Edad = $_POST['Edad'];
$Email = $_POST['Email'];
$Username= $_POST['Username'];
$Password= md5($_POST['Password']);

$conexion = mysqli_connect ('localhost', 'root', 'perla', 'contacto') or die ("No se puede conectar con el servidor".mysqli_error($conexion));

$sql="INSERT INTO contacto (Nombre, Apellido, Edad, Email, Username, Password) VALUES ('$Nombre', '$Apellido', '$Edad', '$Email', '$Username','$Password')";

$consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));



mysqli_close($conexion);

?>