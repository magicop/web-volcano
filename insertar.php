<?php

include 'conexion.php';

$nombre = $_POST['nombreUsuario'];
$fecha = $_POST['fecha'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

// Insertar en la base de datos
$select = "SELECT * from reservas where fechareserva = '$fecha'";

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, $select);

echo "<br>";

if($query && mysqli_num_rows($query) >= 1){

	$_SESSION['fecha'] = $fecha;
	$_SESSION['mensaje'] = "No se encuentra disponible";

}else
{
	$sql = "INSERT INTO reservas VALUES(null, '$nombre', '$fecha', '$telefono', '$correo')";
	$insert = mysqli_query($conexion, $sql);

	if($insert){
		$_SESSION['fecha'] = $fecha;
		$_SESSION['mensaje'] = "Se ha registrado con éxito";
	}else{
		echo "Error: ".mysqli_error($conexion);
	}
}





header("Location: reserva.php");