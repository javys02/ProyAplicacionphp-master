<?php 

	//define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
	//define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT'));
	//define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
	//define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
	//define('DB_NAME', getenv('OPENSHIFT_APP_NAME'));
	//Connect To Database
	//$conexion = mysql_connect(127.0.0.1, DB_USER, DB_PASS); 
	//$db = mysql_select_db( DB_NAME ) or die(mysql_error());
	
        // Datos de la base de datos nueva
	$usuario = "userbd";
	$password = "userbd";
	// SERVIDOR OPENSHIFT
	//$servidor = "mysql";

	// SERVIDOR LOCAL
	$servidor = "localhost";
	$basededatos = "acreditacionbd";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("mysql No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

?>
