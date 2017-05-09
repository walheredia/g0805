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
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
  <div class="nav-row" style="height: 15px; width: 100%;">
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
          <a class="navbar-brand" href="index.php">GÜLP<i class="fa fa-registered" aria-hidden="true" style="font-size:12px"></i></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
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
    <div id="contenedor" style="width: 100%; padding-top: 52px;" class="center-block">
      <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item"><img  src="images/1.jpg" alt="banner1" class="img-responsive center-block" /></div>
          <div class="item"><img  src="images/2.jpg" alt="banner2" class="img-responsive center-block" /></div>
          <div class="item"><img  src="images/1.jpg" alt="banner3" class="img-responsive center-block" /></div>
          <div class="item"><img  src="images/2.jpg" alt="banner4" class="img-responsive center-block" /></div>
          <div class="item"><img  src="images/1.jpg" alt="banner5" class="img-responsive center-block" /></div>
        </div>
        <!-- Carousel nav 
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        -->
      </div>
  </div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function () {
        $('.carousel').carousel({
          pause: false,
          interval: 3000
        })
      });
  </script>
    
  </body>
  
</html>