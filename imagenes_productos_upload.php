<?php 
  // Recibo los datos de la imagen
  $nombre_img = $_FILES['imagen']['name'];
  $tipo = $_FILES['imagen']['type'];
  $tamano = $_FILES['imagen']['size'];
   
  //Si existe imagen y tiene un tamaño correcto
  if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) {
     //indicamos los formatos que permitimos subir a nuestro servidor
     if (($_FILES["imagen"]["type"] == "image/gif")
     || ($_FILES["imagen"]["type"] == "image/jpeg")
     || ($_FILES["imagen"]["type"] == "image/jpg")
     || ($_FILES["imagen"]["type"] == "image/png"))
     {
        // Ruta donde se guardarán las imágenes que subamos
        $directorio = $_SERVER['DOCUMENT_ROOT'].'/g0805/images/products/';
        // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
        $hoy = getdate();
        $date = $hoy['year'].$hoy['mon'].$hoy['mday'].$hoy['hours'].$hoy['minutes'].$hoy['seconds'];
        move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$date.$nombre_img);
      } 
      else 
      {
         //si no cumple con el formato
         echo "No se puede subir una imagen con ese formato ";
      }
    /* en pasos anteriores deberíamos tener una conexión abierta a nuestra base de 
    datos para ejecutar nuestra sentencia SQL */
     
    /* con la siguiente sentencia le asignamos a nuestro campo de la tabla ruta_imagen 
    el nombre de nuestra imagen */
     
    /*$sql = "UPDATE usuarios SET ruta_imagen = '$nombre_img' ";
    $result = mysql_query($sql);*/
     
    /* volvemos a la página principal para cargar la imagen que hemos subido */

    $conn = new mysqli('localhost', 'root', 'root', 'gulp');
      $sql = "INSERT INTO producto_multimedia(id_producto, multimedia)
              VALUES (
              '".$_POST['id_producto']."',
              '".$date.$nombre_img."'
              );";
      if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: '. 'imagenes_productos.php?p='.$_POST['id_producto']);
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;die();
      }
      $conn->close();
  } 
  else {
     //si existe la variable pero se pasa del tamaño permitido
     if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
  }
?>