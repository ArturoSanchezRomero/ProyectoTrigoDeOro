

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fondo.css">
    <link rel="stylesheet" href="css/prin.css">
    <link rel="stylesheet" href="css/style.css">
    <title>¡Bienvenido!</title>
</head>
<body>
<?php include 'header.html';?>
    <ul class="topnav">
        <li><a href="MateriaPrima.php">Administraci&oacute;n de productos</a></li>
        <li><a href="actualiza.php">Administraci&oacute;n de proveedores</a></li>
        <li><a href="modelo/logout.php">Cerrar sesi&oacute;n</a></li>
    </ul>
    <div class="row">
    <div class="col-6">
        <div class=section>
    <h1 class="titulo">¡Bienvenido <?php echo $user->getNombre();?>!</h1>
    </div>
</div>

    <?php include "aside.html";?>
    </div>


<?php include 'footer.html';?>
</body>
</html>