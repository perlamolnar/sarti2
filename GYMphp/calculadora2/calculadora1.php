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
    //recuperamos variables que viene del formulario 
            //isset para las calculadores con el boton =
            if (isset($_POST["calcular"])){ //the "name" of the button submit es "calcular"
                    
                    $numero1=$_POST["number1"];
                    $numero2=$_POST["number2"];        
                    $operacion=$_POST["operacion"];
    
                    $resultado = calculadora($numero1, $operacion, $numero2);  
                    
                    
            
            }else {
                $resultado="";
                $numero1="";
                $numero2="";  

            }

            //isset para las calculadores con 4 botones
            if (isset($_POST["operacion"])){ 
                    
                $numero1=$_POST["number1"];
                $numero2=$_POST["number2"];        
                $operacion=$_POST["operacion"];

                $resultado = calculadora($numero1, $operacion, $numero2);  
                
                
        
            }else {
                $resultado="";
                $numero1="";
                $numero2="";  

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
<h1>CALCULADORA EN FORMAS DIFFERENTES</h1>
<br>
<br>
<h2>RESULTADO DEL CALCULO <br>
<input type="number" id="resultado" name="resultado" value="<?php echo $resultado; ?>" readonly>
</h2>  
<br>
<br>
<br>          
<form action="" method="POST">
        <h4>CON SELECT</h4>
            <input id="numero1" type="number" name="number1" required>    
            <select id="operacion" name="operacion">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input id="numero2" type="number" name="number2" required>
            
            <button type="submit" name="calcular" id="calcularSELECT">=</button>

            
        <br>
        <br>
        <br>
</form>

<form action="" method="POST">
        <h4>CON 4 BOTONES</h4>
            <input id="numero1" type="number" name="number1"required>
            <input id="numero2" type="number" name="number2"required>
            <button type="submit" name="operacion" value="+">+</button>
            <button type="submit" name="operacion" value="-">-</button>
            <button type="submit" name="operacion" value="*">*</button>
            <button type="submit" name="operacion" value="/">/</button>

        <br>
        <br>
        <br>
</form>

<form action="" method="POST">
        <h4>CON RADIO BUTON</h4>
            <input id="numero1" type="number" name="number1"required>

            <input type="radio" name="operacion" id="operacion" value="+">+
            <input type="radio" name="operacion" id="operacion" value="-">-
            <input type="radio" name="operacion" id="operacion" value="/">/
            <input type="radio" name="operacion" id="operacion" value="*">*

            <input id="numero2" type="number" name="number2"required>
            <button type="submit" name="calcular" id="calcularRADIOBUTON">=</button>
            
        <br>
        <br>
        <br>

</form> 

<form action="" method="POST">
        <h4>CON CHECKBOX</h4>
            <input id="numero1" type="number" name="number1"required>
            <input type="checkbox" name="operacion" value="+">+
            <input type="checkbox" name="operacion" value="-">-
            <input type="checkbox" name="operacion" value="*">*
            <input type="checkbox" name="operacion" value="/">/
            <input id="numero2" type="number" name="number2"required>
            <button type="submit" name="calcular" id="calcularCHECBOX">=</button>
            
</form>


</body>
</html>
