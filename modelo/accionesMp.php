<?php
include_once 'conexion.php';

class materiaprima
{
    private $id_mp = 0;
    private $nombre_mp = "";
    private $fecha_compra = 0;
    private $cantidad = 0;
    private $caducidad = 0;
    private $costo = 0;

    function setId_mp($pId_mp)
    {
        $this->id_mp = $pId_mp;
    }
    function getId_mp()
    {
        return $this->id_mp;
    }

    function setNombre_mp($pNombre_mp)
    {
        $this->nombre_mp = $pNombre_mp;
    }
    function getNombre_mp()
    {
        return $this->nombre_mp;
    }

    function setFecha_compra($pFecha_compra)
    {
        $this->fecha_compra = $pFecha_compra;
    }
    function getFecha_compra()
    {
        return $this->fecha_compra;
    }

    function setCantidad($pCantidad)
    {
        $this->cantidad = $pCantidad;
    }
    function getCantidad()
    {
        return $this->cantidad;
    }

    function setCaducidad($pCaducidad)
    {
        $this->caducidad = $pCaducidad;
    }
    function getCaducidad()
    {
        return $this->caducidad;
    }

    function setCosto($pCosto)
    {
        $this->costo = $pCosto;
    }
    function getCosto()
    {
        return $this->costo;
    }


    function buscarTodos()
    {
        //$oAccesoDatos=new AccesoDatos();
        $conect = new Conexion();
        $sQuery = "";
        $arrRS = null;
        $aLinea = null;
        $j = 0;
        $oMateriaP = null;
        $arrResultado = false;

        $sQuery = "SELECT * fROM materias_primas";
        $arrRS = $conect->ejecutarConsulta($sQuery);
        //$oAccesoDatos->desconectar();
        if ($arrRS) {
            foreach ($arrRS as $aLinea) {
                $oMateriaP = new materiaprima();
                $oMateriaP->setId_mp($aLinea[0]);
                $oMateriaP->setNombre_mp($aLinea[1]);
                $oMateriaP->setFecha_compra($aLinea[2]);
                $oMateriaP->setCantidad($aLinea[3]);
                $oMateriaP->setCaducidad($aLinea[4]);
                $oMateriaP->setCosto($aLinea[5]);
                $arrResultado[$j] = $oMateriaP;
                $j = $j + 1;
            }
        } else {
            $arrResultado = false;
        }
        return $arrResultado;
        //return $this->arrResultado;
    }



    function borrar($sCve)
    {
        //$oAccesoDatos=new AccesoDatos();
        $this->Id_mp = $sCve;
        $conect = new Conexion();
        $sQuery = "";
        $nAfectados = -1;
        if ($this->Id_mp == 0)
            throw new Exception("materiaprima->borrar(): faltan datos");
        else {

            $sQuery = "DELETE FROM materias_primas 
                                WHERE id_mp=" . $this->id_mp;
            $nAfectados = $conect->ejecutarComando($sQuery);
            //$oAccesoDatos->desconectar();

        }
        return $nAfectados;
    }

    function buscar($id)
    {
        $oConect = new Conexion();
        $oMysql = $oConect->connectv2();
        $Query = "select * from materias_primas WHERE id_mp = '" . $id . "'";
        $Result = $oMysql->query($Query);

        if ($Result == null)
            print("No se  encuentra el registro");
        else {
            $row = $Result->fetch_array();
            $this->id_mp = $id;
            $this->nombre_mp = $row["nombre_mp"];
            $this->fecha_compra = $row["fecha_compra"];
            $this->cantidad = $row["cantidad"];
            $this->caducidad = $row["caducidad"];
            $this->costo = $row["costo"];
        }
    }
}
