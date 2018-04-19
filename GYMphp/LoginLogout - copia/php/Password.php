<?php

function passwordCheck($password){    
    $pw=false; //inicializamos con 0/flase   
    $pwGuardado = "Cocinero";
    $HASH = md5($pwGuardado);      

    if ($password != "") {  // se puede poner:$password decir que si hay password devuelve 1   
        if ($HASH == md5($password)) {
            $pw=true;
        } 
    }     
   return $pw;
}

$password =$_POST["password"];
$resultado = passwordCheck($password);
//$resultado=true;
//echo $resultado;
if ($resultado==1) {
    $mensaje = "La contraseña es correcta";
} else {
    $mensaje = "ERROR! La contraseña NO es correcta";
}

echo $mensaje;

?>



