<?php

$sql = "SELECT * FROM tb_veterinarios WHERE id_veterinario = '$id_veterinario' ";
$query = $pdo->prepare($sql);
$query->execute();
$veterinarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($veterinarios as $veterinario) {
    $nombre_completo = $veterinario['nombre_completo'];
    $email = $veterinario['email'];
    $contacto = $veterinario['contacto'];
    $area_especializacion = $veterinario['area_especializacion'];
}
