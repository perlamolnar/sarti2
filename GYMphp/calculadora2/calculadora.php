<?php 
//recuperamos variables que viene del  $.post de cargaContenido funcion
        $numero1=$_POST["number1"];
        $numero2=$_POST["number2"];
        $operacion=$_POST["operacion"];

        $resultado = calculadora($numero1, $operacion, $numero2);
        echo $resultado;
        //echo "Hola pepe";
        
        function calculadora ( $numero1, $operacion, $numero2){
            switch ($operacion) {
                case '+':
                    $resultado = $numero1+$numero2;
                    break;

                case '-':
                    $resultado = $numero1-$numero2;
                    break;

                case '*':
                    $resultado = $numero1*$numero2;
                    break;

                case '/':
                    $resultado = $numero1/$numero2;
                    break;
                
                default:
                    echo ("Error! Pruoba de nuevo.");
                    break;               
            }  

            return $resultado; //return tiene que estar fuera de switch!!!!!
        }
        //echo "El resultado de tu operacion es: ";
        //echo calculadora(3, "-", 5);
    ?>