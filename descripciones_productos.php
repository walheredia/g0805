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
  if ((isset($_POST['descripcion'])) && (isset($_POST['id_producto']))) {
    if (empty($_POST['id_descripcion'])) {
      $conn = new mysqli('localhost', 'mf000811_gulp', 'memisu17DU', 'mf000811_gulp');
      $sql = "INSERT INTO producto_descripcion(id_producto, descripcion)
              VALUES (
              '".$_POST['id_producto']."',
              '".$_POST['descripcion']."'
              );";
      if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: '. 'descripciones_productos.php?p='.$_POST['id_producto']);
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;die();
      }
    } else {
      $conn = new mysqli('localhost', 'mf000811_gulp', 'memisu17DU', 'mf000811_gulp');
      $sql = "UPDATE producto_descripcion
              SET 
              descripcion='".$_POST['descripcion']."'
              WHERE id_descripcion=".$_POST['id_descripcion']."
              ";
      if ($conn->query($sql) === TRUE) {
        header('Location: '. 'descripciones_productos.php?p='.$_POST['id_producto']);
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
    }
  }
  if (isset($_GET["p"])) {
    $conn = new mysqli('localhost', 'mf000811_gulp', 'memisu17DU', 'mf000811_gulp');
    //Nombre del producto
    $sql0 = "SELECT * from productos where id_producto = ".$_GET['p'];
    $nombre = $conn->query($sql0);
    while($row = $nombre->fetch_array()){
      $nombres[] = $row;
    }

    $nombre_producto = $nombres[0]['nombre'];
    $id_producto_desc = $nombres[0]['id_producto'];

    //Descripciones
    $sql1 = "SELECT * from producto_descripcion where id_producto = ".$_GET['p'];
    $desc = $conn->query($sql1);
    while($row = $desc->fetch_array()){
      $descripciones[] = $row;
    }
    $html="";
    try {
      if (!empty($descripciones)) {
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
                <th scope="row">'.$d['id_descripcion'].'</th>
                <td>'.$d['descripcion'].'</td>
                <td>
                  <a title="editar" href="" onclick="editar('."'".$d['id_descripcion']."'".'); return false;"><i class="fa fa-edit" aria-hidden="true" style="font-size: 18px;"></i></a>
                  <a title="eliminar" href="" onclick="confirmar('."'".$d['id_descripcion']."'".'); return false;"><i class="fa fa-remove" aria-hidden="true" style="font-size: 18px;"></i></a>
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
        <h3 class="text-center" style="padding-bottom: 20px;"><strong>Descripciones del producto:</strong> <?php echo strtoupper($nombre_producto); ?></h3>
    </div>
    <div style="width: 80%;" class="center-block">
        <?php 
        echo $html; ?>
        <div class="">
        <hr>
        <h3 class="text-center"><strong>Insertar descripcion nueva</strong></h3>
        <form class="form-horizontal center-block" action="descripciones_productos.php" method="post">
        <input type="hidden" class="form-control" id="id_descripcion" name="id_descripcion" value="" style="width: 100px;">
        <input type="hidden" class="form-control" id="id_producto" name="id_producto" value="<?php echo $id_producto_desc; ?>" style="width: 100px;">
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
  function editar(id){
    $.ajax({
      url: 'ajax.php',
      type: 'POST',
      data: 'cargar_menu_descripcion='+id,
      success: function(data) {
        var obj = $.parseJSON(data);
        $("#id_descripcion").val(obj[0].id_descripcion);
        $("#nombre").val(obj[0].nombre);
        $("#descripcion").val(obj[0].descripcion);

        $("#submit").val('Actualizar Descripcion');
        $("#insertar").css('visibility', 'visible');
      },
      error: function(){
      alert('Error!');
      }
    });
  }
  function limpiar(){
    $("#id_descripcion").val('');
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
    if (confirm('¿Realmente desea eliminar la descripción?')) {
      $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: 'eliminar_descripcion='+id,
        success: function(data) {
          location.reload();
        },
        error: function(){
        alert('Error!');
        }
      });
    }
  }
</script>
</html>