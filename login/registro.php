<?php
include '../app/appConfig.php';
include '../layout/parte1.php';
include '../app/controllers/productos/listado_de_productos.php';
?>

<div class="container">
    <br><br>
    <center>
        <h1>Registrate</h1><br>
    </center>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Revisa bien tus datos
                </div>
                <div class="card-body">
                    <form action="../app/controllers/login/controller_registro.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre del usuario</label>
                                    <input type="text" name="nombre_completo" class="form-control">
                                </div>
                            </div>                    
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Correo electronico</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>                    
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre mascota </label>
                                    <input type="text" class="form-control" name="nombre_mascota">
                                </div>
                            </div>                    
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Contraseña</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>                    
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Repita contraseña</label>
                                    <input type="password" class="form-control" name="password_repetido" >
                                </div>
                            </div>                    
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit">Registrarme</button>  
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </form>                
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
    <br><br>

<?php
include '../layout/parte2.php';
include '../admin/layout/mensaje.php';

?>
