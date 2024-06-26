<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $numero = $_POST['numero'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_identificacion = $_POST['numero_identificacion'];

    $sql = "INSERT INTO users (nombre, apellido, fecha_nacimiento, direccion, correo, numero, tipo_documento, numero_identificacion) VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$direccion', '$correo', '$numero', '$tipo_documento', '$numero_identificacion')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: ../Administrador/NuevoCarpintero.php');
}
?>