<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizar</title>
</head>

<body>

<?php 
// $conexion = pg_connect("host=localhost port=5432 user=nombreUsuario password=passwordUsuario dbname=nomBD", PGSQL_CONNECT_FORCE_NEW);
// $conexion = pg_connect("host=localhost dbname=BASE_DE_DATOS user=USUARIO password=CONTRASEÑA");		

$mysql = new mysqli("localhost:3306","root","aprendobd","trigodeoro");
$Query = "select * from materias_primas";
$Result = $mysql->query( $Query );


	 $numeroRegistros=$Result->num_rows;   
	 if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron registros</h2>"; 
     echo "</div><hr>"; 
   }else{
   ?>
       <table border=1>
        <tr>
		<td><strong> Id</strong></td>
		<td><strong> Nombre Materia</strong></td>
		<td><strong> Fecha compra</strong></td>
		<td><strong> Cantidad</strong></td>
		<td><strong> Caducidad</strong></td>
		<td><strong> Costo</strong></td>
		
		</tr>
		<?php
        while($row =$Result->fetch_array()) {	  
		$id_mp=$row["id_mp"];
           ?>
		   <tr>
		   <td> <?php printf($row["nombre_mp"]); ?>   </td>
		   <td> <?php printf($row["fecha_compra"]); ?>   </td>
		   <td> <?php printf($row["cantidad"]); ?>   </td>
		   <td> <?php printf($row["caducidad"]); ?>   </td>
		   <td> <?php printf($row["costo"]); ?>   </td>
		   <td> <a href="capturarNuevos.php ? id_mp=<?php print($id_mp); ?>"> <?php print("Actualiza"); ?> </a>  </td>

           </tr>
<?php	}
}
?>
</table>
</body>
</html>
