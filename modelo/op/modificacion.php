<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php 


$oMysql = new mysqli("localhost:3306","root","aprendobd","trigodeoro");
	

$Query="UPDATE materias_primas
					SET id_mp= '".$_POST["id_nuevo"]."', 
					nombre_mp= '".$_POST["nombre_mp"]."', 
					fecha_compra = '".$_POST["fecha_compra"]."', 
					cantidad = '".$_POST["cantidad"]."',
					caducidad= '".$_POST["caducidad"]."', 
					costo= '".$_POST["costo"]."'
					WHERE id_mp = '".$_POST["idBuscar"]."'";
					
					
print($Query."<br>");			
		  //$oMysql->query    seria como Objeto.metodo
$Result = $oMysql->query( $Query );  // se lanza la consulta

if($Result!=null)
header("Location: ../../Materiaprima.php");

else
  	print("Error mano");	 
   ?>

</body>
</html>
