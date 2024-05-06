<?php

$URL = "http://localhost/sistemagestionveterinaria";
$servidor = "pgsql:host=127.0.0.1;port=5432;dbname=clinicaveterinaria";
$usuario = "postgres";
$password = "1234";

date_default_timezone_set("America/Bogota");
$fechaHora = date("Y-m-d H:i:s");

try {
    $pdo = new PDO($servidor, $usuario, $password);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
