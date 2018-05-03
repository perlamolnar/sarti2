<?php
 	        
    //comprobo si esta inicializado la session
    if (!isset($_SESSION['cfg'])){
	    $_SESSION['cfg']=initCfg();  //si sí/no esta inicializado la session, vamos a function initCfg =>iniciarConfiguration
	    //$_SESSION es un "array" y "cfg" es el valor que la funcion me devuelve
}
?>