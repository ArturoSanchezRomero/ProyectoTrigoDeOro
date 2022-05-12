<?php
include '../modelo/conexion.php';

if ($_POST["operacion"] == "insertarMateria") {
	$oConect= new Conexion();
    $oMysql = $oConect->connectv2();

	$Query = "INSERT INTO materias_primas VALUES ('" . $_POST["id_mp"] . "','" . $_POST["nombre_mp"] . "','" . $_POST["fecha_compra"] . "','" . $_POST["cantidad"] . "','" . $_POST["caducidad"] . "','" . $_POST["costo"] . "')";
	$Result = $oMysql->query($Query);  // se lanza la consulta

	if ($Result != null) {
		header("Location:../materiaprima.php");
	} else {
		echo '<script>alert("¡Error al ingresar el producto! Recuerda que no debes duplicar el ID")</script>';
		include_once "insertar.php";
	}
}

if ($_POST["operacion"] == "actualizarMateria") {
	$oConect= new Conexion();
    $oMysql = $oConect->connectv2();

	$Query = "UPDATE materias_primas
					SET id_mp= '" . $_POST["id_nuevo"] . "', 
					nombre_mp= '" . $_POST["nombre_mp"] . "', 
					fecha_compra = '" . $_POST["fecha_compra"] . "', 
					cantidad = '" . $_POST["cantidad"] . "',
					caducidad= '" . $_POST["caducidad"] . "', 
					costo= '" . $_POST["costo"] . "'
					WHERE id_mp = '" . $_POST["idBuscar"] . "'";


	print($Query . "<br>");

	$Result = $oMysql->query($Query);  // se lanza la consulta

	if ($Result != null) {
		header("Location:../materiaprima.php");
	} else {
		echo "<script>alert('No puedes duplicar el id del producto')</script>";
		include_once "capturarNuevos.php";
	}
}

if ($_POST["operacion"] == "insertarProve") {
	$oConect= new Conexion();
    $oMysql = $oConect->connectv2();

	$Query = "INSERT INTO proveedores VALUES ('" . $_POST["id_proveedor"] . "','" . $_POST["nombre_proveedor"] . "','" . $_POST["telefono"] . "')";

	//$oMysql->query    seria como Objeto.metodo
	$Result = $oMysql->query($Query);  // se lanza la consulta

	if ($Result != null) {
		header("Location:../Proveedores.php");
	} else {
		echo '<script>alert("¡Error al ingresar el producto! Recuerda que no debes duplicar el ID")</script>';
		include "insertarP.php";
	}
}


if ($_POST["operacion"] == "actualizarProvee") {
	$oConect= new Conexion();
    $oMysql = $oConect->connectv2();


	$Query = "UPDATE proveedores
						SET id_proveedor= '" . $_POST["id_nuevo"] . "', 
						nombre_proveedor= '" . $_POST["nombre_proveedor"] . "', 
						telefono = '" . $_POST["telefono"] . "'
						WHERE id_proveedor = '" . $_POST["idBuscar"] . "'";


	print($Query . "<br>");
	//$oMysql->query    seria como Objeto.metodo
	$Result = $oMysql->query($Query);  // se lanza la consulta

	if ($Result != null)
		header("Location:../Proveedores.php");

	else {
		print("Error mano");
	}
}


if ($_POST["operacion"] == "borrarProveedor") {

	include_once("../modelo/accionesProve.php");
	$id = $_POST["id_proveedor"];
	$oProveedor = new Proveedor();
	$oProveedor->setId_proveedor($id);
	$sErr = "";

	try {
		$nResultado = $oProveedor->borrarProveedor($id);
	} catch (Exception $e) {

		$sErr = "Error en base de datos o en la consulta";
	}

	if ($sErr == "")
		header("Location:../Proveedores.php");
}

if ($_POST["operacion"] == "borrarMateria") {

	include_once("../modelo/accionesMp.php");
	$sErr = "";
	$oMateriaP = new materiaprima();
	$sCve = $_POST["id_materia"];
	$oMateriaP->setId_mp($sCve);

	try {
		$nResultado = $oMateriaP->borrar($sCve);
	} catch (Exception $e) {

		$sErr = "Error en base de datos o en la consulta";
	}

	if ($sErr == "") {
		header("Location:../materiaprima.php");
	}
}

?>