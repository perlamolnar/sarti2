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
    //include("php/contacto.php");
    include("php/functions.php");

            
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

                $Apellido=$_POST["Apellido"]; 
                $Username= $_POST['Username'];
                $Password= md5($_POST['Password']);

                
                if ($ErrorName==0 && $ErrorMail==0 && $ErrorAge==0) { 
                    $yaSePuedeEnviar= "<hr><br><br>La valoración ha sido con exito, todos los campos estan correctos.<br><br>"; 
                    $yaSePuedeEnviar .= "<button type=\"submit\" name=\"enviar\" formaction=\"php/contacto.php\">ENVIAR</button>";
                }                    
             
            }else {
                $Nombre="";
                $Apellido="";        
                $Edad="";
                $Email="";
                $Mensaje="";
                $Username="";
                $Password="";
            }
    
        ?>

<br>          
<form class="container" action="" method="POST">
        
        
        <label for="Nombre">Nombre *</label><br>
        <input type="text" name="Nombre" value="<?php echo $Nombre;?>">
        <?php echo $ERRORnombre;?>
        <br>
        <br>
        <label for="Apellido">Apellido</label><br>
        <input type="text" name="Apellido" value="<?php echo $Apellido;?>">
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
        <label for="Username">Usuario *</label><br><br>
        <input type="username" id="Username" name="Username" value="<?php echo $Username;?>" required><br>
        <br>
        <label for="Password">Password *</label><br>
        <input type="password" name="Password" id="Password" value="<?php echo $Password;?> required><br>
        <br>        
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

