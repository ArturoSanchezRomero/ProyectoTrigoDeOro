<?php
class Conexion
{
    private $DB_HOST;
    private $DB_USER;
    private $DB_PASS;
    private $DB_NAME;


    // Aqui cambia por tus datos 
    public function __construct()
    {
        $this->DB_HOST     = 'localhost';//Este lo cambian por el host que tienes, el :3310 es el puerto que usé
        $this->DB_NAME       = 'trigodeoro';
        $this->DB_USER     = 'root';
        $this->DB_PASS = 'aprendobd';
    }
    // ya te pasate, es ahi arriba donde pones tus datos

    function connect(){
        $conect = null;

        try {
            $conecting = "mysql:host=$this->DB_HOST;dbname=$this->DB_NAME; charset = utf8";
            $conect = new PDO($conecting, $this->DB_USER, $this->DB_PASS);
            $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conect;
        } catch (PDOException $e) {
            $conect = "Error de conexion";
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function connectv2(){
        $oMysql = null;

        try {
            $oMysql = new mysqli($this->DB_HOST,$this->DB_USER,$this->DB_PASS,$this->DB_NAME);
            return $oMysql;
        } catch (PDOException $e) {
            $oMysql = "Error de conexion";
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function ejecutarConsulta($psConsulta)
    {
        $arrRS = null;
        $rst = null;
        $oLinea = null;
        $sValCol = "";
        $i = 0;
        $j = 0;
        if ($psConsulta == "") {
            throw new Exception("AccesoDatos->ejecutarConsulta: falta indicar la consulta");
        }
        if ($this->connect() == null) {
            throw new Exception("AccesoDatos->ejecutarConsulta: falta conectar la base");
        }
        try {
            $rst = $this->connect()->query($psConsulta); //un objeto PDOStatement o falso en caso de error
        } catch (Exception $e) {
            throw $e;
        }
        if ($rst) {
            foreach ($rst as $oLinea) {
                foreach ($oLinea as $llave => $sValCol) {
                    if (is_string($llave)) {
                        $arrRS[$i][$j] = $sValCol;
                        $j++;
                    }
                }
                $j = 0;
                $i++;
            }
        }
        return $arrRS;
    }

    function ejecutarComando($psComando)
    {
        $nAfectados = -1;
        if ($psComando == "") {
            throw new Exception("AccesoDatos->ejecutarComando: falta indicar el comando");
        }
        if ($this->connect() == null) {
            throw new Exception("AccesoDatos->ejecutarComando: falta conectar la base");
        }
        try {
            $nAfectados = $this->connect()->exec($psComando);
        } catch (Exception $e) {
            throw $e;
        }
        return $nAfectados;
    }

    function buscaUsuario($comando, $user, $pass, $query)
    {
        $query = $this->connect()->prepare($comando);
        $query->execute(['user' => $user, 'pass' => $pass]);

        if ($query->rowCount()) { //Si hay filas, entonces lo encontró
            return true;
        } else {
            return false;
        }
    }

    function usuarioActual($comando, $user, $query)
    {
        $query = $this->connect()->prepare($comando);
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->user = $currentUser['nombre'];
        }

        return $this->user;
    }


    //Gerardo --> usuarioActual

    
}
