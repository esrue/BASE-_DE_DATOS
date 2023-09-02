<?php
// Configuración de la conexión a PostgreSQL
$dbname = "personas"; // Nombre de la base de datos
$user = "postgres"; // Nombre de usuario de PostgreSQL
$password = "123456"; // Contraseña de PostgreSQL
$host = "localhost"; // Host de PostgreSQL (puede cambiar según tu configuración)

try {
    $conexion = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Realiza tu consulta SQL aquí
    $consulta = "SELECT * FROM person"; 
    $resultado = $conexion->query($consulta);

    // Puedes procesar los datos o realizar otras operaciones aquí si es necesario

    // Devolver una respuesta al cliente (puede ser un mensaje de éxito o los datos obtenidos)
    echo "Conexión a la base de datos y tabla realizada con éxito";
} catch (PDOException $e) {
    echo "Error en la conexión a la base de datos: " . $e->getMessage();
}
?>
