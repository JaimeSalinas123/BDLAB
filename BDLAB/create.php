<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['NOMBRE'];
    $funcion = $_POST['FUNCION'];

    $query = "INSERT INTO tabla (nombre, funcion) VALUES ('$nombre', '$funcion')";
    $result = $db->exec($query);

    if (!$result) {
        echo "Error al agregar el registro";
    } else {
        echo "Registro agregado exitosamente";
    }
}
?>
