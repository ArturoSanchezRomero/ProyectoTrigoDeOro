<?php
class Conexion {
    private $DB_HOST = 'localhost:3306';
    private $DB_USER = 'root';
    private $DB_PASS = 'aprendobd';
    private $DB_NAME = 'trigodeoro';
    private $conect;

    public function __construct()
    {
        $conecting= "mysql:host=$this->DB_HOST;dbname=$this->DB_NAME; charset = utf8";
        try {
            $this->conect = new PDO($conecting,$this->DB_USER,$this->DB_PASS);
            $this->conect ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // echo "COnexion exitosa";
        }catch(PDOException $e) {
            $this->conect ="Error de conexion";
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public function getDb(){
        return $this->conect;
    }

    function ejecutarConsulta($psConsulta){
		$arrRS = null;
		$rst = null;
		$oLinea = null;
		$sValCol = "";
		$i=0;
		$j=0;
			if ($psConsulta == ""){
		       throw new Exception("AccesoDatos->ejecutarConsulta: falta indicar la consulta");
			}
			if ($this->conect == null){
				throw new Exception("AccesoDatos->ejecutarConsulta: falta conectar la base");
			}
			try{
				$rst = $this->conect->query($psConsulta); //un objeto PDOStatement o falso en caso de error
			}catch(Exception $e){
				throw $e;
			}
			if ($rst){
				foreach($rst as $oLinea){ 
					foreach($oLinea as $llave=>$sValCol){
						if (is_string($llave)){
							$arrRS[$i][$j] = $sValCol;
							$j++;
						}
					}
					$j=0;
					$i++;
				}
			}
			return $arrRS;
		}

        function ejecutarComando($psComando){
            $nAfectados = -1;
               if ($psComando == ""){
                   throw new Exception("AccesoDatos->ejecutarComando: falta indicar el comando");
                }
                if ($this->conect == null){
                    throw new Exception("AccesoDatos->ejecutarComando: falta conectar la base");
                }
                try{
                      $nAfectados =$this->conect->exec($psComando);
                }catch(Exception $e){
                    throw $e;
                }
                return $nAfectados;
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