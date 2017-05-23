<?php
if(isset($_POST['cargar_id'])) {
    echo cargarprod($_POST['cargar_id']);
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
?>