<?php
  $ruta    = 'localhost';
  $usuario = 'TEST';
  $key     = '1234';
  $db      = 'taller';
  $conexion  = mysql_connect( $ruta, $usuario, $key) or die(mysql_error());
  mysql_select_db( $db, $conexion ) or die(mysql_error()); 
  mysql_query("SET NAMES 'utf8'");
?>