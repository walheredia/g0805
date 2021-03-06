<?php

if(isset($_POST['cargar_id'])) {
    echo cargarprod($_POST['cargar_id']);
}

if(isset($_POST['subir_id'])) {
	echo subirprod($_POST['subir_id']);
}

if(isset($_POST['bajar_id'])) {
	echo bajarprod($_POST['bajar_id']);
}

if(isset($_POST['cargar_descripciones'])) {
	echo cargardescripciones($_POST['cargar_descripciones']);
}

if(isset($_POST['cargar_imagenes'])) {
	echo cargarimagenes($_POST['cargar_imagenes']);
}

if(isset($_POST['cargar_productos'])) {
  echo cargarproductos($_POST['cargar_productos']);
}
if(isset($_POST['cargar_menu_producto'])) {
  echo cargar_menu_producto($_POST['cargar_menu_producto']);
}
if(isset($_POST['eliminar_producto'])) {
  echo eliminar_producto($_POST['eliminar_producto']);
}

if(isset($_POST['cargar_menu_descripcion'])) {
  echo cargar_menu_descripcion($_POST['cargar_menu_descripcion']);
}

if(isset($_POST['eliminar_descripcion'])) {
  echo eliminar_descripcion($_POST['eliminar_descripcion']);
}

if(isset($_POST['eliminar_imagen'])) {
  echo eliminar_imagen($_POST['eliminar_imagen']);
}
if(isset($_POST['eliminar_carrusel'])) {
  echo eliminar_carrusel($_POST['eliminar_carrusel']);
}
if(isset($_POST['video'])) {
  echo guardarvideo($_POST['producto'],$_POST['video']);
}


function cargarprod($id) {
    $conn = new mysqli('localhost', 'root', 'root', 'gulp');
    $sql = "SELECT * from productos where id_producto = ".$id;
    $result = $conn->query($sql);
     while($row = $result->fetch_array()){
    $productos[] = $row;
    }
    $conn->close();
    return $productos[0]['nombre'];
}

function subirprod($id) {
    $conn = new mysqli('localhost', 'root', 'root', 'gulp');
    $sql = "SELECT * from productos";
    $result = $conn->query($sql);
 	  while($row = $result->fetch_array()){
    	$productos[] = $row;
    }
    $conn->close();

    end($productos);
    $ultimo = key($productos);

    reset($productos);
    $primer = key($productos);
    $primer_id = $productos[$primer]['id_producto'];

    $bandera = 1;
    $i = 0;

    while ($bandera == 1) {
      if ($productos[$i]['id_producto'] === $id) {
        return 'true';
        if ($primer_id == $id) {
          $id_p = $productos[$ultimo]['id_producto'];
          $name = $productos[$ultimo]['nombre'];
          $bandera = false;
        } else {
          $id_p = $productos[$i-1]['id_producto'];
          $name = $productos[$i-1]['nombre'];
          $bandera = false;
        }
      } else {
        $i++;    
      }
    }
    
//$id_p = $productos[$found_key]['id_producto'];
      //$name = $productos[$found_key]['nombre'];
    return json_encode(array($id_p,$name));  
}

function bajarprod($id) {
  $conn = new mysqli('localhost', 'root', 'root', 'gulp');
    $sql = "SELECT * from productos";
    $result = $conn->query($sql);
  while($row = $result->fetch_array()){
      $productos[] = $row;
    }
    $conn->close();

    $bandera = 1;
    end($productos);
    $ultimo = key($productos);
    reset($productos);

    while ($bandera == 1) {
      $key = key($productos);
      if ($productos[$key]['id_producto'] == $id) {
        prev($productos);
        $id_baj = key($productos);
        $id_p = $productos[$id_baj]['id_producto'];
        $name = $productos[$id_baj]['nombre'];
        $bandera = false;
      } else {
        if ($productos[$key]['id_producto'] == $ultimo) {
          reset($productos);
        } else {
          next($productos);
        }
      }
    }
    return json_encode(array($id_p,$name)); 

    /*$primero = key($productos);
    end($productos);
    $ultimo = key($productos);

    $found_key = array_search($id, array_column($productos, 'id_producto'));
    if ($primero == $found_key) {
      $id_p = $productos[$ultimo]['id_producto'];
      $name = $productos[$ultimo]['nombre'];            
    } else {
      $found_key--;  
      $id_p = $productos[$found_key]['id_producto'];
      $name = $productos[$found_key]['nombre'];
    }

    return json_encode(array($id_p,$name));  */
}

function cargardescripciones($id) {
	//Descripciones
	$conn = new mysqli('localhost', 'root', 'root', 'gulp');
    $sql1 = "SELECT * from producto_descripcion where id_producto = ".$id;
    $desc = $conn->query($sql1);
    while($row = $desc->fetch_array()){
      $descripciones[] = $row;
    }
    if (empty($descripciones)) {
      $descripciones[0]['descripcion']= "Bien, agreguemos una descripcion";
    }
    $html = "";

    foreach ($descripciones as $d) {
    	$html .='<div class="blockquote-reverse prodesc"><i class="fa fa-circle fa-1x fa-fw" aria-hidden="true"></i> '.utf8_decode($d['descripcion']).' </div>';
    }
    return $html;
    
}

