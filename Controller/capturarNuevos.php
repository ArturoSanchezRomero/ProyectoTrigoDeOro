<?php include '../View/head.html';?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/styleForm.css">
<script type="text/javascript" src="../js/validaProducto.js"></script>
<title>Modificar</title>
</head>

<body>
<?php
include_once '../modelo/accionesMp.php';
$oMateriaP = new materiaprima();
$oMateriaP->buscar($_GET["id_mp"]);
?>
<div class="header">
  <h1>Modificar Materia Prima</h1>
</div>

<div class="row">


<div class="col-6">

<form name="formulario" class="mb" action="Operaciones.php" target="" method="POST">
    <input type="hidden" name="operacion" value="actualizarMateria"/>
            <input style="display:none;" type=text size=40 name="idBuscar" value="<?php echo $oMateriaP->getId_mp();?>">
            <TABLE BORDER="1" ALIGN="CENTER">
                <TR id="tipo">
                    <TD><strong>Id Materia</strong> </TD>
					<TD><input  type=text  name="id_nuevo" size=50 value="<?php echo $oMateriaP->getId_mp();?>" readonly="readonly" > </TD>
                </TR>
                <TR>
                    <TD id="tipo"><strong>Nombre Materia</strong> </TD>
					<TD id="dato"><input  type=text  name="nombre_mp" value="<?php echo $oMateriaP->getNombre_mp();?>"> </TD>
                </TR>
               
                <TR>
                    <TD id="tipo"> <strong>fecha_compra</strong> </TD>
                    <td id="dato"><input type=date  name="fecha_compra" value="<?php echo $oMateriaP->getFecha_compra();?>"></td>
                </TR>
                <TR>
                    <TD id="tipo"><strong>cantidad</strong> </TD>
                    <td id="dato"><input type=text  name="cantidad" value="<?php echo $oMateriaP->getCantidad();?>"></td>
                </TR>
                <TR>
                    <TD id="tipo"><strong>caducidad</strong> </TD>
                    <td id="dato"><input type=date name="caducidad" value="<?php echo $oMateriaP->getCaducidad();?>"></td>
                </TR>
                <TR>
                    <TD id="tipo"><strong>costo</strong> </TD>
					<TD id="dato"><input  type=text  name="costo" value="<?php echo $oMateriaP->getCosto();?>"> </TD>
                </TR>
               
                
            </TABLE>
            <BR>
                <BR>
            <center> <input id="enviar" class="bt" type=button value="Modificar registro BD" ></center>
            <center> <input class="bt" type="submit" name="Submit" value="Cancelar" onClick="abcPH.action='../materiaprima.php';"> </center>
            
        </form>
        
        
</div>

<?php include "../View/aside.html";?>


<?php include '../View/footer.html';?>


</body>
</html>

