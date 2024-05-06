<?php

try {
    $sql = "CREATE TABLE IF NOT EXISTS tb_veterinarios (
        id_veterinario SERIAL PRIMARY KEY,
        nombre_completo VARCHAR(255),
        email VARCHAR(255),
        password TEXT,
        contacto VARCHAR(50),
        area_especializacion TEXT,
        fecha_de_ingreso DATE,
        fyh_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        fyh_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    $pdo->exec($sql);
    
} catch (PDOException $e) {
    echo "Error al crear la tabla tb_veterinarios: " . $e->getMessage();
}

$sql = "SELECT * FROM tb_veterinarios";
$query = $pdo->prepare($sql);
$query->execute();
$veterinarios = $query->fetchAll(PDO::FETCH_ASSOC);

?>
