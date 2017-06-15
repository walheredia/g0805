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
  $conn = new mysqli('localhost', 'root', '', 'gulp');
  $sql_prod = "SELECT * from productos";
  $result = $conn->query($sql_prod);
   while($row = $result->fetch_array()){
  $productos[] = $row;
  }
  $html = "";
  $html .= '<table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Producto</th>
                  <th>Descripcion</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>';
  foreach ($productos as $p) {
    $html .= '<tr>
                <th scope="row">'.$p["id_producto"].'</th>
                <td>'.$p["nombre"].'</td>
                <td>'.$p["descripcion"].'</td>
              <td>
                <a title="editar" href="" onclick="editar('.$p["id_producto"].'); return false;"><i class="fa fa-edit" aria-hidden="true" style="font-size: 18px;"></i></a>
                <a title="descripciones (párrafos)" href="" onclick="'."window.location.replace('descripciones_productos.php?p=".$p['id_producto']."')".'; return false;"><i class="fa fa-file-text" aria-hidden="true" style="font-size: 18px;"></i></a>
                <a title="imagenes" href="" onclick="'."window.location.replace('imagenes_productos.php?p=".$p['id_producto']."')".'; return false;"><i class="fa fa-picture-o" aria-hidden="true" style="font-size: 18px;"></i></a>
                <a title="eliminar" id= href="" onclick="confirmar('.$p["id_producto"].');"><i class="fa fa-remove" aria-hidden="true" style="font-size: 18px;"></i></a>
              </td>
            </tr>';
  }
  $html .= '</tbody>
            </table>';
  $conn->close();

  if ((isset($_POST['nombre']) && (isset($_POST['descripcion'])))) {
    if (empty($_POST['id_producto'])) {
      $conn = new mysqli('localhost', 'root', '', 'gulp');
      $sql = "INSERT INTO productos(nombre, descripcion)
              VALUES (
              '".$_POST['nombre']."',
              '".$_POST['descripcion']."'
              );";
      if ($conn->query($sql) === TRUE) {
        header('Location: '. 'menu_productos.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
    } else {
      $conn = new mysqli('localhost', 'root', '', 'gulp');
      $sql = "UPDATE productos
              SET 
              nombre='".$_POST['nombre']."',
              descripcion='".$_POST['descripcion']."'
              WHERE id_producto=".$_POST['id_producto']."
              ";
      if ($conn->query($sql) === TRUE) {
        header('Location: '. 'menu_productos.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
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
        <h3 class="text-center" style="padding-bottom: 20px;"><strong>Productos disponibles</strong></h3>
    </div>
    <div style="width: 80%;" class="center-block">
        <?php echo $html; ?> 
        <div class="">
        <hr>
        <h3 class="text-center"><strong>Insertar producto nuevo</strong></h3>
        <form class="form-horizontal center-block" action="menu_productos.php" method="post">
        <input type="hidden" class="form-control" id="id_producto" name="id_producto" value="">
          <div class="form-group" style="margin: 1px 4px 0px 4px;">
            <div class="col-sm-6">
              <label class="">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required value="" maxlength="27">
            </div>
            <div class="col-sm-6">
              <label class="">Descripcion</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion" required value="" maxlength="27">
            </div>
          </div>
        </div>
        <div class="form-group" style="padding-top: 20px;">
          <div class="col-sm-12">
            <input style="margin-top: 5px;" type="submit" id="submit" name="submit" value="Guardar Producto" class="btn btn-primary form-control">
          </div>
        </div>
        <div class="form-group" style="padding-top: 20px;">
          <div class="col-sm-2 pull-right">
            <input style="margin-top: 5px; visibility: hidden;" onclick="limpiar();" type="button" id="insertar" name="submit" value="Insertar nuevo" class="btn btn-success form-control">
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
      data: 'cargar_menu_producto='+id,
      success: function(data) {
        var obj = $.parseJSON(data);
        $("#id_producto").val(obj[0].id_producto);
        $("#nombre").val(obj[0].nombre);
        $("#descripcion").val(obj[0].descripcion);
        $("#submit").val('Actualizar Producto');
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
    $("#submit").val('Guardar Producto');
    $("#insertar").css('visibility', 'hidden');
  }
	$(function () {
		<?php if(isset($_GET['err'])): ?>
			alert('Credenciales Incorrectas');
		<?php endif ?>
	});

  function confirmar(id){
    if (confirm('¿Realmente desea eliminar el producto? (Todas las descripciones e imágenes del producto serán eliminadas)')) {
      $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: 'eliminar_producto='+id,
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