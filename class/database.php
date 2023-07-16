<?php


$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "miProyecto";

$conexion = new mysqli($servername, $username, $password, $dbname);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    echo "Conexion exitosa";
}



class baseDeDatos {
    private $gdb;

    public function __construct()
    {
        $this->gdb = new PDO('mysql:host=localhost;dbname=miproyecto',"root","");
    }
    // Función SELECT
    static function select($table) {
    global $conexion; 

    $sql = "SELECT * FROM " . $table;
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return array();
    }
    }

    // Función INSERT

    function insertar($tabla, $campos, $valores, $arr_prepare = "null"){
        $sql = "INSERT INTO ".$tabla." (".implode(", ",$campos).") VALUES (".implode(". ",$valores).")";
        $resourse = $this->gdb->prepare($sql);
        $resourse->execute($arr_prepare);

        if($resourse){
            return true;
        } else {
            echo $resourse->errorInfo();
            throw new Exception ("No se pudo realizar la consulta ");
        }
    }
}
?>