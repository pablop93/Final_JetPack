<?php

include 'db_config.php';

$id = $_GET['id'];

$data = json_decode(file_get_contents("php://input"), true);

$nombre = $data['nombre'];

$sql = "UPDATE usuarios SET nombre='$nombre' WHERE id_usuario=$id";
if (mysqli_query($conn, $sql)) {
    http_response_code(200);
    echo json_encode(array("codigo" => 200, "mensaje" => "Usuario actualizado correctamente."));
} else {
    http_response_code(500);
    echo json_encode(array("codigo" => 500, "mensaje" => "Error al actualizar usuario: " . mysqli_error($conn)));
}

mysqli_close($conn);

?>



