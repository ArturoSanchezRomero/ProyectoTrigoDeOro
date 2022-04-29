<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/prin.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fondo.css">
    <title>Inventario</title>
</head>

<?php
//include 'principal.php';
//include 'modelo\conexion.php';
include 'header.html';
include 'modelo\borra.php';

$arrMPrima=null;
//$oPersHosp = new PersonalHospitalario();
$oMateriaP = new MateriaPrima();
$arrMPrima = $oMateriaP->buscarTodos();
?>
<ul class="topnav">
        <li><a href="MateriaPrima.php">Administraci&oacute;n de productos</a></li>
        <li><a href="actualiza.php">Administraci&oacute;n de proveedores</a></li>
        <li><a href="modelo/logout.php">Cerrar sesi&oacute;n</a></li>
    </ul>

<section>
	<h1><b>Materia Prima</b></h1>
	
		
		<div class="row">
    <div class="col-6">
        <div class=section>
		<table border="1" align="center" >
				<tr style="background-color:rgba(253, 236, 5, 0.801);" align="center">
					<td>ID Materia Prima</td>
					<td>Nombre</td>
					<td>Fecha de Adquisición</td>
					<td>Cantidad</td>
					<td>Caducidad</td>
					<td>Costo</td>
					<td>Acciones</td>
				</tr>
				<?php
						if ($arrMPrima!=null){
							foreach($arrMPrima as $oMateriaP){
					?>
					<tr align="center">
						<td class="llave" style="background-color:rgba(253, 236, 5, 0.801);" ><?php echo $oMateriaP->getId_mp(); ?></td>
						<td style="background-color:#fff"><?php echo $oMateriaP->getNombre_mp(); ?></td>
						<td style="background-color:#fff"><?php echo $oMateriaP->getFecha_compra(); ?></td>
						<td style="background-color:#fff"><?php echo $oMateriaP->getCantidad(); ?></td>
						<td style="background-color:#fff"><?php echo $oMateriaP->getCaducidad(); ?></td>
						<td style="background-color:#fff"><?php echo $oMateriaP->getCosto(); ?></td>
						<td style="background-color:#fff">
							<a class="bton"href="modelo/op/capturarNuevos.php ? id_mp=<?php print($oMateriaP->getId_mp()); ?>"> <?php print("Actualiza"); ?> </a> 
							<form name="formTablaGral" method="post" action="accion.php">
							<input type="hidden" name="txtClave">
							<input type="hidden" name="txtOpe">
							<input class="opt" type="submit" name="Submit" value="Borrar" onClick="txtClave.value=<?php echo $oMateriaP->getId_mp(); ?>; txtOpe.value='b'">
							</form>
						</td>
					</tr>
					<?php 
							}//foreach
						}else{
					?>     
					<tr>
						<td colspan="2">No hay datos</td>
					</tr>
					<?php
						}
					?>
			</table>
			<a href="modelo/op/insertar.php" target="" ><img src="img/mas.png"> </a> <br> 

					</div>
					</div>

    <?php include "aside.html";?>
    </div>
	
</section>
<?php include 'footer.html'?>
