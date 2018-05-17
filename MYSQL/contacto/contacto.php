<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>    


<div id="container">  
    <div id="contacto">
        <h1>CONTACTO</h1> 
    </div>	
</div>

    <?php 
            
        $ERRORnombre="";
        $ERRORemail="";
        $ERRORedad=""; 
        $yaSePuedeEnviar=""; 
        
        $ErrorName=1;
        $ErrorAge=1;
        $ErrorMail=1;
        

    //recuperamos variables que viene del formulario 
        //isset para utilizar el boton "enviar"
            if (isset($_POST["validarContacto"])){ //the "name" of the button submit
                
                if (empty($_POST["Nombre"] )) {                    
                    $ERRORnombre = "<p class=\"red\">Es obligatorio rellenar el campo de NOMBRE!</p>";
                    $Nombre = "";
                    $ErrorName=1;
                } else {
                    $Nombre=$_POST["Nombre"];
                    $ErrorName=0;
                   
                } 
                
                if (empty($_POST["Email"] )) {
                    $ERRORemail = "<p class=\"red\">Es obligatorio rellenar el campo de Email!</p>";
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
                        $ERRORedad = "<p class=\"red\">Eres menor de 18 años!!!</p>";
                        $ErrorAge=1;

                    }else {
                       
                        $ERRORedad = "<p class=\"red\">Error! Los caracteres no son númericos!Prueba de nuevo!</p>";
                        $Edad="";
                        $ErrorAge=1;
                    }                 
                                       
                } else {
                    $Edad ="";
                    $ErrorAge=0;

                } //fin de control edad

                $Apellidos=$_POST["Apellidos"]; 
                $Mensaje=$_POST["Mensaje"];

                
                if ($ErrorName==0 && $ErrorMail==0 && $ErrorAge==0) { 
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

<br>          
<form class="container" action="index.php" method="POST">
        
        
        <label for="Nombre">Nombre *</label><br>
        <input type="text" name="Nombre" value="<?php echo $Nombre;?>">
        <?php echo $ERRORnombre;?>
        <br>
        <br>
        <label for="Apellidos">Apellidos</label><br>
        <input type="text" name="Apellidos" value="<?php echo $Apellidos;?>">
        <br>
        <br>
        <label for="Edad">Edad</label><br>
        <input type="text" name="Edad" value="<?php echo $Edad;?>">
        <?=  $ERRORedad;?>
        <br>
        <br>
        <label for="Email">Email *</label><br>
        <input type="email" name="Email" value="<?php echo $Email;?>">
        <?=  $ERRORemail;?>
        <br> <br> 
        <label for="username">Usuario *</label><br><br>
        <input type="username" id="username"><br>
        <br>
        <label for="password">Password *</label><br>
        <input type="password" name="password" id="password"><br>
        <br>
      

        <label for="Mensaje">Mensaje</label><br><br>
        <textarea name="Mensaje" id="Mensaje" cols="30" rows="10" value="<?php echo $Mensaje;?>"></textarea>
        <br>
        <p>* Campos obligatorios</p>
        <p>Aviso: Solo para majores de edad 18 años.</p>
        <br>
        <button type="submit" name="validarContacto">VALIDAR</button>
        
        <?php  
            echo $yaSePuedeEnviar;
        ?>
</form>


</body>
</html>

