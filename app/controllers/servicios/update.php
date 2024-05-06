<?php

include '../../../app/appConfig.php';

$nombre_servicio = $_POST['nombre_servicio'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$id_servicio = $_POST['id_servicio'];

$sentencia = $pdo->prepare("UPDATE tb_servicios
SET nombre_servicio=:nombre_servicio,
    descripcion=:descripcion,
    precio=:precio
    WHERE id_servicio = :id_servicio  ");

$sentencia->bindParam('nombre_servicio', $nombre_servicio);
$sentencia->bindParam('descripcion', $descripcion);
$sentencia->bindParam('precio', $precio);
$sentencia->bindParam('id_servicio', $id_servicio);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se actualizó el servicio de la manera correcta";
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/admin/servicio/');
} else {
    session_start();
    $_SESSION['mensaje'] = "No se pudo actualizar al servicio";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/servicio/update.php?id_servicio=' . $id_servicio);
}
