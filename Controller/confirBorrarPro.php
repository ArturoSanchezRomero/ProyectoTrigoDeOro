<?php include '../View/head.html';?>
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/styleForm.css">
    <title>Confirmación</title>
</head>

<body>
<div class="header">
  <h1>Borrar Proveedor</h1>
</div>



<?php
include_once ("../modelo/accionesProve.php");
$id = $_POST["txtClave"];
?>

		<div class="row">
    	<div class="col-6">
        <div class=section>
		<section id="section">

			<form name="abcPH" action="Operaciones.php" method="post">
			<br> 
<br> 
				<h1><b>¿Est&aacute;s seguro que quieres borrar al proveedor?</b></h1>
			    <input type="hidden" name="operacion" value="borrarProveedor"/>
				<input type="hidden" name="id_proveedor" value="<?php echo $id;?>"/>
				
				<input type ="submit" value="Borrar" />

				<input type="submit" name="Submit" value="Cancelar" 
				 onClick="abcPH.action='../Proveedores.php';">
				 <br> 
<br> 
<br> 
<br>  
			</form>
		</section>

		
		</div>
			</div>
			<?php include '../View/aside.html';?>
    </div>
	<?php include '../View/footer.html';?>

</body>
</html>