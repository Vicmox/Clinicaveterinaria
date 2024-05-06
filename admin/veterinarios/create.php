<?php
include '../../app/appConfig.php';
include '../../admin/layout/parte1.php';?>

<div class="container-fluid">
  <h2>Creacion de un nuevo veterinario</h2>

  <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h2 class="card-title"><b>Datos del usuario</b></h2>
                    </div>
                    <div class="card-body">                      
                      <form action="../../app/controllers/veterinarios/create.php" method="post">
                        <div class="row">  
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Nombre completo<b>*</b></label>
                                <input type="text" name="nombre_completo" class="form-control" placeholder="Nombre completo" required>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Correo electronico <b>*</b></label>
                                <input type="email" name="email" class="form-control" placeholder="Correo electronico" required>
                              </div>
                            </div>
                        </div>
                        <div class="row">  
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Celular<b>*</b></label>
                                <input type="text" name="contacto" class="form-control" placeholder="Celular" required>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Area de especializacion  <b>*</b></label>
                                <input type="text" name="area_especializacion" class="form-control" placeholder="Area de especializacion" required>
                              </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                          <div class="col-md-12">
                            <a href="" class="btn btn-secondary">Cancelar</a>
                            <input type="submit" class="btn btn-primary" value="Registrar veterinario">
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



