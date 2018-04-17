<?php
    session_start();

    unset($_SESSION["username"]);
    unset($_SESSION["password"]);

    session_unset(); 
    session_destroy();

    echo 'You have cleaned session';
    header('Refresh: 2; URL = login.php');
?>

