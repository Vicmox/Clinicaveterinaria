<?php
include '../../app/appConfig.php';
include '../../admin/layout/parte1.php';

$id_veterinario = $_GET['id_veterinario'];
include '../../app/controllers/veterinarios/datos_del_veterinario.php';
?>
    <br>
    <div class="container-fluid">

        <h1>Actualización del veterinario <?php echo $nombre_completo; ?></h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos del veterinario</b></h3>
                    </div>
                    <div class="card-body">
                        <form action="../../app/controllers/veterinarios/update.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre completo <b>*</b></label>
                                        <input type="text" name="nombre_completo" value="<?php echo $nombre_completo; ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Correo electronico <b>*</b></label>
                                        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Celular </label>
                                        <input type="text" name="contacto" class="form-control" value="<?php echo $contacto; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Area Especializacion</label>
                                        <input type="text" name="area_especializacion" class="form-control" value="<?php echo $area_especializacion; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="id_veterinario" value="<?php echo $id_veterinario; ?>" hidden>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="" class="btn btn-secondary">Cancelar</a>
                                    <input type="submit" class="btn btn-success" value="Actualizar veterinario">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include '../../admin/layout/parte2.php';
include '../../admin/layout/mensaje.php';
?>