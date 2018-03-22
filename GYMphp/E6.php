<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
    table {}
    </style>
</head>
<body>
	<table border="1">
		
		<?php

			for ($i=1; $i < 11; $i++) { 
                print("<tr> ");

                    for ($x=1; $x <11 ; $x++) { 
                        print("<th>$i</th> 
                    ");
                    }
                    
                print("</tr> ");
            }
            

		?>






	</table>
</body>
</html>