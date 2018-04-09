<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="Libreria.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <h1>VIVAN LAS LIBRERIAS</h1>
    <!-- <h1>Estilizar Textos</h1>    

    <h4>Escribe tu texto en el cuadro:</h4>
    <textarea name="cadena" id="cadena" cols="50" rows="10"></textarea><br>
    <button id="enviarCadena">Estiliza tu texto</button>
    <p id="resultado"></p> -->
    
    <?php
        include("Libreria.php");

        $text="A ver ¿como funcionan mis librerias?!";
        $cordenada1 = [15,9];
        $cordenada2 = [11,5];
        $Numeros = array(1,2,5,9,14,26);
        $idioma = "hungaro";
        $number = 14.456367468;
        $fichero = "miImagen.jpg";
        
      
      
        echo "<h2>FUNCTION: Muestrar texto</h2>";
        Pintar($text);

        echo "<h2>FUNCTION: Muestrar texto en parrafo</h2>";
        echo textParrafo($text);

        echo "<h2>FUNCTION: Muestrar texto en titulo H1</h2>";
        echo textH1($text);

        echo "<h2>FUNCTION: Muestrar texto como link dentro en un parrafo</h2>";
        echo textParrafoLink($text);

        echo "<h2>FUNCTION: Muestrar la estacion actual</h2>";
        echo "Estamos en la estación: ";
        echo estacion();
        echo "<br><br>";

        echo "<h2>FUNCTION: Cambiar foto en cada estacion</h2>";       
        echo foto_de_estacion();
        echo "<br><br>";

        echo "<h2>FUNCTION: Calcular distancia entre dos puntos cartesianos pasados por parámetro</h2>"; 
        echo cordenadas($cordenada1,$cordenada2);
        echo "<br><br>";

        echo "<h2>FUNCTION: Calcular la suma de todos los elementos de un array pasado por parámetro</h2>"; 
        echo summar($Numeros);
        echo "<br><br>";

        echo "<h2>FUNCTION: Devuelve el string “Hola Mundo” escrito en inglés, catalán o castellano, en función del string (ej: cat,esp,eng) pasado por parámetro
        </h2>";        
        echo traductor($idioma);
        echo "<br><br>";

        echo "<h2>FUNCTION: Imprime “es par” o “es impar” en función de el entero que se le ha pasado por parámetro</h2>";
        echo ParImpar($number);             
        echo "<br><br>";

        echo "<h2>FUNCTION: Imprime información sobre de qué tipo de fichero se trata</h2>";
        echo extencionFichero($fichero);             
        echo "<br><br>";


    ?>
    
</body>
</html>