<?php

include_once("conexion.php");

class Proveedor
{
    private $id_proveedor = 0;
    private $nombre_proveedor = 0;
    private $telefono = 0;

    function setId_proveedor($pId_proveedor)
    {
        $this->id_proveedor = $pId_proveedor;
    }
    function getId_proveedor()
    {
        return $this->id_proveedor;
    }

    function setNombre_proveedor($pNombre_proveedor)
    {
        $this->nombre_proveedor = $pNombre_proveedor;
    }
    function getNombre_proveedor()
    {
        return $this->nombre_proveedor;
    }

    function setTelefono($pTelefono)
    {
        $this->telefono = $pTelefono;
    }
    function getTelefono()
    {
        return $this->telefono;
    }


    function buscarTodos()
    {
        $conectPro = new Conexion();
        $arrRS = null;
        $aLinea = null;
        $j = 0;
        $arrResultado = false;

        $sQuery = "SELECT * FROM proveedores";
        $arrRS = $conectPro->ejecutarConsulta($sQuery);
        //$oAccesoDatos->desconectar();
        if ($arrRS) {
            foreach ($arrRS as $aLinea) {
                $oProveedor = new Proveedor();
                $oProveedor->setId_proveedor($aLinea[0]);
                $oProveedor->setNombre_proveedor($aLinea[1]);
                $oProveedor->setTelefono($aLinea[2]);
                $arrResultado[$j] = $oProveedor;
                $j = $j + 1;
            }
        } else {
            $arrResultado = false;
        }
        return $arrResultado;
    }

    function borrarProveedor($sCve)
    {
        $this->id_proveedor = $sCve;
        $conectPro = new Conexion();
        $sQuery = "";
        $nAfectados = -1;
        if ($this->id_proveedor == 0)
            throw new Exception("Proveedor->borrar(): faltan datos");
        else {

            $sQuery = "DELETE FROM proveedores 
                                WHERE id_proveedor=" . $this->id_proveedor;
            $nAfectados = $conectPro->ejecutarComando($sQuery);
        }
        return $nAfectados;
    }

    function buscar($id)
    {
        $oConect= new Conexion();
        $oMysql = $oConect->connectv2();
        $Query = "select * from proveedores WHERE id_proveedor = '" . $id . "'";
        $Result = $oMysql->query($Query);

        if ($Result == null) {
            print("No se  encuentra el registro");
        } else {
            $row = $Result->fetch_array();
            $this->id_proveedor = $id;
            $this->nombre_proveedor = $row["nombre_proveedor"];
            $this->telefono = $row["telefono"];
        }
    }
}
?>