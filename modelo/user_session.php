<?php
//Archivo para gestionar las sesiones
class UserSession{
    
    public function __construct(){
        session_start();//La inicia automaticamente
    }

    public function setCurrentUser($user){//Asigna el usuario actual
        $_SESSION['user'] = $user;
    }
    public function getCurrentUser(){//Obtiene el usauario actual
        return $_SESSION['user'];
    }

    public function closeSession(){//Para cerrar sesión
        session_unset();
        session_destroy();
    }
}

?>