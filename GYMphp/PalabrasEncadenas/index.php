<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="PalabrasEncadenadas.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body> 

    <h1>¿TUS PALABRAS ESTÁN ENCADENADAS?</h1>
    
    <form action="index.php" method="POST">  
    TU TEXTO:
    <input type="text" name="text">
    <input type="submit" value="submit">
    </form>

    <?php
        if (isset($_POST['text']) && $_POST['text']!=="" ) {
            $text = $_POST['text'];
            echo "<h4>Tu texto para comprobar es: </h4> $text <br>" ;    
            
            testCadena($text);            
        } 
        
        function testCadena($text){
            $text = strtolower(trim($text));            
            $arrayPalabras = explode(" ",$text);            
            
            $encadenado=true;

            for ($i=0; $i <count($arrayPalabras) ; $i++) { 

                //$word .= $arrayPalabras[$i]."<br>";
                $actual = $arrayPalabras[$i];

                if($i != 0){
                    $primeraPart = substr ($actual, 0,2);
                    $ultimaPart = substr($anterior, -2);
                    if ($primeraPart!= $ultimaPart) {
                        $encadenado = false;
                        break;
                    }  
                }

                $anterior = $actual; //guardamos la palabra actual para mangenerle cuando estemos en la siguiente palabra!!!!  ES LA MEJOR FORMA PARA COMPARA LOS ELEMENTOS DE UN ARRAY

            }
            
            if ($encadenado) {
               echo "<br> SÍ, tus palabras estan encadenadas.";
            } else {
               echo "<br> NOOOO, tus palabras NO estan encadenadas.";
            }
            
            return $encadenado;
            
        }
       
    ?>

    
</body>
</html>