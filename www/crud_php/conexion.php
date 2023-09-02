<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "personas";

// Crear una conexión
$con = new mysqli($host, $username, $password, $database);

// Verificar la conexión
if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}

// Establecer el conjunto de caracteres utf8
$con->set_charset("utf8");
?>
