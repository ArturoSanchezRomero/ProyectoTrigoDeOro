<?php include 'View/head.html';?>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styleForm.css">
	<link rel="stylesheet" href="css/prin.css">
    <title>Inventario</title>
</head>

<body>
<?php include 'View/titulo.html';?>
<ul class="topnav">
        <li><a href="materiaprima.php">Administraci&oacute;n de productos</a></li>
        <li><a href="Proveedores.php">Administraci&oacute;n de proveedores</a></li>
        <li><a href="modelo/logout.php">Cerrar sesi&oacute;n</a></li>
</ul>
<?php
include 'modelo/accionesMp.php';
$arrMPrima=null;
$oMateriaP = new materiaprima();
$arrMPrima = $oMateriaP->buscarTodos();
?>
<section>
	<h1><b>Materia Prima</b></h1>
	
		
		<div class="row">
    <div class="col-6">
        <div class=section>
		<table border="1" align="center" >
				<tr id="tipo">
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
					<tr id="sup">
						<td class="llave" id="id" ><?php echo $oMateriaP->getId_mp(); ?></td>
						<td id="dato"><?php echo $oMateriaP->getNombre_mp(); ?></td>
						<td id="dato"><?php echo $oMateriaP->getFecha_compra(); ?></td>
						<td id="dato"><?php echo $oMateriaP->getCantidad(); ?></td>
						<td id="dato"><?php echo $oMateriaP->getCaducidad(); ?></td>
						<td id="dato"><?php echo $oMateriaP->getCosto(); ?></td>
						<td id="dato">
							<a class="bton"href="Controller/capturarNuevos.php?id_mp=<?php print($oMateriaP->getId_mp()); ?>"> <?php print("Actualiza"); ?> </a> 
							<form name="formTablaGral" method="post" action="Controller/confirBorrar.php">
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
			<a href="Controller/insertar.php" target="" ><img src="img/mas.png"> </a> <br> 

					</div>
					</div>

    <?php include "View/aside.html";?>
    </div>
	
</section>
<?php include 'View/footer.html'?>

</body>
</html>
