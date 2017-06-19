<?php 
  if(isset($_GET["p"])) {
    //Conexion
    $conn = new mysqli('localhost', 'root', 'root', 'gulp');

    //Producto
    $sql = "SELECT * from productos where id_producto = ".$_GET['p'];
    $result = $conn->query($sql);
     while($row = $result->fetch_array()){
    $productos[] = $row;
    }
    if (empty($productos)) {
      $id_producto = null;
      $nombre = 'Producto';
      $descripcion = 'Descripcion';
    } else {
      $id_producto = $productos[0]['id_producto'];
      $nombre = $productos[0]['nombre'];
      $descripcion = $productos[0]['descripcion'];
    }
    
    //Descripciones
    $sql1 = "SELECT * from producto_descripcion where id_producto = ".$_GET['p'];
    $desc = $conn->query($sql1);
    while($row = $desc->fetch_array()){
      $descripciones[] = $row;
    }
    if (empty($descripciones)) {
      $descripciones[0]['descripcion']= "Bien, agreguemos una descripcion";
    }

    //Multimedia
    $sql2 = "SELECT * from producto_multimedia where id_producto = ".$_GET['p'];
    $mult = $conn->query($sql2);
    while($row = $mult->fetch_array()){
      $multimedias[] = $row;
    }
    if (empty($multimedias)) {
      $multimedias[0]['multimedia']= "../empty.png";
    }

    //Cierro conexion
    $conn->close();

  } else {
    //Conexion
    $conn = new mysqli('localhost', 'root', 'root', 'gulp');

    //Producto
    $sql = "SELECT * from productos";
    $result = $conn->query($sql);
     while($row = $result->fetch_array()){
    $productos[] = $row;
    }
    if (empty($productos)) {
      $id_producto = null;
      $nombre = 'Producto';
      $descripcion = 'Descripcion';
    } else {
      $id_producto = $productos[0]['id_producto'];
      $nombre = $productos[0]['nombre'];
      $descripcion = $productos[0]['descripcion'];
    }
    
    //Descripciones
    $sql1 = "SELECT * from producto_descripcion where id_producto = ".$id_producto;
    $desc = $conn->query($sql1);
    while($row = $desc->fetch_array()){
      $descripciones[] = $row;
    }
    if (empty($descripciones)) {
      $descripciones[0]['descripcion']= "Bien, agreguemos una descripcion";
    }

    //Multimedia
    $sql2 = "SELECT * from producto_multimedia where id_producto = ".$id_producto;
    $mult = $conn->query($sql2);
    while($row = $mult->fetch_array()){
      $multimedias[] = $row;
    }
    if (empty($multimedias)) {
      $multimedias[0]['multimedia']= "empty.png";
    }
    
    //Cierro conexion
    $conn->close();
  }
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
            <li class="active"><a href="productos.php">Productos</a></li>
            <li><a href="puntos_de_venta.php">Puntos de venta</a></li>
            <li><a href="como_comprar.php">Cómo comprar</a></li>
            <li><a href="contacto.php">Contacto</a></li>
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
    	<div class="row">
    		<div class="col-md-7 center-block">
    			<div style="float-left; margin-left: 0px; margin-top: -15px;">
    				<a class="btn btn-default" href="index.php#productos">
				    <i class="fa fa-hand-o-left fa-2x fa-align-left" title="Regresar a Inicio"></i>
			  	</a>
			  	<a class="btn btn-default" onclick="bajar();" style="visibility: hidden;">
				    	<i class="fa fa-arrow-left fa-2x fa-align-left" title="Producto Anterior"></i>
		  			</a>
		  			<a class="btn btn-default" onclick="subir();" style="visibility: hidden;">
				    	<i class="fa fa-arrow-right fa-2x fa-align-left" title="Producto Siguiente"></i>
		  			</a>	
    			</div>
          <div class="titulo" style="margin-top: -45px;" id="nombre"> <?php echo $nombre; ?></div>
          <div id="imagenes">
            <div id="you"><img src="images/products/<?php echo $multimedias[0]["multimedia"]; ?>" alt="banner1" class="img-responsive center-block img-thumbnail" style="width: 750px; height: 550px; margin-bottom: 10px;" /></div>

            <?php foreach ($multimedias as $m): ?>
              <?php if (strpos($m['multimedia'], 'youtu') !== false): ?>
                <a onclick="cambiarimg('<?php echo $m['multimedia'] ?>');">
                  <img src="images/products/empty.png" alt="banner1" onmouseover="hoverim(this)" class="center-block img-thumbnail" style="width: 89.5px; height: 89.5px; display: inline;"/>
                </a>
              <?php else: ?>
                <a onclick="cambiarimg('<?php echo $m['multimedia'] ?>');">
                  <img src="images/products/<?php echo $m['multimedia']; ?>" alt="banner1" onmouseover="hoverim(this)" class="center-block img-thumbnail" style="width: 89.5px; height: 89.5px; display: inline;"/>
                </a>
              <?php endif ?>
            <?php endforeach ?>
          </div>

    		</div>
    		<div class="col-md-5" style="padding-top: 5px;">
    				
        <input id="prod_id" type="hidden" name="id_producto" value="<?php echo $id_producto; ?>">
          <div id="descripciones">
            <?php foreach ($descripciones as $d): ?>
              <div class="blockquote-reverse prodesc">
                <i class="fa fa-circle fa-1x fa-fw" aria-hidden="true"></i> <?php echo $d['descripcion']; ?>
              </div>    
            <?php endforeach ?>
          </div>
    		</div>
    	</div>
    </div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

      function cambiarimg($img) {
        if ($img.includes('youtu') == true) {
          $('#you').html('<iframe width="600" height="500"  src="'+$img+'" frameborder="0" allowfullscreen></iframe>');
        } else {
          $('#you').html('<img id="imagen_principal" src="images/products/'+$img+'" alt="banner1" class="img-responsive center-block img-thumbnail" style="width: 750px; height: 550px; margin-bottom: 10px;" />');
        }
      }
      function bajar() {
        $.ajax({
          url: 'ajax.php',
          type: 'POST',
          data: 'bajar_id='+$('#prod_id').val(),
          success: function(data) {
            var result = $.parseJSON(data);
            $('#prod_id').val(result[0]);
            $('#nombre').text(result[1]);
            $.ajax({
              url: 'ajax.php',
              type: 'POST',
              data: 'cargar_descripciones='+$('#prod_id').val(),
              success: function(data) {
                $('#descripciones').html(data);
              },
              error: function(){
              alert('Error!');
              }
              });

            $.ajax({
              url: 'ajax.php',
              type: 'POST',
              data: 'cargar_imagenes='+$('#prod_id').val(),
              success: function(data) {
                $('#imagenes').html(data);
              },
              error: function(){
              alert('Error!');
              }
              });

          },
          error: function(){
          alert('Error!');
          }
          });
      }
      function subir() {
        $.ajax({
          url: 'ajax.php',
          type: 'POST',
          data: 'subir_id='+$('#prod_id').val(),
          success: function(data) {
            alert(data);
            var result = $.parseJSON(data);
            $('#prod_id').val(result[0]);
            $('#nombre').text(result[1]);

            $.ajax({
              url: 'ajax.php',
              type: 'POST',
              data: 'cargar_descripciones='+$('#prod_id').val(),
              success: function(data) {
                $('#descripciones').html(data);
              },
              error: function(){
              alert('Error!');
              }
              });
            
            $.ajax({
              url: 'ajax.php',
              type: 'POST',
              data: 'cargar_imagenes='+$('#prod_id').val(),
              success: function(data) {
                $('#imagenes').html(data);
              },
              error: function(){
              alert('Error!');
              }
              });

          },
          error: function(){
          alert('Error!');
          }
          });
      }
      function cargar() {
        $.ajax({
          url: 'ajax.php',
          type: 'POST',
          data: 'cargar_id=1',
          success: function(data) {
            $('#nombre').text(data);
            
          },
          error: function(){
          alert('Error!');
          }
          });
      }
      $(document).ready(function () {
        $('.carousel').carousel({
          pause: false,
          interval: 2500
        });
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
      function hoverim(x) {
         $(x).addClass('animated pulse');
        
        setTimeout(function(){
          $(x).removeClass('animated pulse');
        }, 1000);
      };

  </script>

    <footer class="footer">
      <p>Ind. Argentina, Santa Fe, Rosario</p>
      <p>G&Uuml;LP&#174; <?php echo date("Y")?> - Todos los derechos reservados.</p>
    </footer>   
  </body>
  
</html>