<?php
include 'db_config.php';

$data = json_decode(file_get_contents("php://input"), true);

$nombre = $data['nombre'];

$sql = "INSERT INTO usuarios (nombre) VALUES ('$nombre')";
if (mysqli_query($conn, $sql)) {
    $id_usuario = mysqli_insert_id($conn);
    
    $usuario = array(
        "id_usuario" => $id_usuario,
        "nombre" => $nombre
    );
    
    $response = array(
        "codigo" => "200",
        "mensaje" => "Usuario creado correctamente.",
        "data" => array($usuario)
    );
    
    http_response_code(200);
    echo json_encode($response);
} else {
    http_response_code(500);
    echo json_encode(array("message" => "Error al crear usuario: " . mysqli_error($conn)));
}

mysqli_close($conn);

?>
