<?php

include '../../../app/appConfig.php';

$id_servicio = $_POST['id_servicio'];

$sentencia = $pdo->prepare("DELETE FROM tb_servicios WHERE id_servicio = '$id_servicio' ");

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se elimino el servicio !";
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/admin/servicios');
} else {
    session_start();
    $_SESSION['mensaje'] = "error no se pudo eliminar en la base de datos";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/servicios');
}
