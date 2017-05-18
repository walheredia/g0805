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
  <body style="font-family: 'Cabin Condensed', sans-serif;">
  <div id="topall" class="container nav-row animated fadeInDown" style="padding-top: 2px; width: 100%;">
    <div class="col-sm-4">
      <i id="top1" class="fa fa-fighter-jet" aria-hidden="true" style="color: #fff; width: 30%;"></i>  
    </div>
    <div class="col-sm-4">
      <span id="top2" style="letter-spacing: 0px; text-transform: uppercase; font-weight: 550; color: #fff !important; width: 100%;">GÜLP, Objetos de Otra Galaxia</span>
    </div>
    <div class="col-sm-4">
      <i id="top3" class="fa fa-rocket" aria-hidden="true" style="color: #fff; width: 30%;"></i>
    </div>
  </div>
    <!--
    <i id="top1" class="fa fa-fighter-jet" aria-hidden="true" style=" color: #fff; width: 100%;"></i>
    <i id="top2" class="fa fa-fighter-jet" aria-hidden="true" style="float: left; color: #fff; width: 100%;"></i>
    <p id="top1" style="display: inline;"><i class="fa fa-fighter-jet" aria-hidden="true" style="color: #fff;"></i></p>
    <p id="top2" style="display: inline; letter-spacing: 1px; text-transform: uppercase; font-weight: 550; color: #fff !important;">GÜLP,</p>
    <p id="top3" style="display: inline; letter-spacing: 1px; text-transform: uppercase; font-weight: 550; color: #fff !important;">Objetos</p>
    <p id="top4" style="display: inline; letter-spacing: 1px; text-transform: uppercase; font-weight: 550; color: #fff !important;">de </p>
    <p id="top5" style="display: inline; letter-spacing: 1px; text-transform: uppercase; font-weight: 550; color: #fff !important;">Otra</p>
    <p id="top6" style="display: inline; letter-spacing: 1px; text-transform: uppercase; font-weight: 550; color: #fff !important;">Galaxia</p>
    <p id="top7" style="display: inline;"><i class="fa fa-rocket" aria-hidden="true" style="color: #fff;"></i></p>
    -->
  </div>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse bg-color">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="index.php"><IMG SRC="images/transp.jpg" class="img-responsive center-block" style="width: 168px; margin-top: -15px;"></IMG></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="font-size: 18.5px; font-family: 'Cabin Condensed', sans-serif !important;">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Puntos de venta</a></li>
            <li><a href="#">Cómo comprar</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
            <li><a href="../navbar/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--End navbar -->
    <!--start carousel -->
    <div id="contenedor" style ="margin-top: -12px;" class="center-block col-sm-12">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item"><img  src="images/pr2.jpg" alt="banner1" class="img-responsive center-block animated bounceInRight" /></div>
          <div class="item"><img src="images/pr2.jpg" alt="banner2" class="img-responsive center-block animated bounceInRight" /></div>
          <div class="item"><img src="images/pr2.jpg" alt="banner3" class="img-responsive center-block animated bounceInRight" /></div>
          <div class="item"><img src="images/pr2.jpg" alt="banner4" class="img-responsive center-block animated bounceInRight" /></div>
          <div class="item"><img src="images/pr2.jpg" alt="banner5" class="img-responsive center-block animated bounceInRight" /></div>
        </div>
        <!-- Carousel nav 
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        -->
      </div>
  </div>
  <img id="iso" src="images/iso.png" alt="banner4" class="img-responsive center-block animated rotateIn" style="padding-top: 10px;" />
  <div class="container middle">
    
    <hr style="width: 100%;" />
    <h2 id="conozca" class="conozca">¡Conozca nuestros productos!</h2>
    <hr style="width: 100%;" />
  </div>

  <div class="container" style="padding-top: 15px; padding-bottom: 30px;">
    <div class="row">
      <div class="col-md-3">
        <div class="nombre">Nombre del Producto</div>
        <div class="descripcion">Esta es la descripcion del producto</div>
        <img src="images/2.jpg" id="1" alt="banner1" class="img-responsive center-block img-thumbnail"/>
      </div>
      <div class="col-md-3">
        <div class="nombre">Nombre del Producto</div>
        <div class="descripcion">Esta es la descripcion del producto</div>
        <img src="images/2.jpg" id="2" alt="banner1" class="img-responsive center-block img-thumbnail"/>
      </div>
      <div class="col-md-3">
        <div class="nombre">Nombre del Producto</div>
        <div class="descripcion">Esta es la descripcion del producto</div>
        <img src="images/2.jpg" id="3" alt="banner1" class="img-responsive center-block img-thumbnail"/>
      </div>
      <div class="col-md-3">
        <div class="nombre">Nombre del Producto</div>
        <div class="descripcion">Esta es la descripcion del producto</div>
        <img src="images/2.jpg" id="4" alt="banner1" class="img-responsive center-block img-thumbnail"/>
      </div>
    </div>
  </div>
   <div class="container" style="padding-bottom: 30px;">
    <div class="row">
      <div class="col-md-3">
        <div class="nombre">Nombre del Producto</div>
        <div class="descripcion">Esta es la descripcion del producto</div>
        <img src="images/2.jpg" id="5" alt="banner1" class="img-responsive center-block img-thumbnail"/>
      </div>
      <div class="col-md-3">
        <div class="nombre">Nombre del Producto</div>
        <div class="descripcion">Esta es la descripcion del producto</div>
        <img src="images/2.jpg" id="6" alt="banner1" class="img-responsive center-block img-thumbnail"/>
      </div>
      <div class="col-md-3">
        <div class="nombre">Nombre del Producto</div>
        <div class="descripcion">Esta es la descripcion del producto</div>
        <img src="images/2.jpg" id="7" alt="banner1" class="img-responsive center-block img-thumbnail"/>
      </div>
      <div class="col-md-3">
        <div class="nombre">Nombre del Producto</div>
        <div class="descripcion">Esta es la descripcion del producto</div>
        <img src="images/2.jpg" id="8" alt="banner1" class="img-responsive center-block img-thumbnail"/>
      </div>
    </div>
  </div>

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

      $("#5").hover(function(){
        $(this).addClass('animated pulse');
        
        setTimeout(function(){
          $("#5").removeClass('animated pulse');
        }, 1000);
      });
      $("#6").hover(function(){
        $(this).addClass('animated pulse');
        
        setTimeout(function(){
          $("#6").removeClass('animated pulse');
        }, 1000);
      });
      $("#7").hover(function(){
        $(this).addClass('animated pulse');
        
        setTimeout(function(){
          $("#7").removeClass('animated pulse');
        }, 1000);
      });
      $("#8").hover(function(){
        $(this).addClass('animated pulse');
        
        setTimeout(function(){
          $("#8").removeClass('animated pulse');
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

      $("#conozca").hover(function(){
        $("#conozca").addClass('animated flash');

        setTimeout(function(){
          $("#conozca").removeClass('animated flash');
        }, 2000);

      });


  </script>

    <footer class="footer">
    <img src="images/naave.png" class="pull-right img-responsive animated infinite zoomOutLeft" style="">
      <p>Ind. Argentina, Santa Fe, Rosario</p>
      <p>G&Uuml;LP&#174; <?php echo date("Y")?> - Todos los derechos reservados.</p>
    </footer>   
  </body>
  
</html>