<?php include '../View/head.html';?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/styleForm.css">
    <script type="text/javascript" src="../js/validaProveedor.js"></script>

<title>insertar</title>
</head>
<body>

<div class="header">
  <h1>Inserta Proveedor</h1>
</div>

<div class="row">


<div class="col-6">
<form name="formulario" class="mb" action="Operaciones.php" target="" method="POST">
     <input type="hidden" name="operacion" value="insertarProve"/>
            <TABLE BORDER="1" ALIGN="CENTER">
            <TR id="tipo">
                    <TD><strong>Id</strong> </TD>
                    <td><input type=text size=4 name="id_proveedor"></td>
                </TR>
                <TR>
                    <TD id="tipo"><strong>Nombre Proveedor</strong> </TD>
                    <td id="dato"><input type=text size=40 name="nombre_proveedor"></td>
                </TR>
               
                <TR>
                    <TD id="tipo"><strong>Telefono</strong> </TD>
                    <td id="dato"><input type=text size=40 name="telefono"></td>
                </TR>
                
            </TABLE>
            <BR>
                <BR>
            <center> <input class="bt" id="enviar" type=button value="Agregar a BD" ></center>
            
            
        </form>
        <form name="abcPH">
        <BR>
            <center> <input class="bt" type="submit" name="Submit" value="Cancelar" onClick="abcPH.action='../Proveedores.php';"> </center>
        </form>
        
        
</div>

<?php include "../View/aside.html";?>




<?php include '../View/footer.html'; ?>


</body>
</html>