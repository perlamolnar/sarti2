<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>

    <?php
        $numeros = array(1,2,3,44,5,6,7,8,23,9,10);
        //echo array_sum($numeros);
        $contador=0;
        $summa=0;
        $maximo=0;        
        $minimo=9999999; 
        $promedio=0;


        
        foreach ($numeros as $value) {        
            
            if ($contador==0) {
            $minimo=$value;
            $maximo=$value;
            $contador++; //para que no entre otravez en el if.
            }

           //echo ($value);
           $summa+=$value; 
           
           if ($maximo<$value) {
               $maximo=$value;
           } 

           if ($minimo>$value) {
               $minimo=$value;
           } 
           
        }

        $promedio=$summa/count($numeros);


        echo ("La summa es: ".$summa ."<br>");
        echo ("El valor maximo es: " .$maximo."<br>");
        echo ("El valor minimo es: " .$minimo."<br>");
        echo ("El promedio es: " .$promedio."<br>");
    ?>


    
</body>
</html>