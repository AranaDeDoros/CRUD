<?php

  function redondeado($numero, $decimales) { 
   return number_format( $numero, $decimales);  
  }

  $sql = 'SELECT YEAR(fecha) year, AVG(precio) dolar';
  $sql.= ' FROM dolar ';
  $sql.= ' GROUP BY year';
  include('db.php');

  $datos = mysql_query($sql, $conexion) or die(mysql_error()); 
  mysql_close($conexion);

  $x['name']    = 'year';
  $rows['name'] = 'dolar';

  $data = array();
  while($registro = mysql_fetch_array($datos)) {
    $x['data'][]    = $registro['year'];
    $rows['data'][] = redondeado($registro['dolar'], 4);
  }

  $data = array();
  array_push($data, $x);
  array_push($data, $rows);
  print json_encode($data, JSON_NUMERIC_CHECK); 
?>