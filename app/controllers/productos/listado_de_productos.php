
<?php

  try {
    $sql = "CREATE TABLE IF NOT EXISTS tb_productos (
        id_producto SERIAL PRIMARY KEY,
        codigo VARCHAR(50),
        nombre_producto VARCHAR(255),
        descripcion TEXT,
        imagen TEXT,
        stock INT,
        stock_minimo INT,
        stock_maximo INT,
        precio_compra INT,
        precio_venta INT,
        fecha_de_ingreso DATE,
        fyh_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        fyh_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        id_usuario INT
    )";
    
    $pdo->exec($sql);
    
} catch (PDOException $e) {
    echo "Error al crear la tabla tb_productos: " . $e->getMessage();
}


  $sql = "SELECT * FROM tb_productos";
  $query = $pdo->prepare($sql);
  $query->execute();
  $productos = $query->fetchAll(PDO::FETCH_ASSOC);

?>