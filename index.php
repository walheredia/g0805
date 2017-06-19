<?php 
  $conn = new mysqli('localhost', 'root', 'root', 'gulp');
    //Nombre del producto
    $sql0 = "SELECT * from carrusel";
    $carr = $conn->query($sql0);
    while($row = $carr->fetch_array()){
      $carrusel[] = $row;
    }
    $html="";
    $cant = 0;    

    try {
      if (!empty($carrusel)) {
        $html .= '<ol class="carousel-indicators">';
        foreach ($carrusel as $c) {
          if ($cant == 0) {
            $html .='<li data-target="#myCarousel" data-slide-to="'.$cant.'" class="active"></li>';
          } else {
            $html .='<li data-target="#myCarousel" data-slide-to="'.$cant.'"></li>';
          }
          $cant++;
        }
        $html .= "</ol>";
        
        $html .= '<div class="carousel-inner">';
        $cant = 0;
        foreach ($carrusel as $c) {
          if ($cant == 0) {
            $html .= '<div class="active item"><img src="images/carrusel/'.$c['imagen'].'" alt="banner1" class="img-responsive center-block animated bounceInRight" /></div>';
          } else {
            $html .= '<div class="item"><img src="images/carrusel/'.$c['imagen'].'" alt="banner1" class="img-responsive center-block animated bounceInRight" /></div>';
          }
          $cant ++;
        }
        $html .= "</div>";
        $html .= '<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>';
      }
    } catch (Exception $e) {
         
    }
?>
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
  <div id="topall" class="container nav-row animated fadeInDown center-block" style="padding-top: 2px; width: 100%;">
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
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="puntos_de_venta.php">Puntos de venta</a></li>
            <li><a href="como_comprar.php">Cómo comprar</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/"><i class="fa fa-facebook-official" aria-hidden="true" style=""></i></a></li>
            <li><a href="../navbar/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--End navbar -->
    <!--start carousel -->
    <div id="contenedor" style ="margin-top: -12px;" class="center-block col-sm-12">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <?php echo $html; ?>        
      </div>
  </div>
  <img id="iso" src="images/iso_tr_nuevo.png" alt="banner4" class="img-responsive center-block animated rotateIn" style="padding-top: 7px; padding-bottom: 7px; width: 60px;" />
  <div class="container middle">
    
    <hr style="width: 100%;" />
    <h2 class="conozca">¡Conozca nuestros productos!</h2>
    <hr style="width: 100%;" />
  </div>

  <div style="padding-top: 15px;" id="productos">
     
  </div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function () {
        
        $('.carousel').carousel({
          pause: false,
          interval: 2500
        });

        $.ajax({
          url: 'ajax.php',
          type: 'POST',
          data: 'cargar_productos=1',
          success: function(data) {
            $('#productos').html(data);
            
          },
          error: function(){
          alert('Error!');
          }
          });

      });
        function hoverim(x) {
           $(x).addClass('animated pulse');
          
          setTimeout(function(){
            $(x).removeClass('animated pulse');
          }, 1000);
        };

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

      $("#prod").hover(function(){
        $("#prod").addClass('animated flash');

        setTimeout(function(){
          $("#prod").removeClass('animated flash');
        }, 2000);

      });


  </script>
  
    <footer class="footer">
      <p>Ind. Argentina, Santa Fe, Rosario</p>
      <p>G&Uuml;LP&#174; <?php echo date("Y")?> - Todos los derechos reservados.</p>
    </footer>   
  </body>
</html>