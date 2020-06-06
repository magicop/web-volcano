<?php

include 'conexion.php';

$fecha = $_POST['fecha'];

$select = "SELECT * from reservas where fechareserva = '$fecha'";

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, $select);


/*while($nota = mysqli_fetch_assoc($query)) {

	//var_dump($nota);
	echo "<br>";
	echo $nota['fechareserva'].'</br>';
}*/

$resultado = array();
if($query && mysqli_num_rows($query) >= 1){
	$resultado = mysqli_fetch_assoc($query);

	$_SESSION['fecha'] = $fecha;
	$_SESSION['error'] = "no";
}else
{
	$_SESSION['fecha'] = $fecha;
	$_SESSION['error'] = "";
}

header("Location: reserva.php");



/*if($query){
	echo "['fechareserva'];"
}else{
	echo "Error: ".mysqli_error($conexion);
}*/
