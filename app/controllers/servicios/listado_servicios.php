<?php

try {
    $sql = "CREATE TABLE IF NOT EXISTS tb_servicios (
        id_servicio SERIAL PRIMARY KEY,
        nombre_servicio VARCHAR(255),
        descripcion TEXT,
        precio INT,
        fecha_creacion DATE DEFAULT CURRENT_DATE,
        fecha_actualizacion DATE DEFAULT CURRENT_DATE,
        id_usuario INT,
        id_veterinario INT, -- Agrega una columna para el ID del veterinario asociado al servicio
        FOREIGN KEY (id_veterinario) REFERENCES tb_veterinarios(id_veterinario) -- Clave externa que referencia a la tabla de veterinarios
    )";
    
    $pdo->exec($sql);
    
} catch (PDOException $e) {
    echo "Error al crear la tabla tb_servicios: " . $e->getMessage();
}

$sql = "SELECT * FROM tb_servicios";
$query = $pdo->prepare($sql);
$query->execute();
$servicios = $query->fetchAll(PDO::FETCH_ASSOC);

?>
