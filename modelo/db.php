<?php
//Realiza la conexión con la Base de Datos
class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'localhost:3306';//Este lo cambian por el host que tienes, el :3310 es el puerto que usé
        $this->db       = 'trigodeoro';
        $this->user     = 'root';
        $this->password = 'aprendobd';
        $this->charset  = 'UTF8';
    }

    function connect(){
    
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $pdo = new PDO($connection, $this->user, $this->password,  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));//Valida la conexión
    
            return $pdo;

        }catch(PDOException $e){//Por si surge un error
            print_r('Error connection: ' . $e->getMessage());
        }   
    }

    function buscaUsuario($comando,$user,$pass,$query){
        $query=$this->connect()->prepare($comando);
        $query->execute(['user'=>$user,'pass'=>$pass]);
    
        if($query->rowCount()){//Si hay filas, entonces lo encontró
        return true;
        }else{
        return false;
        }
    }

    function usuarioActual($comando,$user,$query){
        $query = $this->connect()->prepare($comando);
        $query->execute(['user'=>$user]);

        foreach($query as $currentUser){
            $this->user = $currentUser['nombre'];
        }

        return $this->user;
    }
}

?>