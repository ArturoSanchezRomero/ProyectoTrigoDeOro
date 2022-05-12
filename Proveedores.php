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
include 'modelo/accionesProve.php';
$arrProveedor=null;
$oProveedor = new Proveedor();
$arrProveedor = $oProveedor->buscarTodos();
?>
<section>
	<h1><b>Proveedores</b></h1>
	
		
		<div class="row">
    <div class="col-6">
        <div class=section>
		<table border="1" align="center" >
				<tr id="tipo">
					<td>ID Proveedor</td>
					<td>Nombre Proveedor</td>
					<td>Telefono</td>
					<td>Acciones</td>
				</tr>
				<?php
						if ($arrProveedor!=null){
							foreach($arrProveedor as $oProveedor){
					?>
					<tr align="center">
						<td class="llave" id="id" ><?php echo $oProveedor->getId_proveedor(); ?></td>
						<td id="dato"><?php echo $oProveedor->getNombre_proveedor(); ?></td>
						<td id="dato"><?php echo $oProveedor->getTelefono(); ?></td>
						<td id="dato">

							<a class="bton"href="Controller/capturarNuevosP.php?id_proveedor=<?php print($oProveedor->getId_proveedor()); ?>"> <?php print("Actualiza"); ?> </a> 
							
							<form name="formTablaGral" method="post" action="Controller/confirBorrarPro.php">
							<input type="hidden" name="txtClave">
							<input type="hidden" name="txtOpe">
							<input class="opt" type="submit" name="Submit" value="Borrar" onClick="txtClave.value=<?php  echo $oProveedor->getId_proveedor();?>; txtOpe.value='bp'">
							
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
			<a href="Controller/insertarP.php" target="" ><img src="img/masP.png"> </a> <br>


					</div>
					</div>

    <?php include "View/aside.html";?>
    </div>
	
</section>
<?php include 'View/footer.html'?>
</body>
</html>