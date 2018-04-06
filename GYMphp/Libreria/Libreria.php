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

        $fecha_actual = strtotime(date("m/d"));
        $fecha_entrada = strtotime("19-11-2008 21:00:00");
        
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
 
    return '/ruta/imagen/' . $estacion . '.jpg';
 
}






?>