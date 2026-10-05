<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid">
        <h1>Regiones</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Región
        </button>

        <a href="<?= base_url('/') ?>" class="btn btn-secondary mb-3">
            <i class="bi bi-arrow-left-circle me-1"></i> Regresar al Menú Principal
        </a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Agregar Región</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('agregar_region') ?>" method="post">
                            <label for="txt_codigo" class="form-label mt-1">Código: </label>
                            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" placeholder="Ingrese codigo" required>
                            <label for="txt_nombre" class="form-label mt-1">Nombre: </label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="Ingrese nombre">
                            <label for="txt_descripcion" class="form-label mt-1">Descripción: </label>
                            <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control" placeholder="Ingrese descripción">
                            <button type="submit" class="btn btn-success mt-2 form-control"> Guardar </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <table class="table table-striped table-bordered w-auto text-center">
            <thead>
                <tr>
                    <th>Código</th>
                    <th class="w-25">Nombre</th>
                    <th class="w-75">Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $region) {
            ?>
                <tr>
                    <td> <?=$region['cod_region'];?> </td>
                    <td> <?=$region['nombre'];?> </td>
                    <td> <?=$region['descripcion'];?> </td>
                    <td>
                        <a href="<?=base_url('eliminar_region/').$region['cod_region'];?>" class="bi bi-trash" style="color:black;"></a>
                        
                        <a href="<?=base_url('buscar_region/').$region['cod_region'];?>" class="bi bi-square   " style="color:black;"></a>
                    </td>
                </tr>
                <?php
                }
            ?>
            </tbody>

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>