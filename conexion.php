<?php

// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "volcano");

// Comprobar si la conexión es correcta
if(mysqli_connect_errno()){
	echo "La conexión a la base de datos MySQL ha fallado: ".mysqli_connect_error();	
}else{
	echo "Conexión realizada correctamente!!";
}

// Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

session_start();


