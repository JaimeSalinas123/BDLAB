<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $query = "DELETE FROM tabla WHERE id=$id";
    $result = $db->exec($query);

    if (!$result) {
        echo "Error al eliminar el registro";
    } else {
        echo "Registro eliminado exitosamente";
    }
}
?>
