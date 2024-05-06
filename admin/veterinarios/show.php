<?php
include '../../app/appConfig.php';
include '../../admin/layout/parte1.php';

$id_veterinario = $_GET['id_veterinario'];
include '../../app/controllers/veterinarios/datos_del_veterinario.php';
?>

    <br>
    <div class="container-fluid">

        <h1>Datos del veterinario</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">

                        <h3 class="card-title"><b>Datos registrados</b></h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre completo</label>
                                        <input type="text" value="<?php echo $nombre_completo; ?>" name="nombre_completo" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Correo electronico</label>
                                        <input type="email" value="<?php echo $email; ?>" name="email" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Celular</label>
                                        <input type="email" value="<?php echo $contacto; ?>" name="email" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Area Especializacion</label>
                                        <input type="text" value="<?php echo $area_especializacion; ?>" name="nombre_completo" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="index.php" class="btn btn-secondary">Regresar</a>
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