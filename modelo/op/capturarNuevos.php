<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../../css/style.css" media="screen" title="no title">

<title>insertar</title>
</head>
<body>
<?php
require ("buscar.php");
?>
<div class="header">
  <h1>Modificar</h1>
</div>

<div class="row">


<div class="col-6">

<form class="mb"action="modificacion.php" target="" method="POST">
            <input style="display:none;" type=text size=40 name="idBuscar" value="<?php echo $idBuscar;?>">
            <TABLE BORDER="1" ALIGN="CENTER">
                <TR>
                    <TD><strong>Id Materia</strong> </TD>
					<TD><input  type=text size=40 name="id_nuevo" value="<?php echo $idBuscar;?>"> </TD>
                </TR>
                <TR>
                    <TD><strong>Nombre Materia</strong> </TD>
					<TD><input  type=text size=40 name="nombre_mp" value="<?php echo $nombre_mp;?>"> </TD>
                </TR>
               
                <TR>
                    <TD><strong>fecha_compra</strong> </TD>
                    <td><input type=date size=40 name="fecha_compra" value="<?php echo $fecha_compra;?>"></td>
                </TR>
                <TR>
                    <TD><strong>cantidad</strong> </TD>
                    <td><input type=text size=40 name="cantidad" value="<?php echo $cantidad;?>"></td>
                </TR>
                <TR>
                    <TD><strong>caducidad</strong> </TD>
                    <td><input type=date size=40 name="caducidad" value="<?php echo $caducidad;?>"></td>
                </TR>
                <TR>
                    <TD><strong>costo</strong> </TD>
					<TD><input  type=text size=40 name="costo" value="<?php echo $costo;?>"> </TD>
                </TR>
               
                
            </TABLE>
            <BR>
                <BR>
            <center> <input class="bt" type=submit value="Modificar registro BD" ></center>
            
            
        </form>
        
        
</div>

<?php include "../../aside.html";?>


<div class="footer">
  <p>Trigo de Oro SA. de CV.</p>
</div>


</body>
</html>

