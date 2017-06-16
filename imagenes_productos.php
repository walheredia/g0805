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
  if (isset($_GET["p"])) {
    $conn = new mysqli('localhost', 'root', '', 'gulp');
    //Nombre del producto
    $sql0 = "SELECT * from productos where id_producto = ".$_GET['p'];
    $nombre = $conn->query($sql0);
    while($row = $nombre->fetch_array()){
      $nombres[] = $row;
    }

    $nombre_producto = $nombres[0]['nombre'];
    $id_producto = $nombres[0]['id_producto'];

    //Multimedia
    $sql1 = "SELECT * from producto_multimedia where id_producto = ".$_GET['p'];
    $desc = $conn->query($sql1);
    while($row = $desc->fetch_array()){
      $multimedia[] = $row;
    }
    $html="";
    try {
      if (!empty($multimedia)) {
        $html.='<table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Imágenes/Videos</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>';
      foreach ($multimedia as $m) {
        $html.='<tr>
                <th scope="row">'.$m['id_multimedia'].'</th>
                <td><img src="images/products/'.$m["multimedia"].'" alt="banner1" class="img-responsive img-rounded" style="width: 50px; height: 50px;" /></td>
                <td>
                  <a title="eliminar" href="" onclick="confirmar('."'".$m['id_multimedia']."'".'); return false;"><i class="fa fa-remove" aria-hidden="true" style="font-size: 18px;"></i></a>
                </td>
              </tr>';
      }
      $html .='</tbody>
            </table>';  
      }
    } catch (Exception $e) {
         
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
        <div class=""><a href="menu_productos.php" title="Regresar"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="font-size: 35px;"></i></a></div>
        <h3 class="text-center" style="padding-bottom: 20px;"><strong>Imagenes/Videos del producto:</strong> <?php echo $nombre_producto; ?></h3>
    </div>
    <div style="width: 80%;" class="center-block">
    <?php echo $html; ?>
    <div class="">
        <hr>
        <h3 class="text-center"><strong>Insertar imagen nueva</strong></h3>
        <form class="form-horizontal center-block" style="max-width: 900px; margin-top: -20px;" action="imagenes_productos_upload.php" enctype="multipart/form-data" method="post">
        <input type="hidden" class="form-control" id="id_producto" name="id_producto" value="<?php echo $id_producto; ?>" style="width: 100px;">
          <div class="form-group" style="padding-top: 20px;">
            <div class="col-sm-12">
              <input class="img-selector" id="imagen" name="imagen" size="30" type="file" />
              <input style="margin-top: 5px;" type="submit" id="submit" name="submit" value="Guardar Imagen" class="btn btn-primary form-control">
            </div>
          </div>
        </form>
    </div>
    <div>
      <hr>
      <h3 class="text-center"><strong>Insertar video nuevo</strong></h3>
      <div style="max-width: 950px;" class="center-block">
        <div class="form-group" style="margin: 1px 4px 0px 4px;">
        <div class="col-sm-12">
          <label class="">URL <small>Pasos para obtener el link; Ir al video de YouTube, click derecho sobre él y seleccionar 'Copy embed code', (de todo ese texto obtenido, solamente pegar el link. Ejemplo: https://www.youtube.com/embed/K6nU3YoVgvU)</small></label>
          <input type="text" class="form-control" id="video" name="video" required value="" placeholder="https://www.youtube.com/embed/K6nU3YoVgvU">
        </div>
        <div class="form-group" style="padding-top: 20px;">
            <div class="col-sm-12">
              <input style="margin-top: 5px;" onclick="guardar_video();" type="submit" name="submit" value="Guardar Enlace" class="btn btn-primary form-control">
            </div>
          </div>
      </div>
      </div>
    </div>
    <div style="margin-top: 150px;">
      
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
  function confirmar(id){
    if (confirm('¿Realmente desea eliminar el archivo?')) {
      $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: 'eliminar_imagen='+id,
        success: function(data) {
          location.reload();
        },
        error: function(){
        alert('Error!');
        }
      });
    }
  }
  $(document).ready(function () {
    $('.img-selector').css('font-size','18px');
  });
  function guardar_video(){
    var video="video="+$("#video").val();
    $.ajax({
      url: 'ajax.php',
      type: 'POST',
      data: video,
      success: function(data) {
        location.reload();
      },
      error: function(){
      alert('Error!');
      }
    });
  }
  fu
</script>
</html>