<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Registro de Usuarios</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" href="static/css/bootstrap.min.css" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="static/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="bg-black">
        <div class="form-box" id="login-box">
            <img src="static/images/logodonbosco.png" /> 
            <div class="header bg-blue">Registro de Usuarios</div>
            <form action="RegistrarUsuarios.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nombre"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="carnet" class="form-control" placeholder="No. Cedula de Indentidad"/>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email"/>
                    </div>
                </div>
                <div class="footer">            
                    <button id="BtnRegistrar" type="submit" class="btn bg-blue btn-block">Enviar</button>
                     <br>
                    <a href="ListaUsuarios.php">Ver inscritos</a>
                </div>
            </form>
        </div>

        <script src="static/js/jquery.min.js"></script>  
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>
