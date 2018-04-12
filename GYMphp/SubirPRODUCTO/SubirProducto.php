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
    
        $Nombre="";
        $Descripcion="";
        $Precio=""; 
        //$Fichero="";
        $FechaActual="";
        
        if(isset($_POST['enviar'])){//the "name" of the button submit. Recoge los valores del formulario
            $Nombre = $_POST['Nombre'];
            $Descripcion= $_POST['Descripcion'];
            $Precio= $_POST['Precio'];
            $Fichero= $_FILES['Fichero']['name'];
            $FechaActual= date('d - m - Y');

            echo $Nombre;


            if(is_uploaded_file($_FILE['fichero']['tmp_name']))

            move_uploaded_file($_FILES['fichero']['tmp_name'].$nombreDirectorio.$nombreFichero);


        }
        else {
        ?>

        <h1>SUBIR NUEVOS PRODUCTO</h1>
        <br>
        <br>
            <form action="" method="POST" ENCTYPE="multipart/form-data">        
                    
                    <label for="Nombre">Nombre de Producto</label><br>
                    <input type="text" name="Nombre">
                    <br>
                    <br>
                    <label for="Descripcion">Descripcion</label><br>
                    <input type="text" name="Descripcion">
                    <br>
                    <br>
                    <label for="Precio">Precio</label><br>
                    <input type="number" name="Precio">
                    <br>
                    <br>
                    <label for="Fichero">Subir Fichero</label><br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="102400">
                    <input type="file" name="Fichero">        
                    <br>                
                    <br>
                    <button type="submit" name="enviar">Enviar</button>
                            
            </form>
        
        <?php            
        }          
    ?>







</body>
</html>
