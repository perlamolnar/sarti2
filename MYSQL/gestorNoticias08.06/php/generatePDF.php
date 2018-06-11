<?php
session_start();
// include autoloader
require_once 'dompdf/autoload.inc.php';

include('../php/functions.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;

//hacemos la consulta para crear el contenido para el PDF
        $conexion = connectBD(); 
        $sql="SELECT * FROM usuarios";  
        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la conexion".mysqli_error($conexion));
         $tbl_row ="";
        if (mysqli_num_rows($consulta)>0){
            while($fila=mysqli_fetch_assoc($consulta)){                 
               $tbl_row .= "<tr>";
                $tbl_row .= "<td>" . $fila['Id_usuario'] . "</td>";
                $tbl_row .= "<td>" . $fila['Nombre'] . "</td>";
                $tbl_row .= "<td>" . $fila['Email'] . "</td>";
                $tbl_row .= "<td>" . $fila['Telefono'] . "</td>";
                $tbl_row .= "<td>" . $fila['Direccion'] . "</td>";
                $tbl_row .= "<td>" . $fila['Username'] . "</td>";
                $tbl_row .= "<td>" . $fila['Tipo'] . "</td>";
                $tbl_row .= "</tr>";

            }                    
        }

//CONDENIDO que sera el pdf
$html = "<!DOCTYPE html>
<html>
<head>
	<title>NOTICIAS DE LECTORES</title>
	<meta charset=\"utf-8\">
	<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">	
	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>	
	<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
	<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
	<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style.css\">	
</head>
  <table  class=\"table-striped\">
            <thead class=\"fijo\">
                <tr>                
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Dirección</th> 
                    <th>Username</th>
                    <th>Tipo</th>  
                    <th>Editar</th>
                    <th>Borrar</th>                  
                </tr>
            </thead>
            <tbody >
                $tbl_row
            </tbody>
        </table>

</body>
</html>";
 $filename = "newpdffile";

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');  //portrait o landscape

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to download
$dompdf->stream($filename);

// Output the generated PDF to Browser
$dompdf->stream($filename,array("Attachment"=>0));

$output = $dompdf->output();
file_put_contents("file.pdf", $output);


?>