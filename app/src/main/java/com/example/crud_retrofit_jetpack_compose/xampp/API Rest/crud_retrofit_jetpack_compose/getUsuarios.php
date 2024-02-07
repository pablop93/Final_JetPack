<?php

include 'db_config.php';

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

$usuarios = array();

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $usuarios[] = $row;
    }
    $response = array(
        "codigo" => "200",
        "mensaje" => "Usuarios obtenidos correctamente",
        "data" => $usuarios
    );
} else {
    $response = array(
        "codigo" => "404",
        "mensaje" => "No se encontraron usuarios",
        "data" => array()
    );
}

echo json_encode($response);

mysqli_close($conn);

?>

