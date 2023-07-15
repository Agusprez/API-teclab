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
}
?>