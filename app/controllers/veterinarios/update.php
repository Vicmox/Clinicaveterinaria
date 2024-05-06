<?php

include '../../../app/appConfig.php';

$nombre_completo = $_POST['nombre_completo'];
$contacto = $_POST['contacto'];
$area_especializacion = $_POST['area_especializacion']; 

$sentencia = $pdo->prepare("UPDATE tb_veterinarios
SET nombre_completo=:nombre_completo,
    email=:email,
    contacto=:contacto,
    area_especializacion=:area_especializacion
    WHERE id_veterinario = :id_veterinario ");

$sentencia->bindParam('nombre_completo', $nombre_completo);
$sentencia->bindParam('email', $email);
$sentencia->bindParam('contacto', $contacto);
$sentencia->bindParam('area_especializacion', $area_especializacion);
$sentencia->bindParam('id_veterinario', $id_veterinario);

if ($sentencia->execute()) {
    echo "Se actualizó el veterinario de la manera correcta";
    session_start();
    $_SESSION['mensaje'] = "Se actualizó el veterinario de la manera correcta";
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/admin/veterinarios/');
} else {
    session_start();
    $_SESSION['mensaje'] = "No se pudo actualizar al veterinario";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/veterinarios/update.php?id_veterinario=' . $id_veterinario);
}
