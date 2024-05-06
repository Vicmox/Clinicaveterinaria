<?php
include '../../app/appConfig.php';
include '../../admin/layout/parte1.php';
$id_servicio = $_GET['id_servicio'];
include '../../app/controllers/servicios/datos_del_servicio.php';
?>

<br>
<div class="container-fluid">

    <h1>Datos del servicio</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b></b></h3>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Nombre del servicio</label>
                                            <input type="text" name="nombre_servicio" value="<?=$nombre_servicio;?>" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            <input type="text" name="descripcion" value="<?=$descripcion;?>" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Precio servicio:</label>
                                            <input type="number" name="precio" value="<?=$precio;?>" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="text" name="id_usuario" value="<?=$id_usuario_sesion;?>" hidden>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="index.php" class="btn btn-secondary"><< Regresar</a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../../admin/layout/parte2.php';
include '../../admin/layout/mensaje.php';
?>


