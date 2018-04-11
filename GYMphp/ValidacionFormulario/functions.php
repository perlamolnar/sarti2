<?php 
    function CheckAge($Edad){
        //echo $Edad;
        $error=2; //no es un numero
        //echo is_nan($Edad);

        if (is_numeric($Edad)) {
            if ($Edad>=18) {
               $error = 0; //es major de 18años
            }
            else {
                $error = 1; //es menor de 18años
            }   
        } 
        else {
            $error=2; //no es un numero
        }
        
        return $error;
                
    }
    

?>