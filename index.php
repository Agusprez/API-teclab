<?php
include "./class/autoload.php";
include "./class/database.php";





$lista_productos = baseDeDatos::select("productos");
$lista_categorias = baseDeDatos::select("categorias");

function seleccionarCategoria($id_producto_categoria) {
  global $conexion; 
  $sql = "SELECT * FROM `miproyecto`.`categorias` WHERE `id_categoria` = " . $id_producto_categoria;
  $result = $conexion->query($sql);

  if ($result && $result->num_rows > 0) {
      $categoria = $result->fetch_assoc();
      return $categoria["nombre_categoria"];
  } else {
      return "Categoría no encontrada";
  }
}


include "backend/views/home.html"




?>