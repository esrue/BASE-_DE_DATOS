<?php
include 'conexion.php';
$objetoConexion = new Conexion();
$conexionMySQL = $objetoConexion->conectar(); // Conexión MySQL

// Configura la conexión PostgreSQL (Asumiendo que ya tienes la conexión configurada en conexion.php)
$conexionPostgreSQL = $conexion; // Esta variable debe contener la conexión a PostgreSQL

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prinombre = $_POST['txtprinombre'];
    $segunombre = $_POST['txtsegunombre'];
    $primapeliido = $_POST['txtprimapellido'];
    $seguapellido = $_POST['txtseguapellido'];
    $direccion = $_POST['txtdireccion'];
    $telefonocasa = $_POST['txttelefonocasa'];
    $telefono = $_POST['txttelefono'];
    $salario = $_POST['txtsalario'];
    $bonificacion = $_POST['txtbonificacion'];

    // Comprueba si todos los campos están completos
    if (!empty($prinombre) && !empty($segunombre) && !empty($primapeliido) && !empty($seguapellido) && !empty($direccion) && !empty($telefonocasa) && !empty($telefono) && !empty($salario) && !empty($bonificacion)) {
        
        // Inserta en MySQL
        $sqlMySQL = "INSERT INTO persona (prinombre, segunombre, primapellido, seguapellido, direccion, telefonocasa, telefono, salario, bonificacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmtMySQL = $conexionMySQL->prepare($sqlMySQL);
        $stmtMySQL->bindParam(1, $prinombre);
        $stmtMySQL->bindParam(2, $segunombre);
        $stmtMySQL->bindParam(3, $primapeliido);
        $stmtMySQL->bindParam(4, $seguapellido);
        $stmtMySQL->bindParam(5, $direccion);
        $stmtMySQL->bindParam(6, $telefonocasa);
        $stmtMySQL->bindParam(7, $telefono);
        $stmtMySQL->bindParam(8, $salario);
        $stmtMySQL->bindParam(9, $bonificacion);

        // Inserta en PostgreSQL
        $sqlPostgreSQL = "INSERT INTO person (prinombre, segunombre, primapellido, seguapellido, direccion, telefonocasa, telefono, salario, bonificacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmtPostgreSQL = $conexionPostgreSQL->prepare($sqlPostgreSQL);
        $stmtPostgreSQL->bindParam(1, $prinombre);
        $stmtPostgreSQL->bindParam(2, $segunombre);
        $stmtPostgreSQL->bindParam(3, $primapeliido);
        $stmtPostgreSQL->bindParam(4, $seguapellido);
        $stmtPostgreSQL->bindParam(5, $direccion);
        $stmtPostgreSQL->bindParam(6, $telefonocasa);
        $stmtPostgreSQL->bindParam(7, $telefono);
        $stmtPostgreSQL->bindParam(8, $salario);
        $stmtPostgreSQL->bindParam(9, $bonificacion);

        // Realiza la inserción en ambas bases de datos
        $insertadoMySQL = $stmtMySQL->execute();
        $insertadoPostgreSQL = $stmtPostgreSQL->execute();

        if ($insertadoMySQL && $insertadoPostgreSQL) {
            header("location: index.php");
            exit();
        } else {
            echo "Error al insertar los datos.";
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>
