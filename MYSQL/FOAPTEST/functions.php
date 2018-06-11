<?php

function NumTotalRegistros($nombreColumna, $nombreTabla){
    
    $conexion = connectBD(); // hay que poner el nombre de la function creado para crear la conexion
        
        $sql="SELECT COUNT($nombreColumna) as nfilas FROM $nombreTabla";
        
        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));    
        $fila=mysqli_fetch_assoc($consulta);       
        $total_items = $fila["nfilas"];
        
        print_r($total_items);
        

    mysqli_close($conexion);
        
    return $total_items;

}

?>