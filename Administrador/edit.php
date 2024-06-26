<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    $user = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $numero = $_POST['numero'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_identificacion = $_POST['numero_identificacion'];

    $sql = "UPDATE users SET nombre='$nombre', apellido='$apellido', fecha_nacimiento='$fecha_nacimiento', direccion='$direccion', correo='$correo', numero='$numero', tipo_documento='$tipo_documento', numero_identificacion='$numero_identificacion' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: ../Administrador/NuevoCarpintero.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="css/Crud_carp.css">
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <input type="text" name="nombre" value="<?php echo $user['nombre']; ?>" required>
        <input type="text" name="apellido" value="<?php echo $user['apellido']; ?>" required>
        <input type="date" name="fecha_nacimiento" value="<?php echo $user['fecha_nacimiento']; ?>" required>
        <input type="text" name="direccion" value="<?php echo $user['direccion']; ?>" required>
        <input type="email" name="correo" value="<?php echo $user['correo']; ?>" required>
        <input type="text" name="numero" value="<?php echo $user['numero']; ?>" required>
        <select name="tipo_documento" required>
            <option value="CC" <?php echo $user['tipo_documento'] == 'CC' ? 'selected' : ''; ?>>CC</option>
            <option value="CE" <?php echo $user['tipo_documento'] == 'CE' ? 'selected' : ''; ?>>CE</option>
            <option value="PAS" <?php echo $user['tipo_documento'] == 'PAS' ? 'selected' : ''; ?>>PAS</option>
        </select>
        <input type="text" name="numero_identificacion" value="<?php echo $user['numero_identificacion']; ?>" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
