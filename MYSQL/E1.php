<?php

$host = "localhost";
$user = "root";
$bd = "vuelos";
$password = "perla";

$cfg = array("host"=>$host, "user"=>$user, "bd"=>$bd, "password"=>$password);

$mysqli = new mysqli($cfg['host'], $cfg['user'], $cfg['password'], $cfg['bd']);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}

$DNI="";
$Nombre="Charlie";
$i = 5;
while ($i <= 15) {
    if ($mysqli->query("INSERT INTO pasajeros (DNI, Nombre) VALUES ('$i','$Nombre $i')")===TRUE){   
    printf("Se creó con éxitot. \n");

   }
   $i+=1;
};

//En otra manera:
// $DNI="1111111";
// $Nombre="Charlie";

// for ($i=0; $i < 20 ; $i++) { 

//     $Nombre1= $Nombre."_".$i;
//     $DNI1= $DNI." ".$i;    
//     $query = "INSERT INTO pasajeros (DNI, Nombre) VALUES ('$DNI1', '$Nombre1')"; //guarda en $query como un string
//     //$mysqli->query($query);
//     if ($mysqli->query($query) != TRUE) { //si ha ido mal y no ha creado registro
//         echo "Error! No ha creado el registro."
//     }
// }

//extremos la consulta con la bd y guardamos en un variable:
$resultado = $mysqli->query("SELECT Id_Tripulacion, Id_Vuelo FROM tripulacion WHERE Id_Tripulacion<5"); 
$fila = $resultado->fetch_assoc(); //quiero un array asociativo y me lo guardas en $fila
echo $fila['Id_Vuelo'];
echo "<br>";
echo $fila['Id_Tripulacion'];

?>


