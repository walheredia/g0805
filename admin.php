<?php 
	session_start();
	session_destroy();
	if (isset($_POST["username"])) {
		if (($_POST["username"] == 'gadmin') && ($_POST["password"] == 'Pa$$w0rd2017')) {
			session_start();
			$_SESSION['username'] = 'gadmin';
			header("Location: menu.php");
		} else {
			session_start();
			session_destroy();
			header("Location: admin.php?err");
		}
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin GÜLP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/icono.png">
</head>
<body>
	<nav class="navbar navbar-inverse bg-color" style="padding: 15px 0px 15px 0px">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="admin.php"><IMG SRC="images/logo_tr_nuevo.png" class="img-responsive center-block" style="width: 190px; margin-top: -28px;"></IMG></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="font-size: 18.5px; font-family: 'Cabin Condensed', sans-serif !important;">
          <ul class="nav navbar-nav" id="nav_admin" style="visibility: hidden;">
            <li><a href="admin.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
          </ul>
        </div>
      </div>
    </nav>
        <div class="container">
        
        <div class="row text-center">

            <h1>Iniciar Sesión</h1>

            <div class="col-md-4 col-md-offset-4 text-left">
                
                <form action="admin.php" method="post" class="form-vertical" role="form">
                    
                    <div class="form-group">
                        
                        <div class="col-sm-12">
                            <p class="help-block margin-bottom-cero"><small>Usuario:</small></p>
                            <input type="text" name="username" placeholder="Nombre de usuario" class="form-control" required>
                        </div>

                    </div>

                    <div class="form-group">
                        
                        <div class="col-sm-12">
                            <p class="help-block margin-bottom-cero"><small>Contraseña:</small></p>
                            <input type="password" name="password" placeholder="Contraseña" class="form-control" required>
                        </div>
                        
                    </div>
                     <div class="form-group">
                    <div class="form-group">
                    </div>
                        <div class="col-sm-12" style="padding-top: 15px;">
                            <input type="submit" value="Iniciar Sesión" class="btn btn-danger form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

	$(function () {
		<?php if(isset($_GET['err'])): ?>
			alert('Credenciales Incorrectas');
		<?php endif ?>
	});
</script>
</html>