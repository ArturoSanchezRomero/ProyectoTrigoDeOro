<?php include '../View/head.html';?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/styleForm.css">
    <script type="text/javascript" src="../js/validaProveedor.js"></script>
<title>Modificar</title>
</head>

<body>
<?php
include_once '../modelo/accionesProve.php';
$oProveedor = new Proveedor();
$oProveedor->buscar($_GET["id_proveedor"]);
?>
<div class="header">
  <h1>Modificar Proveedor</h1>
</div>

<div class="row">


<div class="col-6">

<form name="formulario" class="mb"action="Operaciones.php" target="" method="POST">
<input type="hidden" name="operacion" value="actualizarProvee"/>
            <input style="display:none;" type=text size=40 name="idBuscar" value="<?php echo $oProveedor->getId_proveedor();?>">
            <TABLE BORDER="1" ALIGN="CENTER">
                <TR id="tipo">
                    <TD><strong>Id Proveedor</strong> </TD>
					<TD><input type=text size=40 name="id_nuevo" value="<?php echo $oProveedor->getId_proveedor();?>" readonly="readonly"> </TD>
                </TR>
                <TR>
                    <TD id="tipo"><strong>Nombre Proveedor</strong> </TD>
					<TD id="dato"><input  type=text name="nombre_proveedor" value="<?php echo $oProveedor->getNombre_proveedor();?>"> </TD>
                </TR>
               
                <TR>
                    <TD id="tipo"> <strong>Telefono</strong> </TD>
                    <td id="dato"><input type=text name="telefono" value="<?php echo $oProveedor->getTelefono();?>"></td>
                </TR>
               
            </TABLE>
            <BR>
                <BR>
            <center> <input id="enviar" class="bt" type=button value="Modificar registro BD" ></center>
            <center> <input class="bt" type="submit" name="Submit" value="Cancelar" onClick="abcPH.action='../Proveedores.php';"> </center>
            
            
        </form>
        
        
</div>

<?php include "../View/aside.html";?>


<?php include '../View/footer.html';?>


</body>
</html>

