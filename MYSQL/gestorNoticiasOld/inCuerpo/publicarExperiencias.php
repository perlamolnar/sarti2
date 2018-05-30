<div class="obras"> 
<?php     
$files=getFiles($dir);     
foreach ($files as $file) {         
	$filename = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);	
	$filepath=$dir."/".$file;         
	$content = file_get_contents($filepath,FILE_USE_INCLUDE_PATH);     
	?>

	<div class="container">
        <table border="0">										
            <tr>												
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
