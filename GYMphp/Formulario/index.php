<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="Formulario.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    
    
    <?php
    
        // Esto evaluará a TRUE así que el texto se imprimirá.
        if (isset($_POST['edad'])) {
            $edad = $_POST['edad'];
            //echo "Tu edad es: $edad .";
        ?>

        <h1>BIENVENIDO</h1>
        <img src="img/verano.jpg" alt="verano">



        <?php                
        }else {  ?>
            <h1>FORMULARIO</h1>
            <form action="index.php" method="POST">  
            Edad:
            <input type="text" name="edad">
            <input type="submit" value="submit">
            </form>
        <?php
        }
        ?>



  
    
    
    
</body>
</html>