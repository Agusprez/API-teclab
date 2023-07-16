<?php

class Productos {
  public $id;
  public $nombre_producto;
  public $descripcion_producto;
  public $precio_producto;
  public $imagen_producto;
  public $categoria_producto;
  

  static public function listar() {
    $db = new baseDeDatos();
    return $db->listar("productos");
  }
  // Funcion GUARDAR
  public function guardar() {
    $db = new baseDeDatos();
    $db->insertar("productos", array("nombre_producto","descripcion_producto","precio_producto","categoria_producto","imagen_producto"),array("?","?","?","?","?"), array($this->nombre_producto,$this->descripcion_producto,$this->precio_producto,$this->categoria_producto,$this->imagen_producto));
}
  // Funcion ELIMINAR
  public function eliminar() {
    $db = new baseDeDatos();
    return $db->delete('productos', 'id_productos = ' . $this->$id);
  }
}