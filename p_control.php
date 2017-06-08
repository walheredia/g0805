<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GÜLP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/icono.png">

  </head>
  <body style="font-family: 'Cabin Condensed', sans-serif; background-image: url('images/background2.jpg'); background-attachment: fixed">
  <div id="topall" class="container nav-row animated fadeInDown" style="padding-top: 2px; width: 100%;">
    <div class="col-sm-12">
      <span id="top2" style="letter-spacing: 0px; text-transform: uppercase; font-weight: 600; color: #fff !important; width: 100%;">GÜLP, Objetos de Otra Galaxia</span>
    </div>
  </div>

  </div>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse bg-color" style="padding: 15px 0px 15px 0px">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="index.php"><IMG SRC="images/logo_tr_nuevo.png" class="img-responsive center-block" style="width: 190px; margin-top: -28px;"></IMG></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="font-size: 18.5px; font-family: 'Cabin Condensed', sans-serif !important;">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="puntos_de_venta.php">Puntos de venta</a></li>
            <li><a href="como_comprar.php">Cómo comprar</a></li>
            <li class="active"><a href="contacto.php">Contacto</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
            <li><a href="../navbar/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--End navbar -->
    <form class="form-horizontal center-block" style="max-width: 900px; margin-top: -20px;" action="p_control_php.php" enctype="multipart/form-data" method="post">
      <div class="form-group" style="margin: 0px 4px 0px 4px;">
        <div class="col-sm-12 texto-contacto">
          <label for="imagen">Imagen:</label> 
          <input id="imagen" name="imagen" size="30" type="file" />
          <input type="submit" value="Guardar Imagen" />
        </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </form>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">



  </script>

    <footer class="footer" style="">
      <p>Ind. Argentina, Santa Fe, Rosario</p>
      <p>G&Uuml;LP&#174; <?php echo date("Y")?> - Todos los derechos reservados.</p>
    </footer>   
  </body>
  
</html>