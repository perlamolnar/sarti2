<?php

session_start();
// include autoloader
require_once 'dompdf/autoload.inc.php';

include('../php/functions.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;

    $productoElegido=$_GET['productoElegido'];
    echo $productoElegido;

    //hacemos la consulta para crear el contenido para el PDF

        $conexion = connectBD(); 
        $sql = "SELECT * FROM productos WHERE Id_producto = $productoElegido;";	
        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la conexion".mysqli_error($conexion));

        $productoPintado ="";
        if (mysqli_num_rows($consulta)>0){
            while($fila=mysqli_fetch_assoc($consulta)){
                
                    $Id_producto= $fila['Id_producto'];
                    $Nombre= $fila['Nombre'];
                    $Descripcion= $fila['Descripcion'];
                    $Precio= $fila['Precio'];
                    $Foto= $fila['Foto'];                   
                    
                    $productoPintado =         
                    "<div><h2 id='TituloPDF'>". $Nombre ."</h2><br>
                    <hr>
                    </div>

                    <div id='ArticuloPDF' comment  style='page-break-after:always; float: left;'>
                    <img style='float: right;' id='Foto' width='400px' src='../img/productos".$Foto."' alt='". $Nombre."'>'". $Descripcion ."</div>";
                             
            } //fin de while                
        } //fin de if

//CONDENIDO que sera el pdf
$html = "<!DOCTYPE html>
<html>
<head>
	<title>ARTÍCULOS</title>
	<meta charset=\"utf-8\">
	<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">	
	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>	
	<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
	<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
	<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style.css\">	
</head>

        <div>    
        $productoPintado
        </div>   

</body>
</html>";
$filename = "PDF de Artículos";

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');  //portrait o landscape

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to download
$dompdf->stream($filename);

// Output the generated PDF to Browser
$dompdf->stream($filename,array("Attachment"=>0));

$output = $dompdf->output();
file_put_contents("file.pdf", $output);


?>