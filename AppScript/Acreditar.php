<?php 
//------------------------------------------------------------------------
// ESCUCHA LA LECTURA DE UN CODIGO PARA ACREDITA AL USUARIO MEDIANTE SU CI
//------------------------------------------------------------------------
require_once("../Settings/conexion.php");

$Carnet = $_POST['Carnet'];

$Consulta = "SELECT idUsuario, Nombre, Apellido, Carnet, Email FROM Usuario WHERE Carnet = '$Carnet'";
$res_Consulta = mysqli_query( $conexion, $Consulta ) or die ( "Error en la consulta del listado en la base de datos");

$row_Consulta = mysqli_fetch_assoc($res_Consulta);
	
if(!is_null($row_Consulta['idUsuario']) )
{  // verifica si el dni ingresado existe en la base de datos
	
	$data = array('Rpta' => 1 ,'Nombre' => $row_Consulta['Nombre'],'Apellido' => $row_Consulta['Apellido'],'Carnet' => $row_Consulta['Carnet'],'Email' => $row_Consulta['Email']); 
	// Devuel los datos del usuario registrado
	print (json_encode($data)); 
	
	$Acreditado = "UPDATE Usuario SET Estado = 1, FechaAsistencia = DATE_SUB(NOW(), INTERVAL 4 HOUR) WHERE Carnet = '$Carnet'";
	mysqli_query( $conexion, $Acreditado);
}
else
{	// no se encuentra registrado en la base de datos
	$data = array('Rpta' => 0); 
	print (json_encode($data)); 	
}
?>
