<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php 

$oMysql = new mysqli("localhost:3306", "root", "aprendobd", "trigodeoro");
 // $conexion = pg_connect("host=localhost port=5432 user=nombreUsuario password=passwordUsuario dbname=nomBD", PGSQL_CONNECT_FORCE_NEW);
// $conexion = pg_connect("host=localhost dbname=BASE_DE_DATOS user=USUARIO password=CONTRASEÑA");		

$Query= "INSERT INTO materias_primas VALUES ('".$_POST["id_mp"]."','".$_POST["nombre_mp"]."','".$_POST["fecha_compra"]."','".$_POST["cantidad"]."','".$_POST["caducidad"]."','".$_POST["costo"]."')";
          
		  //$oMysql->query    seria como Objeto.metodo
$Result = $oMysql->query( $Query );  // se lanza la consulta

if($Result!=null)
header("Location: ../../Materiaprima.php");


else
  	print("Error");


	 
   ?>

</body>
</html>
