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
  <body style="font-family: 'Cabin Condensed', sans-serif; background-image: url('images/background2.jpg');">
  <div id="topall" class="container nav-row animated fadeInDown" style="padding-top: 2px; width: 100%;">
    <div class="col-sm-12">
      <span id="top2" style="letter-spacing: 0px; text-transform: uppercase; font-weight: 550; color: #fff !important; width: 100%;">GÜLP, Objetos de Otra Galaxia</span>
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

          <a class="navbar-brand" href="index.php"><IMG SRC="images/transp.jpg" class="img-responsive center-block" style="width: 220px; margin-top: -31px;"></IMG></a>
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
    <form class="form-horizontal center-block" style="max-width: 900px; margin-top: -20px;">
      <div class="form-group" style="margin: 0px 4px 0px 4px;">
        <div class="col-sm-12 texto-contacto">
          <h4><strong>GÜLP<i class="fa fa-registered" style="font-size: 12px;" aria-hidden="true"></i></strong> Rosario, Santa Fe, Argentina</h4>
          <h4>+54 (0341) 012345678</h4>
          <h4>+54 (0341) 012345678</h4>
          <h4>contacto@email.com</h4>
          <hr/>
          <h4 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</h4>
        </div>
      </div>
      <div class="form-group" style="margin: -10px 4px 0px 4px;">
        <div class="col-sm-6">
          <label class="form-contacto">Nombre y Apellido</label>
          <input type="text" class="form-control border" id="nombre" required>
        </div>
        <div class="col-sm-6">
          <label class="form-contacto">Email</label>
          <input type="email" class="form-control border" id="email" required>
        </div>
      </div>
      <div class="form-group" style="margin: 0px 4px 0px 4px;">
        <div class="col-sm-6">
          <label class="form-contacto">Teléfono</label>
          <input type="text" class="form-control border" id="telefono" required>
        </div>
        <div class="col-sm-6">
          <label class="form-contacto">Provincia y Localidad</label>
          <input type="text" class="form-control border" id="localidad" required>
        </div>
      </div>
      <div class="form-group" style="margin: 0px 4px 4px 4px;">
        <div class="col-sm-12">
          <label class="form-contacto">Mensaje</label>
          <textarea id="mensaje" class="form-control border" rows="7" style="max-width: 900px;"></textarea>
        </div>
      </div>
      <div class="form-group" style="margin: 0px 4px 0px 4px;">
        <div class="col-sm-12">
          <input type="submit" id="submit" name="submit" value="Enviar" class="btn btn-primary form-control">
        </div>
      </div>
    </form>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function () {
        $('.carousel').carousel({
          pause: false,
          interval: 2500
        })
      });
      $("#topall").hover(function(){
        setTimeout(function(){
          $("#top1").addClass('animated fadeOutRight');
        }, 500);
        setTimeout(function(){
          $("#top3").addClass('animated fadeOutRight');
        }, 1000);
        setTimeout(function(){
          $("#top2").addClass('animated fadeOutRight');
        }, 1500);
        
        setTimeout(function(){
          $("#top1").removeClass('animated fadeOutRight');
          $("#top1").addClass('animated fadeInLeft');
        }, 2000);
        setTimeout(function(){
          $("#top3").removeClass('animated fadeOutRight');
          $("#top3").addClass('animated fadeInLeft');
        }, 2500);
        setTimeout(function(){
          $("#top2").removeClass('animated fadeOutRight');
          $("#top2").addClass('animated fadeInTop');
        }, 2000);

        setTimeout(function(){
          $("#top2").removeClass('animated fadeOutRight');
          $("#top2").addClass('animated flash');
        }, 3500);

      });

      $("#1").hover(function(){
        $(this).addClass('animated pulse');
        
        setTimeout(function(){
          $("#1").removeClass('animated pulse');
        }, 1000);
      });
      $("#2").hover(function(){
        $(this).addClass('animated pulse');
        
        setTimeout(function(){
          $("#2").removeClass('animated pulse');
        }, 1000);
      });
      $("#3").hover(function(){
        $(this).addClass('animated pulse');
        
        setTimeout(function(){
          $("#3").removeClass('animated pulse');
        }, 1000);
      });
      $("#4").hover(function(){
        $(this).addClass('animated pulse');
        
        setTimeout(function(){
          $("#4").removeClass('animated pulse');
        }, 1000);
      });

      $("#iso").hover(function(){
        setTimeout(function(){
          $("#iso").removeClass('animated rotateIn');
        }, 1000);
        
        setTimeout(function(){
          $("#iso").addClass('animated rotateIn');
        }, 300);
      });

      $("#prod").hover(function(){
        $("#prod").addClass('animated flipInX');

        setTimeout(function(){
          $("#prod").removeClass('animated flipInX');
        }, 2000);

      });


  </script>

    <footer class="footer">
      <p>Ind. Argentina, Santa Fe, Rosario</p>
      <p>G&Uuml;LP&#174; <?php echo date("Y")?> - Todos los derechos reservados.</p>
    </footer>   
  </body>
  
</html>