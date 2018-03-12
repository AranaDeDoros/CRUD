<?php
 

  //$titulos = array('No contesto','Poco', 'Regular','Mucho','Me encanta','No contesto','Poco', 'Regular','Mucho','Me encanta');

  $sql = 'SELECT COUNT(*) n FROM paises'; //selecciona el num total de registros de la tabla
  include('db.php');
  $datos = mysql_query($sql, $conexion) or die(mysql_error());
  $registro = mysql_fetch_array($datos);
  
  //$n = $registro['n'];  //poblacion

  $sql = 'SELECT poblacion, pais FROM paises ';
  $sql.= ' GROUP BY poblacion ';
  //$sql.='ORDER BY pais';
  $datos = mysql_query($sql, $conexion) or die(mysql_error());
  $titulos=mysql_fetch_array($datos);



/*  $sql= 'SELECT pais from paises';
  $datos= mysql_query($sql, $conexion) or die(mysql_error());
  $titulos = mysql_fetch_array($datos);
  */

//print_r($titulos);

  mysql_close($conexion);
  
  $bln = array();
  $bln['name'] = 'Respuesta';
  $rows['name'] = 'Poblacion';

  while ($registro = mysql_fetch_array($datos)) {
    //$i = $registro['pais'];
    $bln['data'][] = $titulos['pais'];
    $rows['data'][] = $titulos['poblacion'];

    //$rows['data'][] = $registro['n'];
  }
  $rslt = array();
  array_push($rslt, $bln);
  array_push($rslt, $rows);
  print json_encode($rslt, JSON_NUMERIC_CHECK); 
?>