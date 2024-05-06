<?php

include '../../../app/appConfig.php';

$nombre_servicio = $_POST['nombre_servicio'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$id_usuario = $_POST['id_usuario'];

$fechaHora = date('Y-m-d H:i:s');

try {
    $sql = "INSERT INTO tb_servicios
            (nombre_servicio, descripcion, precio, id_usuario)
            VALUES (:nombre_servicio, :descripcion, :precio, :id_usuario)";

    $sentencia = $pdo->prepare($sql);
    $sentencia->bindParam(':nombre_servicio', $nombre_servicio);
    $sentencia->bindParam(':descripcion', $descripcion);
    $sentencia->bindParam(':precio', $precio);
    $sentencia->bindParam(':id_usuario', $id_usuario);

    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se registró el servicio exitosamente";
        $_SESSION['icono'] = 'success';
        header('Location: ' . $URL . '/admin/servicios');
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error, no se pudo registrar en la base de datos";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/admin/servicios/create.php');
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
