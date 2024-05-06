 <?php
include '../../app/appConfig.php';
include '../../admin/layout/parte1.php';
include '../../app/controllers/reservas/listado_reservas.php';
?>

    <br>
    <div class="container-fluid">
        <h1>Listado de reservas</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Reservas registradas</b></h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Nro</th>
                                    <th style="text-align: center">Nombre de la mascota</th>
                                    <th style="text-align: center">Tipo de servicio</th>
                                    <th style="text-align: center">Fecha cita</th>
                                    <th style="text-align: center">Hora cita</th>
                                    <th style="text-align: center">Id Usuario</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $contador = 0;
                            foreach ($reservas as $reserva) {
                                $contador = $contador + 1;
                                $id_reserva = $reserva['id_reserva'];
                                ?>
                                <tr style="text-align: center" class="mt-2">
                                    <td><?php echo $contador;?></td>
                                    <td><?php echo $reserva['nombre_mascota']; ?></td>
                                    <td><?php echo $reserva['title']; ?></td>
                                    <td><?php echo $reserva['fecha_cita']; ?></td>
                                    <td><?php echo $reserva['hora_cita']; ?></td>
                                    <td><?php echo $reserva['id_usuario']; ?></td>
                                    
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Reservas",
                "infoEmpty": "Mostrando 0 a 0 de 0 Reservas",
                "infoFiltered": "(Filtrado de _MAX_ total Reservas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Reservas",
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