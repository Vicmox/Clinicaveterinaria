 <?php
include '../app/appConfig.php';
include '../admin/layout/parte1.php';
include '../app/controllers/usuarios/listado_de_usuarios.php';
include '../app/controllers/productos/listado_de_productos.php';
include '../app/controllers/reservas/listado_reservas.php';


?>

  <br>
  <h2>Bienvenido al Sistema - <?=$cargo_sesion;?></h2>
  <hr>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <?php
          $contador_de_usuario = 0;
          foreach ($usuarios as $usuario) {
            $contador_de_usuario = $contador_de_usuario + 1;
          }
          ?>
          <h3><?=$contador_de_usuario;?></h3>

          <p>Usuarios registrados</p>
        </div>
        <div class="icon">
          <i class="ion ion-">
            <i class="bi bi-file-earmark-person-fill"></i>
          </i>
        </div>
        <a href="<?=$URL."/admin/usuarios";?>" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <?php
          $contador_de_productos = 0;
          foreach ($productos as $producto) {
            $contador_de_productos = $contador_de_productos + 1;
          }
          ?>
          <h3><?=$contador_de_productos;?></h3>

          <p>Productos registrados</p>
        </div>
        <div class="icon">
          <i class="ion ion-">
            <i class="bi bi-basket"></i>
          </i>
        </div>
        <a href="<?=$URL."/admin/productos";?>" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <?php
          $contador_de_reservas = 0;
          foreach ($reservas as $reserva) {
            $contador_de_reservas = $contador_de_reservas + 1;
          }
          ?>
          <h3><?=$contador_de_reservas;?></h3>

          <p>Reservas registradas</p>
        </div>
        <div class="icon">
          <i class="ion ion-">
            <i class="bi bi-calendar-check-fill"></i>
          </i>
        </div>
        <a href="<?=$URL."/admin/reservas";?>" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>


  </div>
</div>  

<?php include '../admin/layout/parte2.php';
