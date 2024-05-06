<?php
include '../../app/appConfig.php'; // Archivo de configuración
include '../../admin/layout/parte1.php'; // Encabezado y estructura de la página
include '../../app/controllers/productos/listado_de_productos.php';
?>
<?php
$contador = 1;
foreach ($productos as $producto) {
    $contador = $contador + 1;
}
function ceros($numero)
{
    $len = 0;
    $cantidad_ceros = 1;
    $aux = $numero;
    $pos = strlen($numero);
    $len = $cantidad_ceros - $pos;
    for ($i = 0; $i < $len; $i++) {
        $aux = "0" . $aux;
    }
    return $aux;
}
?>

<br>
<div class="container-fluid">
    <h2>Creación de un nuevo servicio</h2>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h2 class="card-title"><b>Datos del servicio</b></h2>
                </div>
                <div class="card-body">
                    <form action="../../app/controllers/servicios/create.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-9">
                            <div class="row">
                                  <div class="col-md-2">
                                      <div class="form-group">
                                          <label for="">Código</label><b> *</b>
                                          <input type="text" class="form-control" value="S-<?=ceros($contador);?>" disabled>
                                          <input type="text" name="codigo" class="form-control" value="P-<?=ceros($contador);?>" hidden>
                                      </div>
                                  </div>
                                  <div class="col-md-8">
                                      <div class="form-group">
                                          <label for="">Nombre del servicio</label><b> *</b>
                                          <input type="text" name="nombre_servicio" class="form-control" required>
                                      </div>
                                  </div>                                  
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Descripción servicio</label>
                                          <input type="text" name="descripcion" class="form-control" required>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Precio servicio </label><b> *</b>
                                        <input type="number" name="precio" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            </div>
                          </div>
                          <input type="text" name="id_usuario" value="<?=$id_usuario_sesion;?>" hidden>
                          <hr>
                          <div class="row">
                            <div class="col-md-12">
                                <a href="" class="btn btn-secondary">Cancelar</a>
                                <input type="submit" class="btn btn-primary" value="Registrar servicio">
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Incluir archivos de cierre de la página
include '../../admin/layout/parte2.php'; // Pie de página y estructura de cierre
include '../../admin/layout/mensaje.php'; // Mensajes y notificaciones
?>

<script>
    function archivo(evt) {
        var files = evt.target.files; // FileList object
        // Obtenemos la imagen del campo "file".
        for (var i = 0, f; f = files[i]; i++) {
            //Solo admitimos imágenes.
            if (!f.type.match('image.*')) {
                continue;
            }
            var reader = new FileReader();
            reader.onload = (function (theFile) {
                return function (e) {
                    // Insertamos la imagen
                    document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="200px" title="', escape(theFile.name), '"/>'].join('');
                };
            })(f);
            reader.readAsDataURL(f);
        }
    }
    document.getElementById('file').addEventListener('change', archivo, false);
</script>