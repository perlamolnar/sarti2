<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>    
    <link rel="stylesheet" href="../css/style.css">   
    
</head>
<body>
	
<div id="cuerpoBO">
   
    <?php 
        include_once("headBO.php");        
        include("../php/checkTituloTXT.php");
        include("../php/checkTXT.php");
    
        $Titulo="";
        $estacion="";
        $Receta=""; 
        $Foto="";
        $extension="";
        $FechaActual="";
        
        if(isset($_POST['NuevaRecta'])){//the "name" of the button submit. Recoge los valores del formulario
            $Titulo = $_POST['Titulo'];
            $estacion= $_POST['estacion'];
            $Receta= $_FILES['Receta']['name'];
            $Foto= $_FILES['Foto']['name'];            
            $FechaActual= date('d - m - Y');
            $idUnico= time();
            $ERRORFATAL="1";

            //ANTES de subir el file 
                //comprobamos si el TITULO YA EXISTE O NO:
                    
                    $resultado = checkTitulo($estacion,$Titulo);
                    
                    if ($resultado==1) {
                        $controlTitulo = "<p class=\"green\">El TILULO es CORRECTO, no hay peligro de duplicación.</p>";
                        $ERRORFATAL="0";
                    } else {
                        $controlTitulo = "<p class=\"red\">ERROR! Este TITULO YA EXISTE! Da otro titulo!</p>";
                        $ERRORFATAL="1";
                    } 
                        
                //comprobamos si LA EXTENCIÓN es .txt
                
                    $resultadoExtencion = checkTXT($Receta);

                    if ($resultadoExtencion==0) {
                        $mensajeExtencion = "<p class=\"green\">La receta tiene la extención correcta.</p>";
                        $ERRORFATAL="0";
                    } else {
                        $mensajeExtencion = "<p class=\"red\">ERROR! La extencion de tu archivo receta NO termina en .txt</p>";
                        $ERRORFATAL="1";
                    }              
                    
        //Si el TITULO y la EXTENCION SON CORRECTAS => if $ERRORFATAL== 0
        //pondramos el TITULO para el nombre del imagen y la receta.               
   
            if($ERRORFATAL!=1){
                if (is_uploaded_file($_FILES['Receta']['tmp_name']) )  //devuelve un boleano
                {//si se ha subido el fichero de la Receta ….                                  

                    $nombreDirectorio= "../fichas/RecetasTEXTO/".$estacion."/";    //le asignamos la ruta                
                    //$nombreFichero= $idUnico. "-" . $_FILES['Receta']['name'];
                    $Titulo = trim($Titulo);//qutar espacio planco del principio y al final
                    $nombreFichero =$Titulo.".txt"; //repalzamos el nombre con el Titulo + dar la extencion
                    $nombreCompletoReceta= $nombreDirectorio. $nombreFichero;

                    //move_uploaded_file ( string $filename , string $destination ) devuelve booleano
                    move_uploaded_file(
                        $_FILES['Receta']['tmp_name'],
                        $nombreCompletoReceta);                     

                    if (is_uploaded_file($_FILES['Foto']['tmp_name']))  //devuelve un boleano
                    {//si se ha subido el fichero Foto….                

                        $nombreDirectorio= "../img/";                        
                        $extension = end(explode(".", $_FILES['Foto']['name']));
                        //echo $extension;
                        $nombreFoto=$Titulo. $extension;
                        $nombreCompletoFoto= $nombreDirectorio. $nombreFichero;
                        $Foto = trim($Foto);

                        move_uploaded_file(
                            $_FILES['Foto']['tmp_name'], 
                            $nombreCompletoFoto); 
                        
                        ?>
                        <div class="mainTitle">
                            
                            <!-- <h2>NUEVA RECETA SUBIDO CON EXITO</h2></div> -->
                            <div class='newProduct'>
                                
                                <h2>DATOS PARA ANALIZAR</h2>

                                <strong>TITULO: </strong>
                                <?php echo $Titulo?>
                                <br><br>
    
                                <strong>ESTACIÓN: </strong>
                                <?php echo $estacion ?>
                                <br><br>
                                
                                <strong>RECETA: </strong>
                                <?php echo $Receta?>                    
                                <br><br>
    
                                <strong>FOTO: </strong>
                                <?php echo $Foto ?>
                                <br><br>               
    
                                <strong>FECHA DE SUBIDA: </strong>
                                <?php echo $FechaActual?>
                                <br><br>

                                <h2>VALORACIÓN DEL PROCESO</h2>

                                <strong>CONTROL TITULO PARA NO DUPLICAR  (Si es .txt): </strong>
                                <?php echo $controlTitulo?>
                                <br><br> 
                                
                                <strong>EXTENCIÓN DE LA RECETA (Si es .txt): </strong>
                                <?php echo $mensajeExtencion?>
                                <br><br>

                            </div>
                       </div>

                    <?php
                        
                }else{ print("<h2>No se ha podido subir el fichero</h2>");
                    
                    ?>        
                        <div class="containerBO">            
                            <h3>SUBIR NUEVA RECETA</h3>            
                                <form action="SubirReceta.php" method="POST" ENCTYPE="multipart/form-data">        
                                    
                                    <label for="Titulo">TITULO DE RECETA</label><br>
                                    <input type="text" name="Titulo" value="<?php echo $Titulo;?>"required>
                                    <br>
                                    <br>
                                    <label for="estaction">ESTACIÓN</label><br>
                                    <select name="estacion" required>
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
                }
            }else{  
            ?>        
                <div class="containerBO">            
                    <h3>SUBIR NUEVA RECETA</h3>            
                    <form action="SubirReceta.php" method="POST" ENCTYPE="multipart/form-data">        
                            
                            <label for="Titulo">TITULO DE RECETA</label><br>
                            <input type="text" name="Titulo" value="<?php echo $Titulo;?>"required>
                            <br>
                            <br>
                            <label for="estaction">ESTACIÓN</label><br>
                            <select name="estacion" required>
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

        
        <div class="containerBO">            
            <h3>SUBIR NUEVA RECETA</h3>            
            <form action="SubirReceta.php" method="POST" ENCTYPE="multipart/form-data">        
                    
                    <label for="Titulo">TITULO DE RECETA</label><br>
                    <input type="text" name="Titulo" value="<?php echo $Titulo;?>"required>
                    <br>
                    <br>
                    <label for="estaction">ESTACIÓN</label><br>
                    <select name="estacion" required>
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
        include_once("pieBO.php");
    ?>
</div> 

</body>
</html>
