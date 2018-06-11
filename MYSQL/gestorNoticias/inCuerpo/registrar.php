
<div id="container">  
    <div id="contacto">
        <h1>REGISTRO</h1> 
    </div>	
</div>

<?php 

    //recuperamos variables que viene del formulario:
    if (isset($_POST["registrar"])){ 

        $Nombre=$_POST["Nombre"]; 
        $Telefono=$_POST["Telefono"];       
        $Direccion=$_POST["Direccion"]; 
        $Email=$_POST["Email"]; 
        $Username= $_POST['Username'];
        $Password= md5($_POST['Password']);
        $CodigoActivacion= md5($_POST['CodigoActivacion']);

    }       
    else {
        $Nombre="";
        $Telefono="";        
        $Direccion="";
        $Email="";                
        $Username="";
        $Password="";
        $CodigoActivacion="";
    }
    
?>

<br>          
<form class="formContainer" action="php/registrar.php" method="POST">        
        
        <label for="Nombre">Nombre</label><br>
        <input type="text" name="Nombre" value="<?php echo $Nombre;?>" required>        
        <br>
        <br>
        <label for="Telefono">Teléfono</label><br>
        <input type="text" name="Telefono" value="<?php echo $Telefono;?>" required>
        <br>
        <br>
        <label for="Direccion">Dirección</label><br>
        <input type="text" name="Direccion" value="<?php echo $Direccion;?>" required>        
        <br>
        <br>
        <label for="Email">Email</label><br>
        <input type="email" name="Email" value="<?php echo $Email;?>" required>       
        <br> <br> 
        <label for="Username">Usuario</label><br><br>
        <input type="username" id="Username" name="Username" value="<?php echo $Username;?>" required><br>
        <br>
        <label for="Password">Password</label><br>
        <input type="password" name="Password" id="Password" value="<?php echo $Password;?>" required><br>
        <br>        
        <br>

        <?php

        //Método con rand()
        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        } 

        generateRandomString();
        ?>

        <input type="text" name="CodigoActivacion" id="CodigoActivacion" value="<?php echo $randomString;?>" required><br>
        
        <button type="submit" id="registrar" name="registrar">REGISTRAR</button> 
        <br>
        <br>       
       
</form>


