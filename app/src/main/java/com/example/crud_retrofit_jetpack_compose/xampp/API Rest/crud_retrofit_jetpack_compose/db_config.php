<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "usuarios";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

?>
