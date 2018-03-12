<?php
  $sql = 'SELECT genero, COUNT( * ) n FROM datos ';
  $sql.= ' GROUP BY genero ';
  include('db.php');
  
  $datos = mysql_query($sql, $conexion) or die(mysql_error());
  mysql_close($conexion);

  $rows = array();
  while($registro = mysql_fetch_array($datos)) {
    $genero  = ($registro['genero'] == 1) ? 'Femenino' : 'Masculino';
	  $row[0] = $genero;
	  $row[1] = $registro['n'];
	  array_push($rows,$row);
  }
  print json_encode($rows, JSON_NUMERIC_CHECK);
?> 
