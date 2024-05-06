<?php
define('APP_NAME', 'Sistema de Información Clínica Veterinaria PETS HOME');
define('SERVIDOR', '127.0.0.1');
define('PUERTO', '5432'); // Puerto predeterminado de PostgreSQL
define('USUARIO', 'postgres');
define('PASSWORD', '1234');
define('BD', 'clinicaveterinaria'); // Nombre de la base de datos de PostgreSQL

date_default_timezone_set("America/Bogota");
$fechaHora = date("Y-m-d H:i:s");

try {
    $pdo = new PDO("pgsql:host=".SERVIDOR." port=".PUERTO." dbname=".BD." user=".USUARIO." password=".PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>console.log('¡Conexión exitosa a la base de datos!');</script>";
    
    // Consulta para crear la tabla tb_usuarios si no existe
    $sql_create_table = "
        CREATE TABLE IF NOT EXISTS tb_usuarios (
            id_usuario SERIAL PRIMARY KEY,
            nombre_completo VARCHAR(255),
            email VARCHAR(255),
            password TEXT,
            token VARCHAR(11) DEFAULT NULL,
            nombre_mascota VARCHAR(30),
            cargo VARCHAR(50),
            fyh_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            fyh_actualizacion TIMESTAMP DEFAULT NULL
        )
    ";
    
    // Ejecutar la consulta para crear la tabla
    $pdo->exec($sql_create_table);
    
    echo "<script>console.log('¡Tabla tb_usuarios creada con éxito!');</script>";
    
    // Consulta para agregar campos a la tabla tb_usuarios
    $sql_alter_table = "
        ALTER TABLE tb_usuarios
        ADD COLUMN IF NOT EXISTS token VARCHAR(11) DEFAULT NULL,
        ADD COLUMN IF NOT EXISTS nombre_mascota VARCHAR(30),
        ADD COLUMN IF NOT EXISTS cargo VARCHAR(50),
        ADD COLUMN IF NOT EXISTS fyh_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        ADD COLUMN IF NOT EXISTS fyh_actualizacion TIMESTAMP DEFAULT NULL
    ";
    
    // Ejecutar la consulta para agregar los campos adicionales
    $pdo->exec($sql_alter_table);
    
    echo "<script>console.log('¡Campos agregados a la tabla tb_usuarios!');</script>";
    
    // Consulta para verificar si el usuario administrador por defecto ya existe
    $sql_check_admin = "SELECT COUNT(*) AS count FROM tb_usuarios WHERE email = 'jheinember@gmail.com'";
    $query_check_admin = $pdo->prepare($sql_check_admin);
    $query_check_admin->execute();
    $result_check_admin = $query_check_admin->fetch(PDO::FETCH_ASSOC);
    
    // Si el usuario administrador no existe, insertarlo
    if ($result_check_admin['count'] == 0) {
        $hashed_password = password_hash('1234', PASSWORD_DEFAULT);
        $sql_insert_admin = "INSERT INTO tb_usuarios (nombre_completo, email, password, cargo)
                             VALUES ('Jheinember Jimenez', 'jheinember@gmail.com', :password, 'ADMINISTRADOR')";
        $query_insert_admin = $pdo->prepare($sql_insert_admin);
        $query_insert_admin->execute(['password' => $hashed_password]);
        
        echo "<script>console.log('¡Usuario administrador creado con éxito!');</script>";
    } else {
        echo "<script>console.log('El usuario administrador ya existe.');</script>";
    }
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
