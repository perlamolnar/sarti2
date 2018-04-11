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
    //recuperamos variables que viene del formulario 
        //isset para utilizar el boton "enviar"
            if (isset($_POST["enviar"])){ //the "name" of the button submit
                
                if (empty($_POST["nombre"] )) {
                    $ERRORnombre = "Es obligatorio rellenar el campo de NOMBRE!";
                } else {
                    $Nombre=$_POST["Nombre"];
                } 
                
                if (empty($_POST["Email"] )) {
                    $ERRORemail = "Es obligatorio rellenar el campo de Email!";
                } else {
                    $Nombre=$_POST["Email"];
                } 

                if (!empty($_POST["Edad"] )) {
                    $resultado=CheckAge($Edad);

                    if ($resultado==0) {
                        $Edad=$_POST["Edad"];  
                    }elseif($resultado==1) {
                        $Edad="";
                        $ERRORedad = "Eres menor de 18 años!!!";
                    }else {
                       $Edad="";
                        $ERRORedad = "Error! Los caracteres no son númericos!Prueba de nuevo!";
                    }                 
                    
                    return $ERRORedad;
                }  

                $Apellidos=$_POST["Apellidos"]; 
                $Mensaje=$_POST["Mensaje"];
                
                echo $ERRORnombre;
                echo $ERRORemail;
                echo $ERRORedad;  
             
            }else {
                $Nombre="";
                $Apellidos="";        
                $Edad="";
                $Email="";
                $Mensaje="";

            }
           
            //return $resultado; 
        
    
        ?>
<h1>FORMULARIO CON VALIDACION EN PHP</h1>
<br>
<br>
<h3>Rellena los campos para enviar el formulario</h3>
<br>          
<form action="" method="POST">
        <h4></h4>
        <label for="Nombre">Nombre *</label>
        <input type="text" name="Nombre">
        <br>
        <br>
        <label for="Apellidos">Apellidos</label>
        <input type="text" name="Apellidos">
        <br>
        <br>
        <label for="Edad">Edad</label>
        <input type="text" name="Edad">
        <br>
        <br>
        <label for="Email">Email *</label>
        <input type="email" name="Email">
        <br>
        <br>
        <label for="Mensaje">Mensaje</label><br>
        <textarea name="Mensaje" id="Mensaje" cols="30" rows="10"></textarea>
        <br>
        <br>
        <button type="submit" name="enviar">ENVIAR</button>
        
</form>
<p>* Campos obligatorios</p>
<p>Aviso: Solo para majores de edad 18 años.</p>
</body>
</html>
