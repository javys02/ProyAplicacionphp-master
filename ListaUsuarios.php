<?php 

include_once('Settings/conexion.php');

$query = "SELECT * FROM Usuario";

$res_Usuarios = mysqli_query( $conexion, $query ) or die ( "Error en la consulta del listado en la base de datos");

?>
<!DOCTYPE html>
<html >
	<head>
		 <!--Aplicando  Datatables Jquery Plugin with Php MySql and Bootstrap-->
		<meta charset="UTF-8">
			<title>Lista de Usuarios</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
			<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
			<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> 

			<!--
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
            <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        	-->
            <script src="static/js/jquery.min.js"></script>  
            <link rel="stylesheet" href="static/css/bootstrap.min.css" />  
            <script src="static/js/jquery.dataTables.min.js"></script>  
            <script src="static/js/dataTables.bootstrap.min.js"></script>            
            <link rel="stylesheet" href="static/css/dataTables.bootstrap.min.css" />
			<!-- Theme style -->
	</head>
      <body>  
           
           <div class="container">  
           		<a href="index.php" >Registrar otro usuario</a>
                <h2 align="center">Usuarios Registrados - Colegio Don Bosco</h2>  
                <div class="table-responsive">  
                     <table id="usuarios_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <th>Nombre </th>
									<th>Apellido</th>
									<th>No C.I.</th>
									<th>Email</th>
									<th>Fecha Registro</th>
									<th>Estado</th>
									<th>Fecha Asistencia</th>  
                               </tr>  
                          </thead>  

                        <?php 
								while ($row_Usuario = mysqli_fetch_assoc($res_Usuarios)) {
							?> 
							<tr>
								<td><?php echo $row_Usuario['Nombre']?></td>
								<td><?php echo $row_Usuario['Apellido']; ?></td>
								<td><?php echo $row_Usuario['Carnet']; ?></td>
								<td><?php echo $row_Usuario['Email']; ?></td>
								<td><?php echo $row_Usuario['FechaRegistro']; ?></td>
								<td><?php if(!strcmp($row_Usuario['Estado'], '1')){ ?><i style="color: green" class="fa fa-check-circle fa-2x"></i> <?php }else{ ?> <i style="color: red" class="fa fa-times fa-2x"></i> <?php } ?></td>
								<td><?php echo $row_Usuario['FechaAsistencia']; ?></td>
							</tr>
							<?php 
								$cont =  1;
								}
							?>
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#usuarios_data').DataTable();  
 });  
 </script>  


