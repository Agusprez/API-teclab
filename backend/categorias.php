 <?php
/* ahora funciona a partir de DATABASE, dsp lo tengo que acomodar con AUTOLOAD */

  include "..\class\database.php";
  include "..\class\autoload.php";

  if(isset($_POST["accion"]) && $_POST["accion"] == "guardar")
  {
    $miCategoria = new Categorias();
    $miCategoria-> nombre_categoria = $_POST['categoria_nombre'];

   $miCategoria->guardar();
   llamar_listado();
    

  }
    else if(isset($_GET['accion']) && $_GET['accion'] == 'agregar'){
    include "views/categorias.html";
  } else {
    llamar_listado();
  }

  function llamar_listado(){
    $lista_categorias = baseDeDatos::select("categorias");  
    include "views/lista_categorias.html"; 
  }
?>