<?php

include 'db_config.php';

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id_usuario=$id";
if (mysqli_query($conn, $sql)) {
    http_response_code(200);
    echo json_encode(array("codigo" => 200, "mensaje" => "Usuario eliminado correctamente."));
} else {
    http_response_code(500);
    echo json_encode(array("codigo" => 500, "mensaje" => "Error al eliminar usuario: " . mysqli_error($conn)));
}

mysqli_close($conn);

?>

