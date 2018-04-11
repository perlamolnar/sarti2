<?php 
    function CheckAge($Edad){

        $error=2; //no es un numero

        if (is_numeric($Edad)) {
            if ($Edad>=18) {
               $error = 0; //es major de 18años
            }   
        } else {
            $error = 1; //es menor de 18años
        }
        
        return $error;
                
    }
    

?>