function cargarimagenes($id) {
	//Multimedia
	$conn = new mysqli('localhost', 'root', 'root', 'gulp');
    $sql2 = "SELECT * from producto_multimedia where id_producto = ".$id;
    $mult = $conn->query($sql2);
    while($row = $mult->fetch_array()){
      $multimedias[] = $row;
    }
    if (empty($multimedias)) {
      $multimedias[0]['multimedia'] = "empty.png";
    }

    $html = '<img id="imagen_principal" src="images/products/'.$multimedias[0]["multimedia"].'" alt="banner1" class="img-responsive center-block img-thumbnail" style="width: 750px; height: 550px; margin-bottom: 10px;" />';
    foreach ($multimedias as $m) {
    	$html .= '<a onclick="cambiarimg(';
    	$html .= "'".$m['multimedia']."');";
    	$html .= '">';
    	$html .= "<img src='images/".$m['multimedia']."' alt='banner1' class='center-block img-thumbnail' style='width: 89.5px; height: 89.5px; display: inline;'/>
              </a>";
    }
    return $html;
}

function cargarproductos($id) {
  $conn = new mysqli('localhost', 'root', 'root', 'gulp');
  $sql = "SELECT * from productos";
  $result = $conn->query($sql);
   while($row = $result->fetch_array()){
  $productos[] = $row;
  }
  $html = "";
  $cant = 0;

  try {
    end($productos);
    $key = key($productos);
    $last_id = $productos[$key]['id_producto'];

    foreach ($productos as $p) {
      $multimedias="";
      $sql2 = "SELECT * from producto_multimedia where id_producto = ".$p['id_producto'];
      $mult = $conn->query($sql2);
      while($row = $mult->fetch_array()){
        $multimedias[] = $row;
      }
      if (empty($multimedias)) {
        $multimedias[0]['multimedia'] = "../empty.png";
      }

      if ($cant == 0) {
        $html .= '<div class="container" style="padding-bottom: 30px;">
                    <div class="row">';
        $html .= '<div class="col-md-3">
                    <div class="nombre">'.$p["nombre"].'</div>
                    <div class="descripcion">'.$p["descripcion"].'</div>
                    <img src="images/products/'.$multimedias[0]["multimedia"].'" id="1" style="height: 250px;" onmouseover="hoverim(this)" onclick="window.open(';
        $html .= "'productos.php?p=".$p["id_producto"]."','_self'";
        $html .= ');" alt="banner1" class="img-responsive img-rounded"/>
                  </div>';
        $cant++;

      } else {
        $html .= '<div class="col-md-3">
                    <div class="nombre">'.$p["nombre"].'</div>
                    <div class="descripcion">'.$p["descripcion"].'</div>
                    <img src="images/products/'.$multimedias[0]["multimedia"].'" id="1" style="height: 250px;" onmouseover="hoverim(this)" onclick="window.open(';
        $html .= "'productos.php?p=".$p["id_producto"]."','_self'";
        $html .= ');" alt="banner1" class="img-responsive img-rounded"/>
                  </div>';
        $cant++;
      }
      if (($cant == 4) or ($p['id_producto'] == $last_id)) {
        $html .= '</div></div>';
        $cant = 0;
      }
    }
    $conn->close();
  } catch (Exception $e) {
    
  }
  return $html;
}

function cargar_menu_producto($id) {
  $conn = new mysqli('localhost', 'root', 'root', 'gulp');
  $sql = "SELECT * from productos where id_producto=".$id;
  $result = $conn->query($sql);
   while($row = $result->fetch_array()){
  $productos[] = $row;
  }
  return json_encode($productos);
}

function eliminar_producto($id) {
  $conn = new mysqli('localhost', 'root', 'root', 'gulp');
  $sql1 = "DELETE FROM producto_descripcion WHERE id_producto=".$id;
  $sql2 = "DELETE FROM producto_multimedia WHERE id_producto=".$id;
  $sql3 = "DELETE FROM productos WHERE id_producto=".$id;
  $result = $conn->query($sql1);
  $result = $conn->query($sql2);
  $result = $conn->query($sql3);
  return;
}

function cargar_menu_descripcion($id) {
  $conn = new mysqli('localhost', 'root', 'root', 'gulp');
  $sql = "SELECT * from producto_descripcion where id_descripcion=".$id;
  $result = $conn->query($sql);
   while($row = $result->fetch_array()){
  $descripcion[] = $row;
  }
  return json_encode($descripcion);
}

function eliminar_descripcion($id) {
  $conn = new mysqli('localhost', 'root', 'root', 'gulp');
  $sql1 = "DELETE FROM producto_descripcion WHERE id_descripcion=".$id;
  $result = $conn->query($sql1);
  return;
}

function eliminar_imagen($id) {
  $conn = new mysqli('localhost', 'root', 'root', 'gulp');
  $sql1 = "DELETE FROM producto_multimedia WHERE id_multimedia=".$id;
  $result = $conn->query($sql1);
  return;
}

function eliminar_carrusel($id) {
  $conn = new mysqli('localhost', 'root', 'root', 'gulp');
  $sql1 = "DELETE FROM carrusel WHERE id_carrusel=".$id;
  $result = $conn->query($sql1);
  return;
}

function guardarvideo($producto,$video) {
  $conn = new mysqli('localhost', 'root', 'root', 'gulp');
  $sql = "INSERT INTO producto_multimedia(id_producto, multimedia)
              VALUES (
              '".$producto."',
              '".$video."'
              );";
  $result = $conn->query($sql);
  return;
}
?>