
<?php
if (isset($_POST[login])) {
    $username =$POST['username'];
    $password =$POST['password'];


        $username= $_POST['username'];
        $password= $_POST['password]';

        $conexion = mysqli_connect ('localhost', 'root', 'perla', 'empresa') or die ("No se puede conectar con el servidor".mysqli_error($conexion));
            
        $sql="SELECT * FROM login WHERE username='$username' AND password='$password'";

        $consulta= mysqli_query($conexion, $sql);

        $nfilas = mysqli_num_rows($consulta);

        mysqli_close($conexion);

        if ($nfilas>0) {
            $fila=mysqli_fetch_assoc($consulta);       
                    
                    $_SESSION['user']=$fila["username"];
                    $_SESSION['tipo']=$fila["tipo"]; 

                header("Location: home.php");
            
        } else {
        header("Location: index.php?er=1");
        //o poner una variable de error
        }

        
}
?>



<div> 
    <h2>Necesitamos el nombre del usuario y la contraseña</h2> <br>      
    <form class="login" action="index.php" method="POST">
        <div class="container">

            <?php //echo $avisoError; ?>

            <label for="username"><b>Username: </b></label>
            <input type="text" placeholder="Perla o Tom" name="username" required>
            <br>
            <br>
            <label for="password"><b>Password: </b></label>
            <input type="password" placeholder="123 / 789" name="password" required>
            <br>
            <br>
            <input type="submit" value="LOGIN" name="login">
            <br>
            <br>
        </div>
    </form>
</div>
