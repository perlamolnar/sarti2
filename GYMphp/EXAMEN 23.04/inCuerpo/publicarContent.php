<div class="obras"> 
<?php     
$files=getFiles($dir);     
foreach ($files as $file) {         
	$filename = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
	//echo "<h2><strong>".$filename."</strong></h2><br><br>";         
	//echo "<img src=\"$dir2/$filename.jpg\" class=\"imgobra\" alt=\"$filename\" class=\"center\"> <br>";
	$filepath=$dir."/".$file;         
	$content = file_get_contents($filepath,FILE_USE_INCLUDE_PATH);         
	//echo $content."<br><br>";
	?>

	<div class="container">
					<table border="1">
					<!-- <thead>
					<th>Titulo</th><th>Descripcion</th><th>Foto</th><th>Delete</th>
					</thead> -->
					
					<tr>
						<td>
							<?php echo "<img src=\"$dir2/$filename.jpg\" class=\"imgobra\" alt=\"$filename\" class=\"center\"> <br>"; ?>					
						</td>						
						
						<td>
							<?php echo "<h2><strong>".$filename."</strong></h2><br><br>"; ?>
							<?php echo $content."<br><br>"; ?>						
						</td>
						</tr>
					</table>
	</div>
	
	

<?php

} 
?> 
</div>
