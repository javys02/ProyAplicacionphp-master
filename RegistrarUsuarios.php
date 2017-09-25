<?php 
//--------------------------------------------
// Registra el usuario en la base de datos
//--------------------------------------------
	include_once('Settings/conexion.php');
	include_once('static/lib/phpqrcode/qrlib.php');

	$Nombre = $_POST['name']; 
	$Apellido = $_POST['apellido'];
	$Carnet = $_POST['carnet'];
	$Email = $_POST['email']; 

	$filename = "QRUsuarios/".$Carnet.".png";
	$tamCodeQR = 10;
	$CorrectionError = "M"; // M Q (H mejor)

	if ($Carnet !="" && $Nombre!="" && $Apellido!="") {
	  	// Genera codigo QR
	  	QRcode::png($Carnet, $filename, $CorrectionError, $tamCodeQR, 2); 

  		// Inserta nuevo usuario en la BD
		$UsuarioNuevo = "INSERT INTO Usuario (Nombre, Apellido, Carnet, Email,FechaRegistro) value ('$Nombre', '$Apellido', '$Carnet', '$Email', DATE_SUB(NOW(), INTERVAL 4 HOUR))";

		$resultado = mysqli_query( $conexion, $UsuarioNuevo ) or die ( "Algo ha ido mal en la consulta a la base de datos".mysqli_error($conexion));

		header("Location:UsuarioRegistrado.php?carnet=".$Carnet."&nombre=".$Nombre."&apellido=".$Apellido."&email=".$Email);

	} 
?>