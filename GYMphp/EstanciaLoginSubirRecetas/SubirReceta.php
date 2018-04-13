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
    
        $Titulo="";
        $Estacion="";
        $Receta=""; 
        $Foto="";
        $FechaActual="";
        
        if(isset($_POST['NuevaRecta'])){//the "name" of the button submit. Recoge los valores del formulario
            $Titulo = $_POST['Titulo'];
            $Estacion= $_POST['Estacion'];
            $Receta= $_FILES['Receta']['name'];
            $Foto= $_FILES['Foto']['name'];            
            $FechaActual= date('d - m - Y');
            $idUnico= time();         
          
                if (is_uploaded_file($_FILES['Receta']['tmp_name']))  //devuelve un boleano
                {//si se ha subido el fichero….                    

                        $nombreDirectorio= "fichas/RecetasTEXTO/.$Estacion";
                        $idUnico= time();
                        $nombreFichero= $idUnico. "-" . $_FILES['Receta']['name'];
                        $nombreCompleto= $nombreDirectorio. $nombreFichero;

                        move_uploaded_file(
                            $_FILES['Receta']['tmp_name'], 
                            $nombreDirectorio. $nombreFichero);                  
                            
                    

                    if (is_uploaded_file($_FILES['Foto']['tmp_name']))  //devuelve un boleano
                    {//si se ha subido el fichero….

                ?>
                    <div class="mainTitle"><h1>NUEVA RECETA SUBIDO</h1></div>
                    

                    <div class='newProduct'><strong>TITULO: </strong>
                    <?php echo $Titulo?>
                    <br><br>

                    <strong>ESTACIÓN: </strong>
                    <?php echo $Estacion ?>
                    <br><br>
                    
                    <strong>RECETA: </strong>
                    <?php echo $Receta?>                    
                    <br><br>

                    <strong>FOTO: </strong>
                    <?php echo $Foto ?>
                    <br><br>               

                    <strong>FECHA DE SUBIDA: </strong>
                    <?php echo $FechaActual?>
                    <br><br></div>  

            <?php

                $nombreDirectorio= "img/";
                $idUnico= time();
                $nombreFichero= $idUnico. "-" . $_FILES['Foto']['name'];
                $nombreCompleto= $nombreDirectorio. $nombreFichero;

                move_uploaded_file(
                    $_FILES['Foto']['tmp_name'], 
                    $nombreDirectorio. $nombreFichero);                  
                    
            ?>
                    
        
        
            <?php
                  }else print("No se ha podido subir el fichero\n");
                //include("SubirReceta.php&ErrorEnvio=error");
                include("SubirReceta.php");

            ?>
                <!-- <div class="mainTitleBO"><h1>BIENVENIDO A BACKOFFICE</h1></div>
                <div class="containerBO">            
                    <h3>SUBIR NUEVA RECETA</h3>            
                    <form action="" method="POST" ENCTYPE="multipart/form-data">        
                    
                    <label for="Titulo">TITULO DE RECETA</label><br>
                    <input type="text" name="Titulo" value="<?php echo $Titulo;?>"required>
                    <br>
                    <br>
                    <label for="Estaction">ESTACIÓN</label><br>
                    <input type="text" name="Estaction" value="" required>
                    <br>
                    <br>                    
                    <label for="Receta">SUBIR RECETA (Formato: receta.txt)</label><br>
                    <input type="hidden" name="MAX_FILE_SIZE">
                    <input type="file" name="Receta" value="<?php echo $Receta;?>" required>        
                    <br>                
                    <br>
                    <label for="Foto">SUBIR IMAGEN</label><br>
                    <input type="hidden" name="MAX_FILE_SIZE">
                    <input type="file" name="Foto" value="<?php echo $Foto;?>" required> 
                    <br>                
                    <br> 
                    <button type="submit" name="NuevaRecta">Añadir Nueva Recta</button>                            
                    </form>                
                </div>
                 -->
            <?php
        }
        else {
        ?>
        <div class="mainTitleBO"><h1>BIENVENIDO A BACKOFFICE</h1></div>
        <div class="containerBO">            
            <h3>SUBIR NUEVA RECETA</h3>            
            <form action="SubirReceta.php" method="POST" ENCTYPE="multipart/form-data">        
                    
                    <label for="Titulo">TITULO DE RECETA</label><br>
                    <input type="text" name="Titulo" value="<?php echo $Titulo;?>"required>
                    <br>
                    <br>
                    <label for="Estaction">ESTACIÓN</label><br>
                    <select name="Estaction" value="" required>
                        <option value="primavera">Primavera</option>
                        <option value="verano">Verano</option>
                        <option value="otono">Otoño</option>
                        <option value="invierno">Invierno</option>
                    </select>                    
                    <br>
                    <br>                    
                    <label for="Receta">SUBIR RECETA (Formato: receta.txt)</label><br>
                    <input type="hidden" name="MAX_FILE_SIZE">
                    <input type="file" name="Receta" value="<?php echo $Receta;?>" required>        
                    <br>                
                    <br>
                    <label for="Foto">SUBIR IMAGEN</label><br>
                    <input type="hidden" name="MAX_FILE_SIZE">
                    <input type="file" name="Foto" value="<?php echo $Foto;?>" required> 
                    <br>                
                    <br> 
                    <button type="submit" name="NuevaRecta">Añadir Nueva Recta</button>
                            
            </form>
        
        </div>
        <?php            
        } 
    }else {
        ?>
        <div class="mainTitleBO"><h1>BIENVENIDO A BACKOFFICE</h1></div>
        <div class="containerBO">            
            <h3>SUBIR NUEVA RECETA</h3>            
            <form action="SubirReceta.php" method="POST" ENCTYPE="multipart/form-data">        
                    
                    <label for="Titulo">TITULO DE RECETA</label><br>
                    <input type="text" name="Titulo" value="<?php echo $Titulo;?>"required>
                    <br>
                    <br>
                    <label for="Estaction">ESTACIÓN</label><br>
                    <select name="Estaction" value="" required>
                        <option value="primavera">Primavera</option>
                        <option value="verano">Verano</option>
                        <option value="otono">Otoño</option>
                        <option value="invierno">Invierno</option>
                    </select>     
                    <br>
                    <br>                    
                    <label for="Receta">SUBIR RECETA (Formato: receta.txt)</label><br>
                    <input type="hidden" name="MAX_FILE_SIZE">
                    <input type="file" name="Receta" value="<?php echo $Receta;?>" required>        
                    <br>                
                    <br>
                    <label for="Foto">SUBIR IMAGEN</label><br>
                    <input type="hidden" name="MAX_FILE_SIZE">
                    <input type="file" name="Foto" value="<?php echo $Foto;?>" required> 
                    <br>                
                    <br> 
                    <button type="submit" name="NuevaRecta">Añadir Nueva Recta</button>
                            
            </form>
        
        </div>
        <?php            
        } 
             
    ?>

</body>
</html>
