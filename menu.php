<?php
  //Inicio chequeo de Sesión
    session_start();
    if (isset($_SESSION['username'])) {
    } else {
        header("Location: admin.php");
    }
  //Fin chequeo de Sesión
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

          <a class="navbar-brand" href="menu.php"><IMG SRC="images/logo_tr_nuevo.png" class="img-responsive center-block" style="width: 190px; margin-top: -28px;"></IMG></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="font-size: 18.5px; font-family: 'Cabin Condensed', sans-serif !important;">
            <ul class="nav navbar-nav" id="nav_admin" style="">
                <li class="active"><a href="menu.php">Inicio</a></li>
                <li> <a href="menu_productos.php">Productos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li style="padding: 10px 10px; color: #9d9d9d;"><?php echo 'GADMIN'; ?></li>
                <li title="Salir"><a href="admin.php"><i class="fa fa-sign-out" aria-hidden="true" style=""></i></a></li>
            </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        <h3 class="text-center" style="padding-bottom: 20px;"><strong>Imágenes del Carrusel</strong> (Tamaño ideal 1326 X 473)</h3>
    </div>
    <div style="width: 80%;" class="center-block">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Imagen</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>imagen del carousel</td>
              <td><a href="" onclick="alert('delete');"><i class="fa fa-remove" aria-hidden="true" style="font-size: 20px;"></i></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>imagen del carousel</td>
              <td><a href="" onclick="alert('delete');"><i class="fa fa-remove" aria-hidden="true" style="font-size: 20px;"></>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>imagen del carousel</td>
              <td><a href="" onclick="alert('delete');"><i class="fa fa-remove" aria-hidden="true" style="font-size: 20px;"></
            </tr>
          </tbody>
        </table>
        <form class="form-horizontal center-block" style="max-width: 900px; margin-top: -20px;" action="p_control_php.php" enctype="multipart/form-data" method="post">
          <div class="form-group" style="padding-top: 20px;">
            <div class="col-sm-12">
              <input class="" id="imagen" name="imagen" size="30" type="file" />
              <input style="margin-top: 5px;" type="submit" id="submit" name="submit" value="Guardar Imagen" class="btn btn-primary form-control">
            </div>
          </div>
        </form>
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