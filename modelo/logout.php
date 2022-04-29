<?php
//Archivo par cerrar sesión exitosamente

    include_once 'user_session.php';

    $userSession = new UserSession();
    $userSession->closeSession();
    //echo '<script>alert("¡Hasta luego!")</script>';
    header("location:../index.php");


?>