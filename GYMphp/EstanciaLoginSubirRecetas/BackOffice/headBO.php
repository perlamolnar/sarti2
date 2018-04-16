<header id="headBO"> 
    <img id="leftIMG" src="../img/cocinera1.jpg" alt="Cocinera">   
    <h1>BIENVENIDO A BACKOFFICE</h1>
    <!-- <img id="rightIMG" src="../img/cocinero.jpg" alt="Cocinero">    -->
           
    <ul id="nav">
        <li><a class="active" href="indexBO.php">Home</a></li>
        <li><a href="loginBO.php">Login</a></li>
        <li><a href="SubirReceta.php">Subir Receta</a></li>
        <li><a href="#">Link1</a></li>
        <li><a href="#">Link2</a></li>
        <li><a href="#">Link3</a></li>    
        <li class="fecha">
            <?php
            // Prints the day, date, month, year, time, AM or PM
            echo date("l jS \of F Y h:i:s A");
            ?>
        </li>
    </ul>


</header>	



