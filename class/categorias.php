<?php

class Categorias {
  public $id;
  public $nombre_categoria;

  static public function listar() {
    $db = new baseDeDatos();
    return $db->listar("categorias");
  }

  public function guardar() {
    $db = new baseDeDatos();
    $db->insertar("categorias", array("nombre_categoria"), array("?"),array($this->nombre_categoria));
  }
}