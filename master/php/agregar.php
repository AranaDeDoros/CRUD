<?php

if(!empty($_POST)){
	if(isset($_POST["estado"]) &&isset($_POST["capital"]) &&isset($_POST["gobernador"]) &&isset($_POST["partidoPolitico"]) &&isset($_POST["poblacion"])){
		if($_POST["estado"]!=""&& $_POST["capital"]!=""&&$_POST["partidoPolitico"]!=""){
			include "conexion.php";

			$consul = "select estado from estados where estado = \"$_POST[estado]\"";
			$resultadito = $con->query($consul);
			$fila =$resultadito->fetch_array();

		if($_POST["estado"] == $fila["estado"]){
				if($query!=null){
					print "<script>window.location='../ver.php';</script>";
				}else{
					print "<script>alert(\"El estado ya existe.\");window.location='../ver.php';</script>";
				}
			} else{
			$sql = "insert into estados (estado,capital,gobernador,partidoPolitico,poblacion) value (\"$_POST[estado]\",\"$_POST[capital]\",\"$_POST[gobernador]\",\"$_POST[partidoPolitico]\",\"$_POST[poblacion]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro Agregado.\");window.location='../ver.php';</script>";
				}
} 

		}
	}
}



?>