<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!-- <script src="calculadora.js"></script> -->
    <link rel="stylesheet" href="style.css">
   
    
</head>
<body>
    <?php 
    //recuperamos variables que viene del  $.post de cargaContenido funcion
            
            if (isset($_POST["calcular"])){ 
                    
                    $numero1=$_POST["number1"];
                    $numero2=$_POST["number2"];        
                    $operacion=$_POST["operacion"];
    
                    $resultado = calculadora($numero1, $operacion, $numero2);  
                    echo $resultado;
                    
            
            }else {
                 $resultado="";
            }

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
    
        ?>

<form action="" method="POST">
        <h1>CALCULADORA SELECT</h1>
            <input id="numero1" type="number" name="number1">    
            <select id="operacion" name="operacion">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input id="numero2" type="number" name="number2">
            
            <button type="submit" name="calcular" id="calcularSELECT">=</button>
            <input type="number" id="resultado" name="resultado" value="<?php echo $resultado; ?>" readonly>
            
        <br>
        <br>
        <br>
</form>

<form action="" method="POST">
        <h1>CALCULADORA 4 CON 4 BOTONES</h1>
            <input id="numero1" type="number">
            <button type="submit" name="+" value="+">+</button>
            <button type="submit" name="-" value="-">-</button>
            <button type="submit" name="*" value="*">*</button>
            <button type="submit" name="/" value="/">/</button>
            <input id="numero2" type="number">
            <button type="submit" id="calcular4BOTONES">=</button>
            <span id="resultado"></span>

        <br>
        <br>
        <br>
</form>

<form action="" method="POST">
        <h1>CALCULADORA RADIO BUTON</h1>
            <input id="numero1" type="number">

            <input type="radio" name="operacion" id="operacion" value="+">+
            <input type="radio" name="operacion" id="operacion" value="-">-
            <input type="radio" name="operacion" id="operacion" value="/">/
            <input type="radio" name="operacion" id="operacion" value="*">*

            <input id="numero2" type="number">
            <button type="submit" id="calcularRADIOBUTON">=</button>
            <span id="resultado"></span>
        <br>
        <br>
        <br>

</form> 

<form action="" method="POST">
        <h1>CALCULADORA CHECKBOX</h1>
            <input id="numero1" type="number">
            <input type="checkbox" name="operacion" value="+">+
            <input type="checkbox" name="operacion" value="-">-
            <input type="checkbox" name="operacion" value="*">*
            <input type="checkbox" name="operacion" value="/">/
            <input id="numero2" type="number">
            <button type="submit" id="calcularCHECBOX">=</button>
            <span id="resultado"></span>
</form>


</body>
</html>
