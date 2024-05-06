<?php

$sql = "SELECT *,usu.nombre_completo as nombre_completo
        FROM tb_servicios as pro INNER JOIN tb_usuarios as usu ON usu.id_usuario = pro.id_usuario
         WHERE id_servicio = '$id_servicio' ";
         
$query = $pdo->prepare($sql);
$query->execute();
$servicios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($servicios as $servicio) {
    $id_servicio = $servicio['id_servicio'];
    $nombre_servicio = $servicio['nombre_servicio'];
    $descripcion = $servicio['descripcion'];
    $precio = $servicio['precio'];
    $id_usuario = $servicio['id_usuario'];
}
