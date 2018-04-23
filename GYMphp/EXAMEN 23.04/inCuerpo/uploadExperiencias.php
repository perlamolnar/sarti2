<?php 
if($subsec=="uploading"){
	if(uploadFiles($_POST['sec'])==true){ echo "<h1>Archivo esta subido con exito.</h1> ";} 
	else{ echo "<h1>ERROR al subir el archivo.</h1> ";} 
}
else{
?>
<div class="container">
<form id="upload" action="index.php" method="post" enctype="multipart/form-data">
	<h2>ELIGIR ARCHIVOS PARA SUBIR:</h2>
	<br><br>
	AÑADIR DESCRIPCIÓN: 
	<input type="file" name="fileToUpload" id="fileToUpload"  required><br><br>
	AÑADIR IMAGEN: 
	<input type="file" name="imageToUpload" id="imageToUpload" required><br><br>
	<input class="radioBtn" type="radio" name="sec" value="experiencias" CHECKED>Peli
	<!-- <input class="radioBtn" type="radio" name="sec" value="agua">Serie
	<input class="radioBtn" type="radio" name="sec" value="montana">Libro -->
	<input type="submit" value="uploadingExperiencias" name="seccio">
</form>
</div>
<?php 
} 
?>