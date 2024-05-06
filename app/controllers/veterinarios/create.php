<?php
include '../../../app/appConfig.php';

// Recibir datos del formulario
$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$contacto = $_POST['contacto'];
$area_especializacion = $_POST['area_especializacion'];
$fecha_de_ingreso = $_POST['fecha_de_ingreso'];

try {
    // Consulta preparada para insertar un nuevo veterinario
    $sql = "INSERT INTO tb_veterinarios (nombre_completo, email, contacto, area_especializacion, fecha_de_ingreso)
            VALUES (:nombre_completo, :email, :contacto, :area_especializacion, :fecha_de_ingreso)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nombre_completo', $nombre_completo);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':contacto', $contacto);
    $stmt->bindParam(':area_especializacion', $area_especializacion);
    $stmt->bindParam(':fecha_de_ingreso', $fecha_de_ingreso);
    
    // Ejecutar la consulta
    if ($stmt->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se registró el veterinario exitosamente";
        $_SESSION['icono'] = 'success';
        header('Location: ' . $URL . '/admin/veterinarios');
        exit();
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error, no se pudo registrar al veterinario en la base de datos";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/admin/veterinarios/create.php');
        exit();
    }
} catch (PDOException $e) {
    echo "Error al insertar el veterinario: " . $e->getMessage();
}
?>
