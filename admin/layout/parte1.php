<?php
define('APP_NAME', 'Sistema de Información Clínica Veterinaria PETS HOME');
$URL = "http://localhost/sistemagestionveterinaria";

session_start();
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
    }

    if ($cargo_sesion == "CLIENTE") {
      header('Location: ' . $URL . '/');
    }

} else {
//echo "no ha pasado por el login";
    header('Location: ' . $URL . '/login');
}


?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo APP_NAME ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/dist/css/adminlte.min.css">

  <!-- jQuery -->
  <script src="<?php echo $URL; ?>/public/templeates/plugins/jquery/jquery.min.js"></script>

   <!-- Libreria de mensajes Sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
    /* Asegúrate de que el contenido ocupe el 100% del ancho */
    .content {
      width: 100%;
    }

    /* Evita que la barra de desplazamiento aparezca en el cuerpo */
    body {
      overflow-x: hidden;
    }

    /* Asegúrate de que el contenedor principal tenga una altura mínima */
    .wrapper {
      min-height: 100vh;
    }

    /* Ajusta el tamaño del logotipo y el texto del encabezado */
    .brand-image {
      width: 40px; /* Cambia este valor según tus necesidades */
      height: 40px; /* Cambia este valor según tus necesidades */
    }

    .brand-link b {
      font-size: 20px; /* Cambia este valor según tus necesidades */
    }

    /* Ajusta el tamaño del panel de usuario */
    .user-panel .info {
      font-size: 14px; /* Cambia este valor según tus necesidades */
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo $URL; ?>/admin" class="nav-link" ><?php echo APP_NAME; ?></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="<?php echo $URL; ?>/admin" class="brand-link">
      <img src="<?php echo $URL; ?>/public/templeates/dist/img/logo.png" alt="Clinica Veterinaria" class="brand-image img-circle elevation-3" >
      <b style="color: white; font-size: 15px;">SISTEMA DE INFORMACION </b>
    </a>
    <div href="<?php echo $URL; ?>/admin" >
    <br>
    <b class="mx-3 mb-2" style="color: gray; font-size: 14px;">CLINICA VETERINARIA PETS HOME</b>
    </div>


    <!-- Sidebar -->
    <div class="sidebar ">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3  d-flex">
        <div class="info">
          <a href="#" class="d-block">
            <b>Bienvenido</b> <br>Jheinember Stith Jimenez Nieto
          </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Servicios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/admin/servicios" class="nav-link">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person-lines-fill nav-icon mx-2"></i>
                    <p>Lista de servicios</p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/admin/servicios/create.php" class="nav-link">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person-plus nav-icon mx-2"></i>
                    <p>Nuevo servicio</p>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <br>
               <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Veterinarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/admin/veterinarios" class="nav-link">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person-lines-fill nav-icon mx-2"></i>
                    <p>Lista de veterinarios</p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/admin/veterinarios/create.php" class="nav-link">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person-plus nav-icon mx-2"></i>
                    <p>Nuevo veterinario</p>
                  </div>
                </a>
              </li>
            </ul>
          </li>     
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/admin/usuarios" class="nav-link">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person-lines-fill nav-icon mx-2"></i>
                    <p>Lista de usuarios</p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/admin/usuarios/create.php" class="nav-link">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person-plus nav-icon mx-2"></i>
                    <p>Nuevo usuario</p>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/admin/productos" class="nav-link">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-cart4 nav-icon mx-2"></i>
                    <p>Lista de productos</p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL; ?>/admin/productos/create.php" class="nav-link">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-bag-plus nav-icon mx-2"></i>
                    <p>Nuevo producto</p>
                  </div>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Reservas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/admin/reservas" class="nav-link">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person-lines-fill nav-icon mx-2"></i>
                    <p>Lista de reservas</p>
                  </div>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
              <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php" class="nav-link active" style="background-color: red">
                <i class="nav-icon fas fa-door-open"></i>
                <p href="<?php echo $URL; ?>/index.php" href="<?php echo $URL; ?>/admin/usuarios/create.php">
                  Cerrar Sesion
                </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>
  </parte1>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">