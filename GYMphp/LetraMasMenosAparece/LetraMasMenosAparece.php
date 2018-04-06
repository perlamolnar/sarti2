<?php
    $cadena=$_POST["cadena"];
    //echo $cadena."<br>";
    FrequenciaLetras($cadena);

    function FrequenciaLetras($cadena){
        $cadena = strtolower($cadena);
        //echo $cadena."<br>";    

        $cadenaSinEspacio= str_replace(" ", "", $cadena);
        //echo $cadenaSinEspacio."<br>";

        //$array=preg_split("//", $cadenaSinEspacio, -1, PREG_SPLIT_NO_EMPTY); 
        
        $array=str_split("$cadenaSinEspacio");
        print_r($array);

        echo "<br>";
        //se puede hacer con el str_split(string) tambien

        $NumeroLetra = array_count_values($array);
        echo "Valores contados: ";
        print_r($NumeroLetra);
        echo "<br>";

        asort($NumeroLetra);
        echo "Valores contados en orden: ";
        print_r($NumeroLetra);
        echo "<br>";

        print_r(array_values($NumeroLetra)[0]);
        print_r(array_keys($NumeroLetra)[0]);
        echo "<br>";

        print_r(array_keys($NumeroLetra)[count(array_keys($NumeroLetra))-1]); //pidemos el ultimo key de del array asociativo
            
    }

?>