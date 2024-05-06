<?php
include '../../app/appConfig.php';
include '../../admin/layout/parte1.php';
include '../../app/controllers/servicios/listado_servicios.php';
?>

<br>
<div class="container-fluid">
    <h1>Listado de servicios</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Servicios registrados</b></h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center">Nro</th>
                                <th style="text-align: center">Código</th>
                                <th style="text-align: center">Nombre del servicios</th>
                                <th style="text-align: center">Descripcion del servicios</th>
                                <th style="text-align: center">Precio del servicio</th>
                                <th style="text-align: center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $contador = 0;
                            foreach ($servicios as $servicio) {
                                $contador = $contador + 1;
                                $id_servicio = $servicio['id_servicio'];
                                ?>
                                <tr style="text-align: center" class="mt-2">
                                    <td><center><?=$contador;?></center></td>
                                    <td><?=$servicio['id_servicio'];?></td>
                                    <td><?=$servicio['nombre_servicio'];?></td>
                                    <td><?=$servicio['descripcion'];?></td>
                                    <td>$<?=$servicio['precio'];?></td>
                                    <td style="text-align: center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="show.php?id_servicio=<?php echo $id_servicio; ?>" class="btn btn-info mx-1 my-3 rounded"><i class="bi bi-eye-fill"></i> </a>
                                           </div>
                                    </td>
                                </tr>
                            <?php
}
?>
                        </tbody>
                    </table>

                    <br><br>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../../admin/layout/parte2.php';
include '../../admin/layout/mensaje.php';
?>

<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
                "infoEmpty": "Mostrando 0 a 0 de 0 Productos",
                "infoFiltered": "(Filtrado de _MAX_ total Productos)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Productos",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
