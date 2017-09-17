<?php 

require_once("../Settings/conexion.php");

$Email = $_POST['Email'];

$Consulta = "SELECT idUsuario, Nombre FROM Usuario WHERE Email = '$Email'";
$res_Consulta = mysqli_query( $conexion, $Consulta ) or die ( "Error en la consulta del listado en la base de datos");

$row_Consulta = mysqli_fetch_assoc($res_Consulta);
	
if(!is_null($row_Consulta['idUsuario']) )
{  // verifica si el dni ingresado existe en la base de datos
	
	$data = array('Rpta' => 1 ,'Nombre' => $row_Consulta['Nombre']); 
	print (json_encode($data)); 
	
	$Acreditado = "UPDATE Usuario SET Estado = 1 WHERE Email = '$Email'";
	mysqli_query( $conexion, $Acreditado);
}
else
{	// no se encuentra registrado en la base de datos
	$data = array('Rpta' => 0); 
	print (json_encode($data)); 	
}
?>
