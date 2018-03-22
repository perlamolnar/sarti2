<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
        body{background:}
        .orange{background-color: darkorange;}
        .blue{background-color: lightblue;}

        
    </style>
</head>
<body>
<h1>TABLA1 DE MULTIPLICACIÓN</h1>
	<table border="1">
		
		<?php

            //$head="<tr><th></th></tr>"

			for ($i=1; $i < 11; $i++) {               
                
                print("<tr> ");                

                    for ($x=1; $x <11 ; $x++) { 
                        $resultado=$i*$x;
                        echo("<td>$resultado</td>");
                    }

                print("</tr> ");
            }
            
		?>

	</table>

<h1>TABLA2 DE MULTIPLICACIÓN</h1>
    <table border="1">
		
		<?php   
			for ($i=1; $i < 11; $i++) { 
                if ($i%2==0) {
                    $clasp="orange";
                } else {
                    $clasp="blue";
                }
                 
        ?> 

        <tr class="<?= $clasp?>">

        <?php for ($z=1; $z < 11; $z++) { ?> 
            
            <td><?= $i*$z?></td>

         <?php   } ?>
       
        
        </tr>        
        <?php   } ?>        
               

	</table>






</body>
</html>