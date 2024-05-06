 <?php
include '../../app/appConfig.php';
include '../../admin/layout/parte1.php';
include '../../app/controllers/veterinarios/listado_veterinarios.php'; ?>

    <br>
    <div class="container-fluid">
        <h1>Listado de veterinarios</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Veterinarios registrados</b></h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Nro</th>
                                    <th style="text-align: center">Nombre completo</th>
                                    <th style="text-align: center">Email</th>
                                    <th style="text-align: center">Area Especializacion</th>
                                    <th style="text-align: center">Celular</th>
                                    <th style="text-align: center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $contador = 0; 
                            foreach ($veterinarios as $veterinario){
                                $contador = $contador + 1;
                                $id_veterinario = $veterinario['id_veterinario'];?>
                                <tr style="text-align: center" class="mt-2">
                                    <td><?php echo $contador; ?></td>
                                    <td><?php echo $veterinario['nombre_completo']; ?></td>
                                    <td><?php echo $veterinario['email']; ?></td>
                                    <td><?php echo $veterinario['area_especializacion']; ?></td>
                                    <td><?php echo $veterinario['contacto']; ?></td>
                                    <td style="text-align: center">
                                        <div class="btn-group" role="group" aria-label="Basic example">                                            
                                            <a href="show.php?id_veterinario=<?php echo $id_veterinario; ?>" class="btn btn-info mx-1 my-3 rounded"><i class="bi bi-eye" ></i></a>
                                            <a href="update.php?id_veterinario=<?php echo $id_veterinario;?>" type="button" class="btn btn-success mx-1 my-3 rounded"><i class="bi bi-pencil-square"></i></a>
                                            <a href="delete.php?id_veterinario=<?php echo $id_veterinario;?>" type="button" class="btn btn-danger mx-1 my-3 rounded"><i class="bi bi-trash3-fill"></i></a>

                                            
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Usuarios",
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