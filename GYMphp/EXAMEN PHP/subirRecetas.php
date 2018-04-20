<?php   
// session_start();

//     $TIPO= "";
//     $USER= ""; 

//         if (isset($_SESSION["username"]) && ($_SESSION['tipo'] == "admin"||$_SESSION['tipo'] == "user")  ) {
//             $TIPO= $_SESSION['tipo'];
//             $USER= $_SESSION['username'];                  
//         }else{
//         header("Location:index.php");
//      }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>    
     
    
</head>
<body>
	
<div>
   
    <?php 
        include("php/functions.php");           
                    
        $Titulo="";
        $estacion="";
        $Receta=""; 
        $Foto="";
        $extension="";
        $FechaActual="";
        $mensajeERROR="";

        //CODOGO DE ERRORES
        $codigoERROR="";
        if (isset ($_GET['codigoERROR'])) {
            $numERROR=$_GET['codigoERROR'];
            switch ($numERROR) {
                case 1:
                   $mensajeERROR="<p class=\"red\">ERROR! Este TITULO YA EXISTE! Da otro titulo!</p>";
                    break;

                case 2:                   
                    $mensajeERROR="<p class=\"red\">ERROR! La extencion de tu archivo receta NO termina en .txt</p>";
                    break;

                case 3:                   
                    $mensajeERROR="<p class=\"red\">ERROR! La extencion de tu imagen NO es correcta.</p>";
                    break;

                case 4:
                   $mensajeERROR="<p class=\"red\">ERROR! No se ha podido subir el fichero!</p>";
                    break;             
                
            }
        }//fin de codigo errores

       
        if(isset($_POST['NuevaRecta'])){//the "name" of the button submit. Recoge los valores del formulario
            $Titulo = $_POST['Titulo'];
            $estacion= $_POST['estacion'];
            $Receta= $_FILES['Receta']['name'];
            $Foto= $_FILES['Foto']['name'];            
            $FechaActual= date('d - m - Y');
            $idUnico= time(); 
            
        //comprobamos si el TITULO YA EXISTE O NO:
                
            $resultado = checkTitulo($estacion,$Titulo);
            
            if ($resultado!=1) {                        
                header("Location: subirRecetas.php?codigoERROR=1");
            } 
                    
        //comprobamos si LA EXTENCIÓN es .txt
            
            $resultadoExtencion = checkTXT($Receta);

            if ($resultadoExtencion!=0) {
                
                header("Location: subirRecetas.php?codigoERROR=2");
            }              
                
            
                if (is_uploaded_file($_FILES['Receta']['tmp_name']) )  //devuelve un boleano
                {//si se ha subido el fichero de la Receta ….                                  

                    $nombreDirectorio= "fichas/RecetasTEXTO/".$estacion."/";    //le asignamos la ruta                
                    //$nombreFichero= $idUnico. "-" . $_FILES['Receta']['name'];
                    $Titulo = trim($Titulo);//qutar espacio planco del principio y al final
                    $nombreFichero =$Titulo.".txt"; //repalzamos el nombre con el Titulo + dar la extencion
                    $nombreCompletoReceta= $nombreDirectorio. $nombreFichero;

                    //move_uploaded_file ( string $filename , string $destination ) devuelve booleano
                    move_uploaded_file(
                        $_FILES['Receta']['tmp_name'],
                        $nombreCompletoReceta);                     

                    if (is_uploaded_file($_FILES['Foto']['tmp_name']))  //devuelve un boleano
                    {  //si se ha subido el fichero Foto….                

                        $nombreDirectorio= "img/";               
                        

                        //$extension = end(explode(".", $_FILES['Foto']['name']));   //esto no funciona por algo...
                        $extension = substr($Foto,strripos($Foto,".")+1);

                        //echo $extension;
                        $fotoOk = checkImage($_FILES['Foto']['name']);
                        if ($fotoOk==0) {
                            header("Location: subirRecetas.php?codigoERROR=3");
                        }
                        //echo $extension;
                        $nombreFoto=$Titulo.".". $extension;
                        
                        $nombreCompletoFoto= $nombreDirectorio. $nombreFoto;
                        //echo $nombreCompletoFoto;

                        move_uploaded_file(
                            $_FILES['Foto']['tmp_name'], 
                            $nombreCompletoFoto); 
                        
                    }else{ 
                        //print("<h2>No se ha podido subir el fichero</h2>");
                        header("Location: subirRecetas.php?codigoERROR=4");                               
                    }

            }else{  
                //print("<h2>No se ha podido subir el fichero</h2>");
                header("Location: subirRecetas.php?codigoERROR=4");              
            }       
        //Pintamos el resultado aquí:
        ?>
                        <div class="mainTitle">
                            
                            <h2>NUEVA RECETA SUBIDO CON EXITO</h2></div>
                            <div class='newProduct'>                             
                                
                                
                                <strong>ESTACIÓN: </strong>
                                <?php echo $estacion ?>
                                <br><br>
                                
                                <strong>RECETA: </strong>
                                    <?php
                                        $newRececta=file($nombreCompletoReceta); //en la file()function ponemos la ruta al fichero  
                                            foreach($newRececta as $line){         //guardamos su contenido/value (texto) en $line 
                                            echo ($line)."<br>"; //pintamos $line en la página
                                            }   
                                    ?>                 
                                <br><br>

                                
                                <?php //Foto de imagen:
                                echo "<img src=\"$nombreCompletoFoto\" alt=\"Foto de nueva receta\">" 
                                ?>
                                <!-- <strong>FOTO: </strong> -->
                                                                
                                

                                
                                <br><br>               
    
                                <strong>FECHA DE SUBIDA: </strong>
                                <?php echo $FechaActual?>
                                <br><br>
                               
                            </div>
                       </div>

                    <?php
        
        


        }//fin de isset NuevaReceta
        else {
            ?>
                <div class="containerBO">            
                    <h2>SUBIR NUEVA RECETA</h2>  
                    <span><?php echo $mensajeERROR ?></span>          
                    <form action="subirRecetas.php" method="POST" ENCTYPE="multipart/form-data">        
                            
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
            
    ?>

</body>
</html>