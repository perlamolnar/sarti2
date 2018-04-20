<?php
    

   if (isset($TIPO)) {
    //mostrar lo comun   

    
    
         

    if($TIPO=="admin"){
        //haz una cosa, añadir parte de admin

        if (isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];                     
            include("$pagina.php");
        }
        
        ?>
       
        <h2>BORRAR FICHEROS</h2>       
        
        <?php 
        //$ficheros = ListRelatos();
        //GetContenido($ficheros);             
        
        
        
        
    }
    elseif ($TIPO=="user") {
        //solo muestra relatos
        ?>
        
        <?php 
          
      
    }else{
        //mostrar formulario 
        include("login.php");   
        
    }
}
?>
     


    
