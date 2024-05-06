<?php

try {
    $sql = "CREATE TABLE IF NOT EXISTS tb_reservas (
        id_reserva SERIAL PRIMARY KEY,
        id_usuario INT,
        nombre_mascota VARCHAR(255),
        id_servicio INT, -- Agrega una columna para el ID del servicio
        id_veterinario INT, -- Agrega una columna para el ID del veterinario
        fecha_cita DATE,
        hora_cita VARCHAR(100),
        title VARCHAR(100),
        start DATE,
        end_date DATE,
        color VARCHAR(50),
        fyh_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        fyh_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (id_servicio) REFERENCES tb_servicios(id_servicio), -- Clave externa que referencia a la tabla de servicios
        FOREIGN KEY (id_veterinario) REFERENCES tb_veterinarios(id_veterinario) -- Clave externa que referencia a la tabla de veterinarios
    )";
    
    $pdo->exec($sql);
    
} catch (PDOException $e) {
    echo "Error al crear la tabla tb_reservas: " . $e->getMessage();
}

$sql = "SELECT * FROM tb_reservas";
$query = $pdo->prepare($sql);
$query->execute();
$reservas = $query->fetchAll(PDO::FETCH_ASSOC);

?>

