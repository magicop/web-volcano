<?php

include 'conexion.php';


function getReservas(){

	$select = "SELECT * from reservas";

	$conexion = mysqli_connect("localhost", "root", "", "volcano");
	
	// Consulta SELECT desde PHP
	$query = mysqli_query($conexion, $select);

	$resultado = array();

	if($query && mysqli_num_rows($query) >= 1){
		$resultado = $query;
	}

	return $resultado;
}