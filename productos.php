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
  <style type="text/css">
	.titulo {
		font-family: 'Cabin Condensed', 'sans-serif';
		color: #01bbee;
		font-size: 40px;
		text-align: center;
		margin: 7px 0 0;
		font-weight: 600;
		letter-spacing: -1px;
		text-overflow: ellipsis;
		overflow: hidden;
		white-space: nowrap;
	}

	.desc {
		font-family: 'Shadows Into Light', cursive;
		color: #192328;
		font-size: 17px;
		text-overflow: ellipsis;
		overflow: hidden;
		white-space: nowrap;
		letter-spacing: -1px;
		padding-bottom: 5px;
	}
  </style>
  </div>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse bg-color" style="margin-bottom: 0px;">
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
            <li><a href="index.php">Inicio</a></li>
            <li class="active"><a href="productos.php">Productos</a></li>
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

  <div class="container">
    <div class="titulo">Título Producto</div>
  </div>

  <div class="container" style="padding-bottom: 15px;">
    <div class="row">
      <div class="col-md-12">
        <img src="images/2.jpg" alt="banner1" class="img-responsive center-block img-thumbnail" style="width: 750px; height: 500px;" />
      </div>
    </div>
    <div class="center-block col-sm-12" style="padding-top: 10px; display: block;">
    	<a href="">
    		<img src="images/2.jpg" alt="banner1" class="center-block img-thumbnail" style="width: 100px; height: 100px; display: inline;" />
    	</a>
    	<a href="">
    		<img src="images/2.jpg" alt="banner1" class="center-block img-thumbnail" style="width: 100px; height: 100px; display: inline;" />
    	</a>
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

      $("#iso").hover(function(){
        setTimeout(function(){
          $("#iso").removeClass('animated rotateIn');
        }, 1000);
        
        setTimeout(function(){
          $("#iso").addClass('animated rotateIn');
        }, 300);
      });

      $("#conozca").hover(function(){
        $("#conozca").addClass('animated flipInX');

        setTimeout(function(){
          $("#conozca").removeClass('animated flipInX');
        }, 2000);

      });


  </script>

    <footer class="footer">
      <p>Ind. Argentina, Santa Fe, Rosario</p>
      <p>G&Uuml;LP&#174; <?php echo date("Y")?> - Todos los derechos reservados.</p>
    </footer>   
  </body>
  
</html>