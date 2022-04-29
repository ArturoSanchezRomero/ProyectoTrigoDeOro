<?php
include_once("modelo\borra.php");
//session_start();

$sErr=""; $sOpe = ""; $sCve = "";
//$oPersHosp = new PersonalHospitalario();
$oMateriaP = new MateriaPrima();

	
		/*Verifica datos de captura mínimos*/
		if (isset($_POST["txtClave"]) && !empty($_POST["txtClave"]) &&
			isset($_POST["txtOpe"]) && !empty($_POST["txtOpe"])){
			$sOpe = $_POST["txtOpe"];
			$sCve = $_POST["txtClave"];
			$oMateriaP->setId_mp($sCve);
			
			if ($sOpe != "b"){
				$oMateriaP->setNombre_mp($_POST["Nombre"]);
			    $oMateriaP->setFecha_compra($_POST["FechaCom"]);
				$oMateriaP->setCantidad($_POST["Cantidad"]);
				$oMateriaP->setCaducidad($_POST["Caducidad"]);
				$oMateriaP->setCosto($_POST["Costo"]);
				
			}
			try{
				 if ($sOpe == 'b')
					$nResultado = $oMateriaP->borrar($sCve);
					
				
			}catch(Exception $e){
				//Enviar el error específico a la bitácora de php (dentro de php\logs\php_error_log
				//error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
				$sErr = "Error en base de datos, comunicarse con el administrador";
			}
		}


	if ($sErr == "")
		header("Location: Materiaprima.php");
	
?>