<?php
session_start();
$email_sesion = "";
if (isset($_SESSION['sesion_email'])) {
//echo "ha pasado por el login";
    $email_sesion = $_SESSION['sesion_email'];
    $sql = "SELECT * FROM tb_usuarios WHERE email = '$email_sesion' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario) {
        $id_usuario_sesion = $usuario['id_usuario'];
        $cargo_sesion = $usuario['cargo'];
        $nombre_completo_sesion = $usuario['nombre_completo'];
        $nombre_mascota_sesion = $usuario['nombre_mascota'];


    }
} else {
//echo "no ha pasado por el login";
   // header('Location: ' . $URL . '/login');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistema de Informacion Clinica Veterinaria</title>

    <link href="<?php echo $URL;?>/public/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- ICONOS DE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- JQUERY -->
    <script src="<?php echo $URL;?>/public/js/jquery-3.6.4.min.js"></script> 
    <!-- STYLES CSS -->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/css/style.css">
     <!-- Libreria de mensajes Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>   

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $URL;?>" style="font-family: 'Open Sans', sans-serif; font-size: 20px; font-weight: bold; text-decoration: none; color: #333;">
            <img src="<?php echo $URL; ?>/public/images/pets.jpg" alt="Logo" width="130" height="70" style="margin-right: 10px; vertical-align: middle;">
            <span style="vertical-align: middle;">Clínica Veterinaria PETS HOME</span>
        </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="d-flex" role="search">

                <div style="display: flex; align-items: center;">
        <a class="btn btn-info me-2" href="<?php echo $URL;?>" role="button">
            <i class="bi bi-house-door-fill pe-1"></i> Inicio
        </a> 

        <a class="btn btn-info me-5" href="#contacto" role="button">
            <i class="bi bi-person-vcard-fill pe-1"></i> Contacto
        </a>
    </div>

                <?php

               
                
                if($email_sesion == ""){
                    //echo "sin logearse";
                    ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="btn btn-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Ingresar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $URL; ?>/login">Iniciar Sesión</a></li>
                                <li><a class="dropdown-item" href="<?php echo $URL; ?>/login/registro.php">Registrarme</a></li>
                            </ul>
                        </li>
                    </ul>

                <?php
                }else{
                //echo "ya paso el login";
                    ?>
                        <ul class="navbar-nav ms-2 me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-muted me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-person-circle" style="font-size: 1.5rem;"></i>
                                    <span style="margin-left: 0.5rem;"><?php echo $nombre_completo_sesion;?>&nbsp;</span>
                            </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                        </ul>
                     <?php
                }
                ?>                
            </div>
        </div>
    </div>
</nav>
