<?php
 //$sql = 'SELECT pais, AVG(poblacion) n FROM Paises ';
 //$sql.= ' GROUP BY pais';
 $sql = 'SELECT pais, AVG(poblacion) n FROM sudamerica ';
 $sql.= ' GROUP BY pais';
  include('db.php');
  
  $datos = mysql_query($sql, $conexion) or die(mysql_error());
  mysql_close($conexion);

  $rows = array();
  while($registro = mysql_fetch_array($datos)) {

   $row[0] = ($registro['pais']);
   $row[1] = $registro['n'];
	  array_push($rows,$row);
  }
  print json_encode($rows, JSON_NUMERIC_CHECK);
?> 





