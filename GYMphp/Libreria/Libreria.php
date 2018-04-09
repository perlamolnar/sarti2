<?php
    //$text=$_POST["cadena"];
    //echo $cadena."<br>";
    //Pintar($text);

    function Pintar($text){
        echo $text;
    }

    function textParrafo($text){
        $parrafo = "<p>$text</p>";
        return $parrafo;
    }

    function textH1($text){
        $mainTitle = "<h1>$text</h1>";
        return $mainTitle;
    }

    function textParrafoLink($text){
        $Link = "<p><a href>$text</a></p>";
        return $Link;
    }

    function estacion(){        
        
        $mesactual = date('m/d'); 
        //$mesactual = 12;
        //echo $mesactual;
        $estacion ="";

        $invierno = array(1, 2, 3);
        $primavera = array(4, 5, 6);
        $verano = array(7, 8, 9);
        $otono = array(10, 11, 12);


        switch (true) {
            case ($mesactual<=3):
                $estacion="invierno";
                break;
            case ($mesactual<=6):
                $estacion="primavera";
                break;
            case ($mesactual<=9):
                $estacion="verano";
                break;
            case ($mesactual<=12):
                $estacion="otono";
                break;
    }
    
    return $estacion;   

    }

    function foto_de_estacion() {        
 
        // Guardamos en una variable el día del año
        $dia = date('z'); // Por ejemplo: "80" (empieza por 0)
        
        //mirar si el año es bisiesto:
        $ano = date('L');  //Si es un año bisiesto devuelve	1 y si no, devuelve 0.

            if ($ano ==1){  //año bisiesto
                
                // Si la fecha actual es anterior al 21 de marzo
                if ( $dia < 80 ) {
                    $estacion = 'invierno';
            
                // Si la fecha actual es anterior al 22 de junio
                } elseif ( $dia < 173 ) {
                    $estacion = 'primavera';
            
                // Si la fecha actual es anterior al 23 de septiembre
                } elseif ( $dia < 266 ) {
                    $estacion = 'verano';
            
                // Si la fecha actual es anterior al 19 de diciembre
                } elseif ( $dia < 353 ) {
                    $estacion = 'otono';
            
                // Si no es ninguna de las anteriores
                } else {
                    $estacion = 'invierno';
            
                }

            } else {               

                // Si la fecha actual es anterior al 21 de marzo
                if ( $dia < 79 ) {
                    $estacion = 'invierno';
            
                // Si la fecha actual es anterior al 22 de junio
                } elseif ( $dia < 172 ) {
                    $estacion = 'primavera';
            
                // Si la fecha actual es anterior al 23 de septiembre
                } elseif ( $dia < 265 ) {
                    $estacion = 'verano';
            
                // Si la fecha actual es anterior al 19 de diciembre
                } elseif ( $dia < 352 ) {
                    $estacion = 'otono';
            
                // Si no es ninguna de las anteriores
                } else {
                    $estacion = 'invierno';
            
                }
            }

        
        $imagen = "<img src = \"img/$estacion.jpg\">";
        return $imagen;
 
    }

    function cordenadas($cordenada1,$cordenada2){

        $cordenadasX = $cordenada1[0]-$cordenada2[0];
        $cordenadasX = pow($cordenadasX,2);

        $cordenadasY = $cordenada1[1]-$cordenada2[1];
        $cordenadasY = pow($cordenadasY,2);

        $distancia = sqrt($cordenadasX+$cordenadasY);
        
        echo "La distancia entre los puntos ";
        //print_r($cordenada1);
        //echo " y ";
        //print_r($cordenada2);
        echo " es: ";
        
        return $distancia;
    }

    function summar($Numeros){
        $resultado=0;
        for ($i=0; $i < count($Numeros) ; $i++) { 
            $resultado += $Numeros[$i];         
        } 
        echo "La summa de tus numeros es: ";              
        return $resultado;
    }
    
    function traductor($idioma){
        switch ($idioma) {
            case 'hungaro':
                $resultado="Szia Világ!";
                break;
            
                case 'español':
                $resultado="Hola Mundo!";
                break;

                case 'hungaro':
                $resultado="Szia Világ!";
                break;

                case 'Ingles':
                $resultado="Hello world!";
                break;

                case 'frances':
                $resultado="Bonjour le monde!";
                break;

                case 'catalan':
                $resultado="Hola món!";;
                break;

                case 'catalan':
                $resultado="Hola món!";
                break;

                case 'checo':
                $resultado="Dobrý den svět";
                break;
            
                default:
                echo "La lengua pedida esta desconocida.";
                break;
        }
        echo "Hola mundo en $idioma es: ";
        return $resultado;
    }

    function ParImpar($number){

        $number = round($number);

        if ($number%2!==0) {
            $resultado = "Impar";
        } 
        else {
            $resultado = "Par";
        }

        echo "El número $number es: ";                     
        return $resultado;
    }

    function extencionFichero($fichero){
        //echo $fichero;
        $fichero = strtoupper($fichero);
        $array = explode(".", $fichero);
        
        //print_r ($array);
        //echo $array[1];
        $extencion = $array[1];
              

        switch ($extencion) {
            case 'PDF':
            echo "Fichero del tipo $extencion, formato de almacenamiento para documentos digitales.";
            break;

            case 'EXE':
            echo "Fichero del tipo $extencion, formato de almacenamiento para documentos digitales.";
            break;

            case 'JPG':
            echo "Fichero del tipo $extencion (Joint Photographic Group), formato de almacenamiento para imagen.";
            break;

            case 'PNG':
            echo "Fichero del tipo $extencion, formato de almacenamiento para documentos graficos.";
            break;

            case 'XLS':
            echo "Fichero del tipo $extencion, formato de almacenamiento para documentos hoja de cálculo de Microsoft Office Excel.";
            break;

            case 'CSV':
            echo "Fichero del tipo $extencion (Comma Separated Values), formato de almacenamiento para documentos de valores separados por comas de Microsoft Office Excel. Cada uno de los datos que conforman están separados por una coma del siguiente.";
            break;
             
            case 'SQL':
            echo "Fichero del tipo $extencion, formato de almacenamiento para documentos Lenguaje de consulta estructurado.";
            break;

            case 'JSON':
            echo "Fichero del tipo $extencion (JavaScript Object Notation), un formato de texto ligero para el intercambio de datos.";
            break;

            case 'PY':
            echo "Fichero del tipo $extencion, formato de almacenamiento para documentos de script de Python.";
            break;
            
            default:
                echo "La extencion no esta reconocido.";
                break;
        }
       
        
    }








?>