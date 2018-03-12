<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM estados WHERE idEstado=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro Eliminado.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../ver.php';</script>";

			}
}

?>