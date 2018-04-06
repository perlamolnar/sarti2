<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="Libreria.js"></script>

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

        Pintar($text);
        echo textParrafo($text);
        echo textH1($text);
        echo textParrafoLink($text);
        echo estacion();
        echo "<br>";
        echo foto_de_estacion();


    ?>
    
</body>
</html>