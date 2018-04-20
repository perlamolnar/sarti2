      
<div> 
    <h2>Para enter en la página necesitamos el nombre del usuario y la contraseña</h2> <br>      
    <form action="index.php" method="POST">
        <div class="container">

            <?php //echo $avisoError; ?>

            <label for="username"><b>Username: </b></label>
            <input type="text" placeholder="Perla o Marc" name="username" required>
            <br>
            <br>
            <label for="password"><b>Password: </b></label>
            <input type="password" placeholder="123 / 987" name="password" required>
            <br>
            <br>
            <input type="submit" value="LOGIN" name="login">
            <br>
            <br>
        </div>
    </form>
</div>
