<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid">
        <h1>Departamentos</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Departamentos
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
                        <form action="<?=base_url('agregar_departamentos') ?>" method="post">
                            <label for="txt_codigo" class="form-label mt-1">Código: </label>
                            <input type="number" name="txt_codigo_depto" id="txt_codigo_depto" class="form-control" placeholder="Ingrese codigo" required>
                            <label for="txt_nombre" class="form-label mt-1">Nombre: </label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="Ingrese Nombre" required>
                            <label for="select_region" class="form-label mt-1">Región:</label>
                            <select name="txt_cod_region" id="select_region" class="form-select" required>
                    
                                <?php 
                                // Extrae valores únicos de 'cod_region'
                                $regiones_unicas = array_unique(array_column($datos, 'cod_region')); 

                                foreach ($regiones_unicas as $cod_region): 
                                ?>
                                    <option value="<?= $cod_region; ?>">
                                        <?= $cod_region; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
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
                foreach ($datos as $departamento) {
            ?>
                <tr>
                    <td> <?=$departamento['cod_depto'];?> </td>
                    <td> <?=$departamento['nombre_depto'];?> </td>
                    <td> <?=$departamento['cod_region'];?> </td>
                    <td>
                        <a href="<?=base_url('eliminar_departamentos/').$departamento['cod_depto'];?>" class="bi bi-trash" style="color:black;"></a>
                        
                        <a href="<?=base_url('buscar_departamentos/').$departamento['cod_depto'];?>" class="bi bi-pencil" style="color:black;"></a>
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