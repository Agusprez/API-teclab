<?php
    include "..\class\database.php";
    include "..\class\autoload.php";
  
    if(isset($_POST["accion"]) && $_POST["accion"] == "guardar")
    {
      $miProducto = new Productos();
      $miProducto-> nombre_producto = $_POST['producto_nombre'];
      $miProducto-> descripcion_producto = $_POST['producto_descripcion'];
      $miProducto-> precio_producto = $_POST['producto_precio'];
      $miProducto-> imagen_producto = $_POST['producto_imagen'];
      $miProducto-> categoria_producto = $_POST['producto_categoria'];
      
      $miProducto->guardar();
      llamar_listado();
    }
      else if(isset($_GET['accion']) && $_GET['accion'] == 'agregar'){
      $lista_categorias = baseDeDatos::select("categorias"); 
      include "views/productos.html";
    } else {
      llamar_listado();
    }
    function llamar_listado(){
      $lista_productos = baseDeDatos::select("productos");  
      include "views/lista_productos.html"; 
    }
  ?>