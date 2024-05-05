<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $funcion = $_POST['rol'];

    $query = "UPDATE tabla SET nombre='$nombre', funcion='$funcion' WHERE id=$id";
    $result = $db->exec($query);

    if (!$result) {
        echo "Error al actualizar el registro";
    } else {
        echo "Registro actualizado exitosamente";
    }
}
?>
