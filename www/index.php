<!DOCTYPE html>
<html>
<head>
    <title>Lista de Personas</title>
</head>
<body>



<?php
include('enlazar.php');

$consulta = "SELECT * FROM persona";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datos = $resultado->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos as $dato) {
    echo '<div>';
    echo '<p><strong>Nombre: </strong>' . $dato['prinombre'] . ' ' . $dato['segunombre'] . '</p>';
    echo '<p><strong>Apellido: </strong>' . $dato['primapellido'] . ' ' . $dato['seguapellido'] . '</p>';
    echo '<p><strong>Dirección: </strong>' . $dato['direccion'] . '</p>';
    echo '<p><strong>Teléfono Casa: </strong>' . $dato['telefonocasa'] . '</p>';
    echo '<p><strong>Teléfono: </strong>' . $dato['telefono'] . '</p>';
    echo '<p><strong>Salario: </strong>' . $dato['salario'] . '</p>';
    echo '<p><strong>Bonificación: </strong>' . $dato['bonificacion'] . '</p>';
    echo '<button><a href="editar.php?id=' . $dato['primapellido'] . '">Editar</a></button>';
    echo '<button><a href="eliminar.php?id=' . $dato['primapellido'] . '">Eliminar</a></button>';
    echo '</div>';
    echo '<hr>';
}
?>
<div>
    <a href="insertar.php">Nuevo</a>
    <a href="editar.php?id">Editar</a>
    <button><a href="conexion.php">Conexión</a></button>
</div>

</body>
</html>
