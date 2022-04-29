<?php 
//Busca registro  a través del nombre elegido
$idBuscar=$_GET["id_mp"];
$oMysql = new mysqli("localhost:3306","root","aprendobd","trigodeoro");
$Query="select * from materias_primas WHERE id_mp = '".$idBuscar."'";
$Result = $oMysql->query( $Query );

if($Result==null)
   	print("No se  encuentra el registro");
else{
      $row =$Result->fetch_array();
  	  $nombre_mp=$row["nombre_mp"];
	  $fecha_compra=$row["fecha_compra"];
	  $cantidad=$row["cantidad"];
	  $caducidad=$row["caducidad"];
	  $costo=$row["costo"];
	}
?>
