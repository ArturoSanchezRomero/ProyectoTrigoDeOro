<link rel="stylesheet" href="css/fondo.css">
<link rel="stylesheet" href="css/style.css">
<title>Confirmación</title>
<?php

include_once 'modelo\borra.php';
include 'header.html';

$sCve = ""; $sOpe = ""; $sNomBoton ="Borrar";
$sCve = $_POST["txtClave"];
$oMateriaP = new MateriaPrima();

?>
		<div class="row">
    	<div class="col-6">
        <div class=section>
		<section style="background-color:#E2BE99;">
			<form name="abcPH" action="resABC.php" method="post">
				<h1><b>¿Est&aacute;s seguro que quieres borrarlo?</b></h1>
			    <input type="hidden" name="txtOpe" value="<?php echo $sOpe;?>"/>
				<input type="hidden" name="txtClave" value="<?php echo $sCve;?>"/>
				
				<input type ="submit" value="<?php echo $sNomBoton;?>"
				onClick="txtClave.value=<?php echo $sCve; ?>; txtOpe.value='b'" />
				<input type="submit" name="Submit" value="Cancelar" 
				 onClick="abcPH.action='MateriaPrima.php';">
			</form>
		</section>
		</div>
			</div>
    <?php include "aside.html";?>
    </div>
<?php include 'footer.html'; ?>