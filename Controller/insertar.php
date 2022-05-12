<?php include '../View/head.html';?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/styleForm.css">
    <script type="text/javascript" src="../js/validaProducto.js"></script>
<title>insertar</title>
</head>


<body>
<div class="header">
  <h1>Inserta Materia Prima</h1>
</div>

<div class="row">


<div class="col-6">
<form name="formulario" class="mb" action="Operaciones.php" target="" method="POST">
    <input type="hidden" name="operacion" value="insertarMateria"/>
            <TABLE BORDER="1" ALIGN="CENTER">
            <TR id="tipo">
                    <TD><strong>Id</strong> </TD>
                    <td><input type=text size=4 name="id_mp"></td>
                </TR>
                <TR>
                    <TD id="tipo"><strong>Nombre Materia</strong> </TD>
                    <td id="dato"><input type=text size=40 name="nombre_mp"></td>
                </TR>
               
                <TR>
                    <TD id="tipo"><strong>Fecha Compra</strong> </TD>
                    <td id="dato"><input type=date size=40 name="fecha_compra"></td>
                </TR>
                <TR>
                    <TD id="tipo"><strong>Cantidad</strong> </TD>
                    <td id="dato"><input type=text size=40 name="cantidad"></td>
                </TR>
                <TR>
                    <TD id="tipo"><strong>Caducidad</strong> </TD>
                    <td id="dato"><input type=date size=40 name="caducidad"></td>
                </TR>
                <TR>
                    <TD id="tipo"><strong>Costo</strong> </TD>
                    <td id="dato"><input type=text size=12 name="costo"></td>
                </TR>
                
                
            </TABLE>
            <BR>
                <BR>
            <center> <input class="bt" id="enviar" type=button value="Agregar a BD" ></center>
           
            
        </form>
        <form name="abcPH">
            <center> <input class="bt" type="submit" name="Submit" value="Cancelar" onClick="abcPH.action='../materiaprima.php';"> </center>
        </form>
        
        
</div>

<?php include "../View/aside.html";?>

<?php include '../View/footer.html';?>

</body>
</html>



      