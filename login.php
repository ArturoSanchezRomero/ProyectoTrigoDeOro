<?php
include_once 'modelo/user.php';
include_once 'modelo/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){//Valida si ya hay una sesión iniciada
    $user->setUser($userSession->getCurrentUser());//Para no perder la sesión iniciada y seguir usandola hasta que se cierre
    include_once 'principal.php';
}else if(isset($_POST['usuario']) && isset($_POST['password'])){//Validación de lo obtenido del formulario
    $userForm = $_POST['usuario'];
    $passForm = $_POST['password'];

    if($user->userExists($userForm,$passForm)){//Valida si existe el usuario
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'principal.php';//Da acceso a la página principal
    }else{//Si no existe o no mandan datos, manda este mensaje de error
        echo '<script>alert("¡Usuario y/o contraseña incorrectos!")</script>';
        include_once 'index.php';
    }

}else{//Cualquier cosa, manda de nuevo al login xd
    include_once 'index.php';
}

?>