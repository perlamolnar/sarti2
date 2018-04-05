<?php
    $cadena=$_POST["cadena"];
    //echo $cadena."<br>";
    FrequenciaLetras($cadena);

    function FrequenciaLetras($cadena){
        $cadena = strtolower($cadena);
        //echo $cadena."<br>";    

        $cadenaSinEspacio= str_replace(" ", "", $cadena);
        //echo $cadenaSinEspacio."<br>";

        $array=preg_split("//", $cadenaSinEspacio, -1, PREG_SPLIT_NO_EMPTY); 
        print_r($array);
        echo "<br>";
        //se puede hacer con el str_split(string) tambien

        $NumeroLetra = array_count_values($array);
        print_r($NumeroLetra);
        echo "<br>";

        asort($array);
        print_r($array);
        echo "<br>";

        print_r(array_values($array)[0]);
        print_r(array_values($array[count($array)-1]));


    
        // arsort($NumeroLetra);
        // print_r($NumeroLetra);
        // echo "<br>";
    }



    

    


    // sort($array);
    // print_r($array);
    // echo "<br>";

    // rsort($array);
    // print_r($array);
    // echo "<br>";


    



?>