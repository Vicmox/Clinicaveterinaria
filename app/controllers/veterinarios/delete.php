<?php

include '../../../app/appConfig.php';

$id_veterinario = $_POST['id_veterinario'];

$sentencia = $pdo->prepare("DELETE FROM tb_veterinarios WHERE id_veterinario = '$id_veterinario' ");

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se elimino de la manera correcta en la base de datos";
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/admin/veterinarios');
} else {
    session_start();
    $_SESSION['mensaje'] = "error no se pudo eliminar en la base de datos";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/veterinarios');
}


