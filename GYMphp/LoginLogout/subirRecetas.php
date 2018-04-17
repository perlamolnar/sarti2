<?php   
session_start();

    if (!isset($_SESSION["username"])) {
       header("Location:login.php");
    }else{
        $username=$_SESSION["username"];
    }
?>          

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!-- <script src="calculadora.js"></script> -->
    <link rel="stylesheet" href="css/style.css">
   
    
</head>
<body>
    <?php 
        include("head.php"); 

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
            $idUnico= time();                      

            if (is_uploaded_file($_FILES['Fichero']['tmp_name']))  //devuelve un boleano
            {//si se ha subido el fichero….          

                $nombreDirectorio= "img/";
                $idUnico= time();
                // $nombreFichero= $idUnico. "-" . $_FILES['Fichero']['name'];
                $nombreFichero=  $_FILES['Fichero']['name'];
                $nombreCompleto= $nombreDirectorio. $nombreFichero;

                if(file_exists($nombreCompleto)){
                    echo "El fichero ya existe, vuelva a cargar otra imagen!";
                ?>
        
        <div class="mainTitle">
            <h1>SUBIR NUEVO PRODUCTO</h1>
        </div>
        
        <div class="container">
            
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
                    <input type="hidden" name="MAX_FILE_SIZE">
                    <input type="file" name="Fichero">        
                    <br>                
                    <br>
                    <button type="submit" name="enviar">ENVIAR</button>
                            
            </form>
        </div>



    <?php }else{
        move_uploaded_file(
            $_FILES['Fichero']['tmp_name'], 
            $nombreDirectorio. $nombreFichero);        
    ?>
    
    
            <div class="mainTitle"><h1>NUEVO PRODUCTO SUBIDO</h1></div>
                <div class="container">

                    <div class='newProduct'><strong>NOMBRE DE PRODUCTO: </strong>
                        <?php echo $Nombre?>
                        <br><br>

                        <strong>DESCRIPCIÓN: </strong>
                        <?php echo $Descripcion ?>
                        <br><br>
                        
                        <strong>PRECIO: </strong>
                        <?php echo $Precio?>
                        €
                        <br><br>

                        <strong>ARCHIVO: </strong>
                        <?php echo $Fichero ?>
                        <br><br>               

                        <strong>FECHA DE SUBIDA: </strong>
                        <?php echo $FechaActual?>
                        <br><br>

                        <strong>NUEVO NOMBRE DEL ARCHIVO: </strong>
                        <?php echo $nombreFichero ?>
                        <br><br>
                    </div> 

                    <div class="divIMG">
                        <img src="<?php echo $nombreDirectorio. $nombreFichero;?>" alt="<?php echo $Nombre?>" width="50%">
                    </div>
                </div>
                
                
                

            <?php
                }
            }else
                print("No se ha podido subir el fichero\n");

        }
        else {
        ?>
        <div class="mainTitle">
            <h2>SUBIR RECETAS</h2>
        </div>
        
        <div class="container">
            
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
                    <input type="hidden" name="MAX_FILE_SIZE">
                    <input type="file" name="Fichero">        
                    <br>                
                    <br>
                    <button type="submit" name="enviar">ENVIAR</button>
                            
            </form>
        </div>
        <?php            
        }          
    ?>

</body>
</html>