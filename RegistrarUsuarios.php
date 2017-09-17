<?php 
	include_once('Settings/conexion.php');
	include_once('static/lib/phpqrcode/qrlib.php');

	$Nombre = $_POST['name']; 
	$Apellido = $_POST['apellido'];
	$Carnet = $_POST['carnet'];
	$Email = $_POST['email']; 

	$filename = "QRUsuarios/".$Carnet.".png";
	$tamCodeQR = 10;
	$CorrectionError = "M"; // M Q (H mejor)

	if (!is_null($Carnet) && $Nombre!="" && $Apellido!="") {
	  	QRcode::png($Carnet, $filename, $CorrectionError, $tamCodeQR, 2); 

		$UsuarioNuevo = "INSERT INTO Usuario (Nombre, Apellido, Carnet, Email ) value ('$Nombre', '$Apellido', '$Carnet', '$Email')";

		$resultado = mysqli_query( $conexion, $UsuarioNuevo ) or die ( "Algo ha ido mal en la consulta a la base de datos");

		header("Location:UsuarioRegistrado.php?carnet=".$Carnet."&nombre=".$Nombre."&apellido=".$Apellido."&email=".$Email);

	} 
?>
