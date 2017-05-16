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
  <div id="topall" class="nav-row" style="padding-top: 2px;">
    <p id="top1" style="display: inline;"><i class="fa fa-fighter-jet" aria-hidden="true" style="color: #fff;"></i></p>
    <p id="top2" style="display: inline; letter-spacing: 1px; text-transform: uppercase; font-weight: 550; color: #fff !important;">GÜLP,</p>
    <p id="top3" style="display: inline; letter-spacing: 1px; text-transform: uppercase; font-weight: 550; color: #fff !important;">Objetos</p>
    <p id="top4" style="display: inline; letter-spacing: 1px; text-transform: uppercase; font-weight: 550; color: #fff !important;">de </p>
    <p id="top5" style="display: inline; letter-spacing: 1px; text-transform: uppercase; font-weight: 550; color: #fff !important;">Otra</p>
    <p id="top6" style="display: inline; letter-spacing: 1px; text-transform: uppercase; font-weight: 550; color: #fff !important;">Galaxia</p>
    <p id="top7" style="display: inline;"><i class="fa fa-rocket" aria-hidden="true" style="color: #fff;"></i></p>
  </div>
    
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
    <div id="contenedor" stly="padding-top:-10px;" class="center-block col-sm-12">
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
  <div class="container">
  <img src="images/iso.png" alt="banner4" class="img-responsive center-block animated bounceInRight" />
    <hr/>
  </div>
  <div class="container">
    <h2> Conozca nuestros productos!
    </h2>
    <hr/>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="images/2.jpg" id="1" alt="banner1" class="img-responsive center-block img-thumbnail"/>
      </div>
      <div class="col-md-3">
        <img src="images/2.jpg" id="2" alt="banner1" class="img-responsive center-block img-thumbnail"/>
      </div>
      <div class="col-md-3">
        <img src="images/2.jpg" id="3" alt="banner1" class="img-responsive center-block img-thumbnail"/>
      </div>
      <div class="col-md-3">
        <img src="images/2.jpg" id="4" alt="banner1" class="img-responsive center-block img-thumbnail"/>
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
        $("#top1").addClass('animated fadeOutDown');
        $("#top2").addClass('animated lightSpeed');
        
        setTimeout(function(){
          $("#1").removeClass('animated pulse');
        }, 1000);
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


  </script>

    <footer class="footer">
      <p>Ind. Argentina, Santa Fe, Rosario</p>
      <p>G&Uuml;LP&#174; <?php echo date("Y")?> - Todos los derechos reservados.</p>
    </footer>   
  </body>
  
</html>