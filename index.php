<?php include 'View/head.html'; ?>
    <link rel="stylesheet" href="css/estilologin.css">
    <script type="text/javascript" src="js/validacionLogin.js"></script>
    <link rel="stylesheet" href="css/prin.css">
    <title>Login</title>    
</head>

<body>
      <?php include 'View/titulo.html';?>
        <form name="formulario" method="post" action="login.php">
        <table >
          <tr><td colspan="2" style="background-color: darkgoldenrod; padding-bottom: 5px; padding-top: 5px;">
          <label>Login</label></td>  </tr>  
          <tr> <td aling="center" rowspan="5"><img src="img/logoTrigoDeOro.png"></td>
               <td> <label>Usuario </label> </td></tr>  
               <tr> <td> <input id="usuario" type="text" name="usuario" placeholder="No caracteres especiales"> </td> </tr>     
          <tr> <td> <label>Contraseña</label> </td> </tr>  
          <tr> <td> <input type="password" name="password" id="password" placeholder="Longitud de 9-11 caracteres"> </td> </tr>
          <tr> <td> <input type="button" id="enviar" value="Ingresar"> </td> </tr>
        </table>
    </form>
    <script src="js/validacionLogin.js"></script>
</body>
</html>