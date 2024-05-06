<?php
include '../../config.php';
define('APP_NAME', 'Sistema de Información Clínica Veterinaria PETS HOME');
$URL = "http://localhost/sistemagestionveterinaria";

session_start();

if (isset($_SESSION['sesion_email'])) {
    session_destroy();
    header('Location: ' . $URL . '/');
}

?>