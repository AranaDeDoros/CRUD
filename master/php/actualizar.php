<?php

if(!empty($_POST)){
	if(isset($_POST["estado"]) &&isset($_POST["capital"]) &&isset($_POST["gobernador"]) &&isset($_POST["partidoPolitico"]) &&isset($_POST["poblacion"])){
		if($_POST["estado"]!=""&& $_POST["capital"]!=""&&$_POST["partidoPolitico"]!=""){
			include "conexion.php";
			
			$sql = "update estados set estado=\"$_POST[estado]\",capital=\"$_POST[capital]\",gobernador=\"$_POST[gobernador]\",partidoPolitico=\"$_POST[partidoPolitico]\",poblacion=\"$_POST[poblacion]\" where idEstado=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro Actualizado.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>