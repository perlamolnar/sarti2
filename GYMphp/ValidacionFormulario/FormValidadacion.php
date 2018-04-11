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
    include("functions.php"); 
        $ERRORnombre="";
        $ERRORemail="";
        $ERRORedad=""; 
        $yaSePuedeEnviar=""; 
        
        $ErrorName=1;
        $ErrorAge=1;
        $ErrorMail=1;
        

    //recuperamos variables que viene del formulario 
        //isset para utilizar el boton "enviar"
            if (isset($_POST["validar"])){ //the "name" of the button submit
                 
                if (empty($_POST["Nombre"] )) {
                    $ERRORnombre = "Es obligatorio rellenar el campo de NOMBRE!";
                    $Nombre = "";
                    $ErrorName=1;
                } else {
                    $Nombre=$_POST["Nombre"];
                    $ErrorName=0;
                } 
                
                if (empty($_POST["Email"] )) {
                    $ERRORemail = "Es obligatorio rellenar el campo de Email!";
                    $Email = "";
                    $ErrorMail=1;
                } else {
                    $Email=$_POST["Email"];
                    $ErrorMail=0;
                } 

                if (!empty($_POST["Edad"] )) {
                    $Edad=$_POST["Edad"];  
                    $resultado=CheckAge($Edad);
                    

                    if ($resultado==0) {
                        $Edad=$_POST["Edad"]; 
                        $ErrorAge=0; 

                    }elseif($resultado==1) {
                        $Edad="";
                        $ERRORedad = "Eres menor de 18 años!!!";
                        $ErrorAge=1;

                    }else {
                       
                        $ERRORedad = "Error! Los caracteres no son númericos!Prueba de nuevo!";
                        $Edad="";
                        $ErrorAge=1;
                    }                 
                                       
                } else {
                    $Edad ="";
                    $ErrorAge=0;

                } 

                $Apellidos=$_POST["Apellidos"]; 
                $Mensaje=$_POST["Mensaje"];

                
                if ($ErrorName==1 && $ErrorMail==1 && $ErrorAge==1) {

                    $yaSePuedeEnviar="";
                    
                    } else {
                        $yaSePuedeEnviar= "<hr><br><br>La valoración ha sido con exito, todos los campos estan correctos.<br><br>";    
                        $yaSePuedeEnviar .= "<button type=\"submit\" name=\"enviar\">ENVIAR</button>";
                                
                }                    
             
            }else {
                $Nombre="";
                $Apellidos="";        
                $Edad="";
                $Email="";
                $Mensaje="";

            }
        
        
                    
        
    
        ?>


<h1>FORMULARIO CON VALIDACION EN PHP</h1>
<br>
<br>
<h3>Rellena los campos para enviar el formulario</h3>
<br>          
<form action="" method="POST">
        <h4></h4>
        
        <label for="Nombre">Nombre *</label>
        <input type="text" name="Nombre" value="<?php echo $Nombre;?>">
        <?php echo $ERRORnombre;?>
        <br>
        <br>
        <label for="Apellidos">Apellidos</label>
        <input type="text" name="Apellidos" value="<?php echo $Apellidos;?>">
        <br>
        <br>
        <label for="Edad">Edad</label>
        <input type="text" name="Edad" value="<?php echo $Edad;?>">
        <?=  $ERRORedad;?>
        <br>
        <br>
        <label for="Email">Email *</label>
        <input type="email" name="Email" value="<?php echo $Email;?>">
        <?=  $ERRORemail;?>
        <br>
        <br>
        <label for="Mensaje">Mensaje</label><br>
        <textarea name="Mensaje" id="Mensaje" cols="30" rows="10" value="<?php echo $Mensaje;?>"></textarea>
        <br>
        <p>* Campos obligatorios</p>
        <p>Aviso: Solo para majores de edad 18 años.</p>
        <br>
        <button type="submit" name="validar">VALIDAR</button>
        
        <?php  
            echo $yaSePuedeEnviar;
        ?>
</form>




</body>
</html>
