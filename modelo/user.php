<?php
//Para poder trabajar con los múltiples usuarios que hay

include_once 'modelo/db.php';

class User extends DB{
    private $username;

public function userExists($user,$pass){//Valida si existe el usuario en DB por medio de una consulta
    
    $query="";
    return $this->buscaUsuario('SELECT * FROM usuarios WHERE nombre=:user AND password=:pass',$user,$pass,$query);
}

public function setUser($user){//Para asignar el nombre de usuario
    /*$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nombre=:user');
    $query->execute(['user'=>$user]);*/
    $query = "";
    $this->user=$this->usuarioActual('SELECT * FROM usuarios WHERE nombre=:user',$user,$query);


    /*foreach($query as $currentUser){
        $this->user = $currentUser['nombre'];
    }*/
}

public function getNombre(){//Obtines el nombre
    return $this->user;
}
}
?>