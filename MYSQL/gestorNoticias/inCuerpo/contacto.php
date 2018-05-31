<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/contacto.js"></script>

</head>
<body>
    <h1>CONTACTOS</h1>

    <div class="container" style="padding-top: 70px;min-height: 800px">
                            
        <table id="listado">
            <thead class="fijo">
                <tr>                
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Email</th>  
                </tr>
            </thead>
            <tbody >

            </tbody>
        </table>

        <div class="pagination">
            <button href="#">&laquo;</button>
                <?php            
                    // for ($i=1; $i <= $total_paginas ; $i++) {                
                    // echo "<button id='paginaActual' value='$i' href=\"#\">$i</button>";                  
                    // }
                ?>       
            <button href="#">&raquo;</button>
        </div>			
    </div>
</body>
</html>







