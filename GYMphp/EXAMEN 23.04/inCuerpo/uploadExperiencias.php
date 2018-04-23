<?php 
if($subsec=="uploading"){
	if(uploadFiles($_POST['sec'])==true){ echo "<h1>Archivo esta subido con exito.</h1> ";} 
	else{ echo "<h1>ERROR al subir el archivo.</h1> ";} 
}
else{
?>
<div class="container">
<form id="upload" action="index.php" method="post" enctype="multipart/form-data">
	<h2>ELIGIR ARCHIVOS PARA SUBIR EXPERIENCIAS:</h2>
	<br><br>
	AÑADIR DESCRIPCIÓN: 
	<input type="file" name="fileToUpload" id="fileToUpload"  required><br><br>
	<input type="submit" value="uploadingExperiencias" name="seccio">
    <br><br><br>
</form>
</div>
<?php 
} 
?>