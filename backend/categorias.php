 <?php

  include "..\class\database.php"; 

 /* if(isset($_POST['accion']) && $_POST['action'] === 'guardar'){
    $miCategoria = new Categorias();
    $miCategoria->nombre = $_POST['categoria'];
    $miCategoria->guardar();
  } else if(isset($_GET['add'])){
    include 'views/categorias.html';
    die();
  }  */
  
$lista_categorias = baseDeDatos::select("categorias");
  
include "views/lista_categorias.html"; 
?>