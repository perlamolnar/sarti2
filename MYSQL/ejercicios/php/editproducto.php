    <?php  
        $ID = $_POST['Id_producto'];
        $Nombre = $_POST['Nombre'];
        $Descripcion= $_POST['Descripcion'];
        $Precio= $_POST['Precio'];
        $Fichero= $_FILES['Fichero']['name'];  
        

        if (is_uploaded_file($_FILES['Fichero']['tmp_name'])) //devuelve un boleano
        {//si se ha subido el fichero….  
 echo "hola1";
            $nombreDirectorio= "../img/";            
            $nombreFichero= $Nombre.".jpg"; //damos el mismo nombre que el nombre del producto
            $nombreCompleto= $nombreDirectorio. $nombreFichero;
            //echo $nombreCompleto;
 echo "hola2";
            move_uploaded_file(
                $_FILES['Fichero']['tmp_name'], 
                $nombreDirectorio. $nombreFichero);  

 echo "hola3";
            $conexion = mysqli_connect ('localhost', 'root', 'perla', 'ejercicios') or die ("No se puede conectar con el servidor".mysqli_error($conexion));  
            //se puede hacer un include(conexion.php) preparado con los datos de conection. 

/*             $sql="UPDATE productos SET Nombre='$Nombre',Descripcion='$Descripcion',Precio='$Precio' WHERE Id_producto=$ID"; */

            //echo $sql;

                        $sql="UPDATE productos SET Nombre='$Nombre',Descripcion='$Descripcion',Precio='$Precio',Foto='$nombreFichero' WHERE Id_producto=$ID";

            $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));

                if ($consulta) {
                    echo "ok";
                } else {
                    echo "Error";
                }

                mysqli_close($conexion);

            }else{
                echo "error";
            }
               
           /*  echo "
            
                    <div><h1>NUEVO PRODUCTO SUBIDO CORRECTAMENTE</h1></div>
                        <div>

                            <div class='newProduct'><strong>NOMBRE DE PRODUCTO: </strong>
                                $Nombre
                                <br><br>

                                <strong>DESCRIPCIÓN: </strong>
                                $Descripcion
                                <br><br>
                                
                                <strong>PRECIO: </strong>
                                $Precio
                                €
                                <br><br>

                                <strong>ARCHIVO: </strong>
                                $nombreFichero 
                                <br><br>                                
                            </div> 

                            <div class=\"divIMG\">
                                <img src=\"$nombreDirectorio$nombreFichero\" alt=\"$Nombre\" width=\"50%\">
                            </div>
                        </div>   
                         <a href=\"../index.php\">VOLVER</a>

                    ";

            mysqli_close($conexion);


        }
        else{
            print("No se ha podido subir el fichero\n");

        } */
                   



    ?>


