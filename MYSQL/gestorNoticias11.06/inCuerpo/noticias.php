<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/Noticias.js"></script>
</head>
<body>

    
<h1>ÚLTIMAS NOTICIAS</h1>

<div class="row">

	<div class="halfBox"><button id="descargarNoticias">TODAS LAS NOTICIAS EN PDF</button></div>

	<div  class="halfBox">
<!-- 		
		<button id="NoticiasPorFecha">NOTICIAS EN PDF POR FECHA</button> -->

		<form class="formContainer" action="php/registrar.php" method="POST">        
				
				<label for="Fecha">Articulos en PDF por Fecha</label><br>
				
				<select id="FechaOptions">
					
					
				</select>
				<button type="submit" id="registrar" name="registrar">ENVIAR</button> 
				<br>
				<br>       
			
		</form>
	</div>
</div>








	<div class="row">
		<div class="hide-on-small-only" style="margin-top: 1%; font-size:15px;">
			<div class="container">

				<div id="menuArticulos" class="">
					<h2>ARTICULOS</h2>       
					<span id="menuTitulo"></span>
				</div>
			
				<div id="Articulos" class="">                
					
				</div> 
			
			</div> 
		</div>			        
	</div>


</body>
</html>

