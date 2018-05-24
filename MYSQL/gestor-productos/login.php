<?php 
session_start();
include("conexion.php");
$user = $_POST["user"];
$password = $_POST["password"];




$sql="SELECT tipus, CONCAT(nombre, ' ',apellidos) as nomC FROM usuaris WHERE user='$user' and  password ='$password'";

$res = mysqli_query($conecion,$sql);

$nfilas = mysqli_num_rows($res);

mysqli_close($conecion);
if($nfilas>0){

    $fila = mysqli_fetch_assoc($res);

    $_SESSION['nomC'] = $fila["nomC"].;
    $_SESSION["tipo"]= $fila["tipus"];

    echo "ok";

}else{
   echo "error";
}






?>