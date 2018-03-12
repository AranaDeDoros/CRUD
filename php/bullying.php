<?php
 function redondeado($numero, $decimales) { 
   return number_format( $numero, $decimales);
 }

  $titulos = array('No contesto','Poco', 'Regular','Mucho','Me encanta');
  $sql = 'SELECT COUNT(*) n FROM educar ';
  include('db.php');
  $datos = mysql_query($sql, $conexion) or die(mysql_error());
  $registro = mysql_fetch_array($datos);
  $n = $registro['n'];
  $sql = 'SELECT resp, COUNT(*) n FROM educar ';
  $sql.= ' GROUP BY res';
  $datos = mysql_query($sql, $conexion) or die(mysql_error());

  mysql_close($conexion);
  $bln = array();
  $bln['name'] = 'Respuesta';
  $rows['name'] = 'Porcentaje';
  while ($registro = mysql_fetch_array($datos)) {
    $i = $registro['resp'];
	  $bln['data'][] = $titulos[$i];
    $porcentaje =  $registro['n']/$n*100;
    $rows['data'][] = redondeado($porcentaje, 2);
  }
  $rslt = array();
  array_push($rslt, $bln);
  array_push($rslt, $rows);
  print json_encode($rslt, JSON_NUMERIC_CHECK); 
?>