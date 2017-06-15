<?php
  //Inicio chequeo de Sesión
    session_start();
    if (isset($_SESSION['username'])) {
    } else {
        header("Location: admin.php");
    }
  //Fin chequeo de Sesión
?>
<?php 
  if ((isset($_POST['nombre']) && (isset($_POST['descripcion'])))) {
    echo "Guardar acá";die();
  }
  if (isset($_GET["p"])) {
    $conn = new mysqli('localhost', 'root', '', 'gulp');
    //Descripciones
    $sql1 = "SELECT * from producto_descripcion where id_producto = ".$_GET['p'];
    $desc = $conn->query($sql1);
    while($row = $desc->fetch_array()){
      $descripciones[] = $row;
    }
    $html="";
    try {
      
    } catch (Exception $e) {
      $html.='<table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Descripciones</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>';
      foreach ($descripciones as $d) {
        $html.='<tr>
                <th scope="row">1</th>
                <td>Descripcion</td>
                <td>
                  <a title="editar" href="" onclick="editar(); return false;"><i class="fa fa-edit" aria-hidden="true" style="font-size: 18px;"></i></a>
                  <a title="eliminar" href="" onclick="alert("delete");"><i class="fa fa-remove" aria-hidden="true" style="font-size: 18px;"></i></a>
                </td>
              </tr>';
      }
      $html .='</tbody>
            </table>';      
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

        <a class="navbar-brand" href="menu.php"><IMG SRC="images/logo_tr_nuevo.png" class="img-responsive center-block" style="width: 190px; margin-top: -28px;"></IMG></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse" style="font-size: 18.5px; font-family: 'Cabin Condensed', sans-serif !important;">
        <ul class="nav navbar-nav" id="nav_admin" style="">
          <li><a href="menu.php">Inicio</a></li>
          <li class="active"> <a href="menu_productos.php">Productos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
              <li style="padding: 10px 10px; color: #9d9d9d;"><?php echo 'GADMIN'; ?></li>
              <li title="Salir"><a href="admin.php"><i class="fa fa-sign-out" aria-hidden="true" style=""></i></a></li>
          </ul>
      </div>
    </div>
  </nav>
      <div class="container">
      <div class=""><a href="menu_productos.php" title="Volver"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="font-size: 35px;"></i></a></div>
        <h3 class="text-center" style="padding-bottom: 20px;"><strong>Descripciones del producto:</strong> producto</h3>
    </div>
    <div style="width: 80%;" class="center-block">
        <?php 
        echo $html; ?>
        <div class="">
        <hr>
        <h3 class="text-center"><strong>Insertar descripcion nueva</strong></h3>
        <form class="form-horizontal center-block" action="menu_productos.php" method="post">
        <input type="hidden" class="form-control" id="id_descripcion" name="id_descripcion" value="">
          <div class="form-group" style="margin: 1px 4px 0px 4px;">
            <div class="col-sm-12">
              <label class="">Descripción</label>
              <textarea class="form-control" id="descripcion" name="descripcion" value="" required></textarea>
            </div>
          </div>
        </div>
        <div class="form-group" style="padding-top: 20px;">
          <div class="col-sm-12">
            <input style="margin-top: 5px;" type="submit" id="submit" name="submit" value="Guardar Descripcion" class="btn btn-primary form-control">
          </div>
        </div>
        <div class="form-group" style="padding-top: 20px;">
          <div class="col-sm-2 pull-right">
            <input style="margin-top: 5px; visibility: hidden;" onclick="limpiar();" type="button" id="insertar" name="submit" value="Insertar nueva" class="btn btn-success form-control">
          </div>
        </div>
        </form>
    </div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  function editar(){
    $.ajax({
      url: 'ajax.php',
      type: 'POST',
      data: 'cargar_menu_producto=1',
      success: function(data) {
        $("#id_producto").val('asd');
        $("#nombre").val('asd');
        $("#descripcion").val('asd');
        $("#submit").val('Actualizar Descripcion');
        $("#insertar").css('visibility', 'visible');
      },
      error: function(){
      alert('Error!');
      }
    });
  }
  function limpiar(){
    $("#id_producto").val('');
    $("#nombre").val('');
    $("#descripcion").val('');
    $("#submit").val('Guardar Descripcion');
    $("#insertar").css('visibility', 'hidden');
  }
	$(function () {
		<?php if(isset($_GET['err'])): ?>
			alert('Credenciales Incorrectas');
		<?php endif ?>
	});
</script>
</html>