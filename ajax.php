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
   	
   	$bandera = 0;
   	foreach ($productos as $p) {
   		if ($bandera == 1) {
   			$id_producto = $p['id_producto'];
   			$nombre = $p['nombre'];
   		}
   		if ($p['id_producto'] == $id) {
   			$bandera = 1;
   		}
   	}
   	if (empty($nombre)) {
   		return json_encode(array($productos[0]['id_producto'],$productos[0]['nombre']));
   	} else {
   		return json_encode(array($id_producto,$nombre));
   	}
}

function bajarprod($id) {
    $conn = new mysqli('localhost', 'root', 'root', 'gulp');
    $sql = "SELECT * from productos";
    $result = $conn->query($sql);
 	while($row = $result->fetch_array()){
    	$productos[] = $row;
    }
    $conn->close();
   	
   	$bandera = 0;
   	
   	$id = $id - 1;

   	if ($id == 0) {
   		end($productos);
	   	$key = key($productos);
	   	$id_producto = $productos[$key]['id_producto'];
	   	$nombre = $productos[$key]['nombre'];
	   	return json_encode(array($id_producto,$nombre));
   	} else {
   		$found_key = array_search($id, array_column($productos, 'id_producto'));
   		return json_encode(array($productos[$found_key]['id_producto'],$productos[$found_key]['nombre']));
   	}
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
    	$html .='<div class="blockquote-reverse prodesc"><i class="fa fa-circle fa-1x fa-fw" aria-hidden="true"></i> '.$d['descripcion'].' </div>';
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

    $html = '<img id="imagen_principal" src="images/'.$multimedias[0]["multimedia"].'" alt="banner1" class="img-responsive center-block img-thumbnail" style="width: 750px; height: 550px; margin-bottom: 10px;" />';
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
      $multimedias[0]['multimedia'] = "empty.png";
    }

    if ($cant == 0) {
      $html .= '<div class="container" style="padding-bottom: 30px;">
                  <div class="row">';
      $html .= '<div class="col-md-3">
                  <div class="nombre">'.$p["nombre"].'</div>
                  <div class="descripcion">'.$p["descripcion"].'</div>
                  <img src="images/'.$multimedias[0]["multimedia"].'" id="1" onmouseover="hoverim(this)" onclick="window.open(';
      $html .= "'productos.php?p=".$p["id_producto"]."','_self'";
      $html .= ');" alt="banner1" class="img-responsive img-rounded"/>
                </div>';
      $cant++;

    } else {
      $html .= '<div class="col-md-3">
                  <div class="nombre">'.$p["nombre"].'</div>
                  <div class="descripcion">'.$p["descripcion"].'</div>
                  <img src="images/'.$multimedias[0]["multimedia"].'" id="1" onmouseover="hoverim(this)" onclick="window.open(';
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
  return $html;
}
?>