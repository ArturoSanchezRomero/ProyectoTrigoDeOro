<?php include 'View/head.html';?>
    <link rel="stylesheet" href="css/fondo.css">
    <link rel="stylesheet" href="css/prin.css">
    <link rel="stylesheet" href="css/style.css">
    <title>¡Bienvenido!</title>
</head>

<body>
<?php include 'View/titulo.html';?>
    <ul class="topnav">
        <li><a href="materiaprima.php">Administraci&oacute;n de productos</a></li>
        <li><a href="Proveedores.php">Administraci&oacute;n de proveedores</a></li>
        <li><a href="modelo/logout.php">Cerrar sesi&oacute;n</a></li>
    </ul>
    <div class="row">
    <div class="col-6">
        <div class=section>
    <h1 class="titulo">¡Bienvenido <?php echo $user->getNombre();?>!</h1>
    </div>
</div>

    <?php include "View/aside.html";?>
    </div>


<?php include 'View/footer.html';?>
</body>
</html>