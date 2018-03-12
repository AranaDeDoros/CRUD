<?php
 function redondeado($numero, $decimales) { 
   return number_format( $numero, $decimales);
 }

  $titulos = array('No contesto','Primaria', 'Secundaria','Bachillerato','Licenciatura');
  $sql = 'SELECT COUNT(*) n FROM educacion ';
  include('db.php');
  $datos = mysql_query($sql, $conexion) or die(mysql_error());
  $registro = mysql_fetch_array($datos);
  $n = $registro['n'];
  $sql = 'SELECT respuesta, COUNT(*) n FROM educacion ';
  $sql.= ' GROUP BY respuesta ';
  $datos = mysql_query($sql, $conexion) or die(mysql_error());

  mysql_close($conexion);
  $bln = array();
  $bln['name'] = 'Respuesta';
  $rows['name'] = 'Porcentaje';
  while ($registro = mysql_fetch_array($datos)) {
    $i = $registro['respuesta'];
    $bln['data'][] = $titulos[$i];
    $porcentaje =  $registro['n']/$n*100;
    $rows['data'][] = redondeado($porcentaje, 2);
  }
  $rslt = array();
  array_push($rslt, $bln);
  array_push($rslt, $rows);
  print json_encode($rslt, JSON_NUMERIC_CHECK); 
?>